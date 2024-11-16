<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarRentController;
use App\Http\Controllers\CarSellController;
use App\Http\Controllers\UserAddressController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\isLoggedIn;
use App\Models\CarRent;
use App\Models\CarSell;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

//Middleware routes
Route::middleware([isLoggedIn::class])->group(function(){
    Route::get('/user',[UserController::class, 'index']);
    Route::get('/user_address',[UserAddressController::class, 'index']);
    Route::get('/car_sell',[CarSell::class, 'index']);
    Route::get('/car_rent',[CarRent::class, 'index']);
    Route::get('/home_admin', function() {
        return view('auth.home_admin');
    })->name('home_admin');
});

//Rental car routes
Route::get('/car_rent/create',[CarRentController::class,'create']);
Route::get('/car_rent/{car_rent}',[CarRentController::class,'show']);
Route::post('/car_rent',[CarRentController::class,'store']);
Route::get('/car_rent/{car_rent}/edit',[CarRentController::class,'edit']);
Route::put('/car_rent/{car_rent}',[CarRentController::class,'update']);
Route::delete('/car_rent/{car_rent}',[CarRentController::class,'destroy']);
//For sale car routes
Route::get('/car_sell/create',[CarSellController::class,'create']);
Route::get('/car_sell/{car_sell}',[CarSellController::class,'show']);
Route::post('/car_sell',[CarSellController::class,'store']);
Route::get('/car_sell/{car_sell}/edit',[CarSellController::class,'edit']);
Route::put('/car_sell/{car_sell}',[CarSellController::class,'update']);
Route::delete('/car_sell/{car_sell}',[CarSellController::class,'destroy']);

//User routes
Route::get('/user/create',[UserController::class,'create']);
Route::get('/user/{user}',[UserController::class,'show']);
Route::post('/user',[UserController::class,'store']);
Route::get('/user/{user}/edit',[UserController::class,'edit']);
Route::put('/user/{user}',[UserController::class,'update']);
Route::delete('/user/{user}',[UserController::class,'destroy']);
//User address routes
Route::get('/user_address/create',[UserAddressController::class,'create']);
Route::get('/user_address/{user_address}',[UserAddressController::class,'show']);
Route::post('/user_address',[UserAddressController::class,'store']);
Route::get('/user_address/{user_address}/edit',[UserAddressController::class,'edit']);
Route::put('/user_address/{user_address}',[UserAddressController::class,'update']);
Route::delete('/user_address/{user_address}',[UserAddressController::class,'destroy']);

//Authentication routes
Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

//Home route
Route::get('/home', function() {
    return view('auth.home');
})->name('home');
