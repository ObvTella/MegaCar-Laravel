<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\CarModel;
use App\Models\Engine;
use App\Models\User;
use App\Models\Prenotation;
use App\Http\Requests\CreateValidationRequest;
use DB;


class PrenotationsController extends Controller
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
        return view('prenotations.create')->with('engines', $engines)->with('model_name', $model_name)->with('car_brand', $car_brand);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prenotations = Prenotation::create([
            'user_email' => $request->input('user_email'),
            'engine_id' => $request->input('engine_id'),
            'date'=> $request->input('date'),
        ]);

        return redirect('/cars');
    }

    public function show($email)
    {
        $user = User::where('email', $email)->get()->first();

        $prenotations = DB::table('prenotations')
            ->join('engines', 'engines.id', '=', 'prenotations.engine_id')
            ->join('car_models', 'car_models.id', '=', 'engines.model_id')
            ->join('cars', 'cars.id', '=', 'car_models.car_id')
            ->select(
                'prenotations.id as id_prenotazione', 'prenotations.date as data',
                'cars.name as brand', 
                'car_models.model_name as modello', 'car_models.prod_year as anno_prod',
                'engines.engine_name as motore'
                    )
            ->where('prenotations.user_email', $user->email)
            ->groupBy('id_prenotazione')
            ->get();

        return view('prenotations.show')->with('prenotations', $prenotations)->with('user', $user);
    }
}
