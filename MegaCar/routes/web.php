<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\CarModelController;
use App\Http\Controllers\MotorsController;
use App\Http\Controllers\SalesController;
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
Route::resource('/carmodels', CarModelController::class); //CARSMODELs ROUTE megacar.project/carmodels
Route::resource('/engines', MotorsController::class); //ENGINE ROUTE megacar.project/engines

Route::get('/sales/{id}/create', [\App\Http\Controllers\SalesController::class, 'create']); //SALE ROUTE megacar.project/sales/{id}/create
Route::post('/sales/buy', [\App\Http\Controllers\SalesController::class, 'store']); //SALE ROUTE megacar.project/sales


Auth::routes(); //AUTH ROUTE /login /register /logout

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home'); //HOME ROUTE megacar.project/home

Route::get('/', function () 
{ //INDEX ROUTE megacar.project/
    return view('guest');
});
