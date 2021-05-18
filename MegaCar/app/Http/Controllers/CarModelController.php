<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\CarModel;
use App\Models\Engine;
use App\Http\Requests\CreateValidationRequest;
// use App\Rules\Uppercase;
class CarModelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create()
    {
        $cars = Car::all();
        return view('carmodels.create', [ 'cars' => $cars]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'model_name' => 'required|string',
            'price' => 'required|numeric',
            'prod_year' => 'required|numeric'
        ]);

        $carModel = CarModel::create([
            'model_name' => $request->input('model_name'),
            'car_id' => $request->input('car_id'),
            'price' => $request->input('price'),
            'prod_year' => $request->input('prod_year'),
            'used' => $request->input('used')
        ]);

        return redirect('/cars');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$car = Car::find($id)->first();
        $carModel = CarModel::find($id);
        return view('carmodels.edit')->with('carModel', $carModel);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'model_name' => 'required|unique:car_models|string',
            'price' => 'required|numeric',
            'prod_year' => 'required|numeric'
        ]);
        
        $car = CarModel::where('id', $id)
        ->update([
            'model_name' => $request->input('model_name'),
            'price' => $request->input('price'),
            'prod_year' => $request->input('prod_year')
        ]);
        return redirect('/cars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy(CarModel $carmodel)
    {
        $carmodel->delete();
        return redirect('/cars');
    }
}
