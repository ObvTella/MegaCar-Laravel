<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('/cars', CarsController::class); //CARS ROUTE megacar.project/cars

Auth::routes(); //AUTH ROUTE /login /register /logout

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home'); //HOME ROUTE megacar.project/home

Route::get('/', function () 
{ //INDEX ROUTE megacar.project/
    return view('guest');
});
