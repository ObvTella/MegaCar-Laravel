<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\CarModel;
use App\Models\Engine;
use App\Models\Sales;
use App\Http\Requests\CreateValidationRequest;


class SalesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $engines = Engine::where('model_id', $id)->get();
        $model_name = CarModel::where('id', $id)->first();
        $car_brand = Car::where('id', $model_name->car_id)->first();
        return view('sales.create')->with('engines', $engines)->with('model_name', $model_name)->with('car_brand', $car_brand);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sale = Sales::create([
            'user_email' => $request->input('user_email'),
            'engine_id' => $request->input('engine_id'),
            'price'=> $request->input('price'),
        ]);

        return redirect('/cars');
    }
}
