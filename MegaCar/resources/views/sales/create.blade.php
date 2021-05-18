@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/8 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Compra veicolo 
            </h1>
            <p class="p-6 text-4xl text-center uppercase text-megacar-primary font-semibold"> {{ $car_brand->name }} {{ $model_name->model_name }} {{ $model_name->prod_year }} </p>
        </div>
    </div>
    <div class="flex justify-center pt-20">
        <form action="/sales/buy" method="POST">
            @csrf
            <div class="block">
                <p class="pb-4 uppercase text-megacar-primary font-bold text-xs">Motore: </p>
                <select name="engine_id" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400 border border-megacar-primary rounded-md required">
                    @forelse ( $engines as $engine )
                        <option value=" {{ $engine->id }}">{{ $engine->engine_name }}</option>
                    @empty
                        <option value="null" selected disabled>Nessun motore trovato</option>
                    @endforelse
                </select>
                <p class="pb-4 uppercase text-megacar-primary font-bold text-xs">PREZZO: </p>
                <input type="text" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400 border border-megacar-primary rounded-md required" readonly name="price" value="{{ $model_name->price }}"> 
                <input type="hidden" name="user_email" value="{{ Auth::user()->email }}">
                <button type="submit" class=" bg-megacar-primary block shadow-5xl mb-10 p-2 w-80 text-gray-200 uppercase font-bold rounded-md">
                    Submit
                </button>
            </div>
        </form>
    </div>

    @if ($errors->any())
    <div class="w-4/8 m-auto text-center">
        @foreach ($errors->all() as $error)
            <li class="text-red-500 list-none">
                {{ $error }}
            </li>
        @endforeach
    </div>
@endif
@endsection