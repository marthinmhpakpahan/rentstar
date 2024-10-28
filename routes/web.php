<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('welcome');
});

// Authentication
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [UserController::class, 'authenticate'])->name('login')->middleware('guest');
Route::get('/register', [UserController::class, 'register'])->name('register')->middleware('guest');
Route::post('/register', [UserController::class, 'create'])->name('register')->middleware('guest');
Route::match(['get','post'],'/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/profile', [UserController::class, 'profile'])->name('profile');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

// Dashboard
Route::resource('dashboard', 'DashboardController')->except(['show'])->middleware('auth');
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index')->middleware('auth');

// Vehicle
Route::resource('vehicle', 'VehicleController')->except(['show'])->middleware('auth');
Route::get('vehicle', [VehicleController::class, 'index'])->name('vehicle.index')->middleware('auth');
Route::get('vehicle/create', [VehicleController::class, 'create'])->name('vehicle.create')->middleware('auth');
Route::post('vehicle/create', [VehicleController::class, 'create'])->name('vehicle.create')->middleware('auth');
Route::get('vehicle/{vehicle_id}', [DriverController::class, 'show'])->name('vehicle.show')->middleware('auth');
Route::get('vehicle/update/{vehicle_id}', [DriverController::class, 'update'])->name('vehicle.update')->middleware('auth');

// Driver
Route::resource('driver', 'DriverController')->except(['show'])->middleware('auth');
Route::get('driver', [DriverController::class, 'index'])->name('driver.index')->middleware('auth');
Route::get('driver/create', [DriverController::class, 'create'])->name('driver.create')->middleware('auth');
Route::post('driver/create', [DriverController::class, 'create'])->name('driver.create')->middleware('auth');
Route::get('driver/{driver_id}', [DriverController::class, 'show'])->name('driver.show')->middleware('auth');
Route::get('driver/update/{driver_id}', [DriverController::class, 'update'])->name('driver.update')->middleware('auth');

// Order
Route::resource('order', 'OrderController')->except(['show'])->middleware('auth');
Route::get('order', [OrderController::class, 'index'])->name('order.index')->middleware('auth');

 
Route::get('/greeting', function () {
    return 'Hello World';
});
