<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

// Authentication
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [UserController::class, 'authenticate'])->name('login')->middleware('guest');
Route::get('/register', [UserController::class, 'register'])->name('register')->middleware('guest');
Route::post('/register', [UserController::class, 'create'])->name('register')->middleware('guest');
Route::match(['get','post'],'/logout', [UserController::class, 'logout'])->name('logout');

// Dashboard
Route::resource('dashboard', 'DashboardController')->except(['show'])->middleware('auth');
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

 
Route::get('/greeting', function () {
    return 'Hello World';
});
