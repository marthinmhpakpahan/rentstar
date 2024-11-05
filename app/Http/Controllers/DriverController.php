<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DriverController extends Controller
{
    public function index() {
        $user_id = Auth::id();
        $user = User::where('id', $user_id)->first();
        $drivers = Driver::where('company_id', $user->company_id)->get();

        return view('driver.index', [
            "title" => "RentSTAR - Manage Driver",
            "page_title" => "Manage Driver",
            "drivers" => $drivers,
            "user_id" => $user_id
        ]);
    }

    public function show($driver_id) {
        $user_id = Auth::id();
        $user = User::where('id', $user_id)->first();
        $driver = Driver::where('id', $driver_id)->first();

        return view('driver.index', [
            "title" => "RentSTAR - Manage Driver",
            "page_title" => "Manage Driver",
            "driver" => $driver,
            "user_id" => $user_id
        ]);
    }

    public function create(Request $request) {
        $user_id = Auth::id();
        $user = User::where('id', $user_id)->first();

        if($request->method() == "POST") {
            $credentials = $request->validate([
                    'name' => 'required',
                    'phone_no' => 'required',
                    'photo' => 'required',
                    'driver_license' => 'required'
            ]);

            $result = Driver::create([
                'name' => $request->name,
                'phone_no' => $request->phone_no,
                'photo' => CommonFunctions::uploadFiles($request->file('photo'), "DRIVER_PHOTO"),
                'driver_license' => CommonFunctions::uploadFiles($request->file('driver_license'), "DRIVER_LICENSE"),
                "company_id" => $user->company_id
            ]);

            if(!$result) {
                return back()->withInput()->with('failed','Gagal menambahkan driver!');
            }
            return redirect('/driver')->with('success', 'Berhasil menambahkan driver anda!');

        } else {
            return view('driver.create', [
                "title" => "RentSTAR - Manage Driver",
                "page_title" => "Manage Driver",
                "user_id" => $user_id,
                "company_id" => $user->company_id
            ]);
        }
    }

    public function update(Request $request, $driver_id) {
        $user_id = Auth::id();
        $user = User::where('id', $user_id)->first();
        $driver = Driver::where('id', $driver_id)->first();

        if($request->method() == "POST") {
            $credentials = $request->validate([
                    'name' => 'required',
                    'phone_no' => 'required',
                    'photo' => 'required',
                    'driver_license' => 'required'
            ]);

            $driver->name = $request->name;
            $driver->phone_no = $request->phone_no;
            $driver->photo = CommonFunctions::uploadFiles($request->file('photo'), "DRIVER_PHOTO");
            $driver->driver_license = CommonFunctions::uploadFiles($request->file('driver_license'), "DRIVER_LICENSE");
            $driver->company_id = $user->company_id;

            $result = $driver->save();

            if(!$result) {
                return back()->withInput()->with('failed','Gagal mengubah data driver!');
            }
            return redirect('/driver')->with('success', 'Berhasil mengubah data driver anda!');

        } else {
            return view('driver.update', [
                "title" => "RentSTAR - Manage Driver",
                "page_title" => "Manage Driver",
                "user_id" => $user_id,
                "company_id" => $user->company_id,
                "driver" => $driver
            ]);
        }
    }
}
