<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Vehicle;
use App\Models\VehicleCategory;
use App\Models\VehicleImages;
use Illuminate\Support\Facades\Auth;

class VehicleController extends Controller
{
    public function index() {
        $user_id = Auth::id();
        $user = User::where('id', $user_id)->first();
        $vehicles = Vehicle::where('company_id', $user->company_id)->get();

        return view('vehicle.index', [
            "title" => "RentSTAR - Manage Armada",
            "page_title" => "Manage Armada",
            "vehicles" => $vehicles,
            "user_id" => $user_id
        ]);
    }

    public function create(Request $request) {
        $user_id = Auth::id();
        $user = User::where('id', $user_id)->first();
        $vehicle_categories = VehicleCategory::all();

        if($request->method() == "POST") {
            $credentials = $request->validate([
                'vehicle_category' => 'required',
                'name' => 'required',
                'police_no' => 'required',
                'insurance' => 'required',
                'price' => 'required',
                'images' => 'required',
            ]);

            $resultVehicle = Vehicle::create([
                "company_id" => $user->company_id,
                "vehicle_category_id" => $request->vehicle_category,
                'name' => $request->name,
                'police_no' => $request->police_no,
                "insurance" => $request->insurance == "Yes" ? true : false,
                "price" => $request->price,
            ]);

            $resultVehicleImages = false;
            if($resultVehicle) {
                $vehicleImages = CommonFunctions::uploadFiles($request->file('images'), "CAR_IMAGE", $user->company_id);
                foreach($vehicleImages as $image) {
                    $resultVehicleImages = VehicleImages::create([
                        "vehicle_id" => $resultVehicle->id,
                        "image_path" => $image
                    ]);
                }
            }

            if(!$resultVehicle || !$resultVehicleImages) {
                return back()->withInput()->with('failed','Gagal menambahkan driver!');
            }
            return redirect('/vehicle')->with('success', 'Berhasil menambahkan driver anda!');

        } else {
            return view('vehicle.create', [
                "title" => "RentSTAR - Create Armada",
                "page_title" => "Create Armada",
                "user_id" => $user_id,
                "company_id" => $user->company_id,
                "company_name" => $user->company->name,
                "categories" => $vehicle_categories
            ]);
        }
    }
}
