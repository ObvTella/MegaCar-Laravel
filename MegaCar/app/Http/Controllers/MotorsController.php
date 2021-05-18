<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\CarModel;
use App\Models\Engine;
use App\Models\CarProductionDate;
use App\Http\Requests\CreateValidationRequest;
// use App\Rules\Uppercase;

class MotorsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create()
    {
        $carModels = CarModel::all();
        return view('engines.create', ['carModels' => $carModels]);
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
            'engine_name' => 'required|string'
        ]);

        $engine = Engine::create([
            'model_id' => $request->input('model_id'),
            'engine_name' => $request->input('engine_name')
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
        $engine = Engine::find($id);
        return view('engines.edit')->with('engine', $engine);
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
            'engine_name' => 'required|string'
        ]);

        
        $engine = Engine::where('id', $id)
        ->update([
            'engine_name' => $request->input('engine_name')
        ]);
        return redirect('/cars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy(Engine $engine)
    {
        $engine->delete();
        return redirect('/cars');
    }
}
