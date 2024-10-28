<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index() {
        //Tampilan index di dalam folder dashboard
        return view('order.index', [
            "title" => "RentSTAR - Manage Transaksi"
        ]);
    }
}
