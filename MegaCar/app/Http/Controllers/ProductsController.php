<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        // $title = 'MegaCar';
        // $description = 'Elaborato esame di stato 2021';
        // $data = [
        //     'productOne' => 'Supra',
        //     'productTwo' => 'Skyline'
        // ];

        //cartella.file
        //return view('products.index', compact('title', 'description')); //MODELLO COMPACT (PIU variabili)

        //return view('products.index')->with('title', $title); //MODELLO WITH (1 variabile)

        //return view('products.index')->with('data', $data); //MODELLO WITH (1 variabile)

        //return view('products.index', ['data' => $data]); 
        print_r(route('products'));
        return view('products.index');
    }
    public function about()
    {
        return 'ABOUT US';
    }
    public function show($name)
    {
        $data = [
            'supra' => 'Supra',
            'skyline' => 'Skyline'
        ];
        return view('products.index', [
            'macchina' => $data[$name] ?? 'Macchina ' . $name . ' non esiste' 
            //?? ritorna il primo valore se esiste altrimenti il secondo: x ?? y |  x esiste: x | x non esiste: y
            ]); 
    }

}
