<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $title = 'MegaCar';
        $description = 'Elaborato esame di stato 2021';
        $data = [
            'productOne' => 'Supra',
            'productTwo' => 'Skyline'
        ];
        //cartella.file
        //return view('products.index', compact('title', 'description')); //MODELLO COMPACT (PIU variabili)
        //return view('products.index')->with('title', $title); //MODELLO WITH (1 variabile)
        return view('products.index')->with('data', $data); //MODELLO WITH (1 variabile)
    }
    public function about()
    {
        return 'ABOUT US';
    }
}
