<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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
    return view('home');
});

//Route::metodo('/rotta', [nomeController::class, 'metodoController']);
// /product = mostra tutte le macchine
//Route::get('/products', [ProductsController::class, 'index']); //PRODUCTS ROUTE megacar.project/products

//NAME FUNCTION SULLA ROTTA
Route::get('/products', [ProductsController::class, 'index'])->name('products'); //PRODUCTS ROUTE megacar.project/products

// /product/idProdotto                             //dove l'id e' un numero da 0 a 9 //+ vuol dire piu numeri | Senza + /10: no | Con + /10: ok
//Route::get('/products/{id}', [ProductsController::class, 'show'])->where('id', '[0-9]+'); //PRODUCTS ROUTE megacar.project/products/{id}

// /product/nomeProdotto                           //dove name e' composto da caratteri a-z o A-Z //+ vuol dire piu caratteri
//Route::get('/products/{name}', [ProductsController::class, 'show'])->where('name', '[a-zA-Z]+'); //PRODUCTS ROUTE megacar.project/products/{name}

// /product/nomeProdotto/{id}                           //dove name e' composto da caratteri a-z o A-Z | dove l'id e' un numero da 0 a 9 //+ vuol dire piu caratteri o numeri
//Route::get('/products/{name}/{id}', [ProductsController::class, 'show'])->where(['name' => '[a-zA-Z]+', 'id' => '[0-9]+']); //PRODUCTS ROUTE megacar.project/products/{name}

//Route::get('/products', 'App\Http\Controllers\ProductsController@index'); //METODO STRANO Laravel
