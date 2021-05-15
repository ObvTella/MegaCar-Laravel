<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Headquarter;
use App\Models\Product;
use App\Http\Requests\CreateValidationRequest;
// use App\Rules\Uppercase;

class CarsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *S
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // PAGINE
            // Query builder
            // $cars = DB::table('cars')->paginate(5);
            $cars = Car::paginate(5);

        // SELECT * FROM CARS
        // $cars = Car::all();
        return view('cars.index', [ 'cars' => $cars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
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
            'name' => 'required|unique:cars|string',
            'founded' => 'required|integer|min:1800|max:2021',
            'description' => 'required|string',
            'image' => 'required|mimes:png,jpg,jpeg|max:5048' // estensioni | grandezza in KB
        ]);

        $newImageName = time() . '-' . $request->name . '.' . $request->image->extension(); //Nuovo nome alla foto -> ora|marca.estensione

        $request->image->move(public_path('images'), $newImageName); //sposto la foto su public\images

        $car = Car::create([
            'name' => $request->input('name'),
            'founded' => $request->input('founded'),
            'description'=> $request->input('description'),
            'image_path' => $newImageName,
            'user_id' => auth()->user()->id
        ]);

        return redirect('/cars');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::find($id);
        //$products = Product::find($id);
        return view('cars.show')->with('car', $car);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$car = Car::find($id)->first();
        $car = Car::find($id);
        return view('cars.edit')->with('car', $car);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateValidationRequest $request, $id)
    {
        $request->validate();
        $car = Car::where('id', $id)
            ->update([
            'name' => $request->input('name'),
            'founded' => $request->input('founded'),
            'description'=> $request->input('description')
        ]);
        return redirect('/cars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect('/cars');
    }
}
