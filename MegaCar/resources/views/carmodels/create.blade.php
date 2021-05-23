@extends('layouts.app')
@if (Auth::user()->admin == '1')
    @section('content')
        <div class="m-auto w-4/8 py-24">
            <div class="text-center">
                <h1 class="text-5xl uppercase bold">
                    Aggiungi modello
                </h1>
            </div>
        </div>

        <div class="flex justify-center pt-20">
            <form action="/carmodels" method="POST">
                @csrf
                <div class="block">
                    <select name="car_id" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400 border border-megacar-primary rounded-md required">
                        @foreach ($cars as $car)
                            <option value="{{ $car->id }}"> {{ $car->name }}</option>
                        @endforeach
                    </select>
                    <input type="text" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400 border border-megacar-primary rounded-md required" name="model_name" placeholder="Modello...">
                    <input type="number" min="1" step="any" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400 border border-megacar-primary rounded-md required" name="price" placeholder="Prezzo...">
                    <input type="number" min="1800" max="2021" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400 border border-megacar-primary rounded-md required" name="prod_year" placeholder="Anno di produzione...">
                    <select name="used" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400 border border-megacar-primary rounded-md required">
                        <option value="0">Nuova</option>
                        <option value="1">Usata</option>
                    </select>
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
@else
    @section('content')
        <div class="text-center text-red-600">Non hai i permessi adatti!</div>
    @endsection
@endif