<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $title = 'MegaCar';
        //cartella.file
        return view('products.index', compact('title'));
    }
    public function about()
    {
        return 'ABOUT US';
    }
}
