<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () { //INDEX ROUTE megacar.project/
    return view('welcome');
});

//Route to users - String
Route::get('/users', function () { //USERS ROUTE megacar.project/users
    return 'Benvenuto';
});

//Route to users - Array (JSON)
Route::get('/users', function () { //USERS ROUTE megacar.project/users
    return ['PHP', 'Laravel'];
});

//Route to users - JSON Object
Route::get('/users', function () { //USERS ROUTE megacar.project/users
    return response()->json([
        'name' => 'Luigi',
        'sito' => 'MegaCar'
    ]);
});

//Route to users - Function
Route::get('/users', function () { //USERS ROUTE megacar.project/users
    return redirect('/');
});