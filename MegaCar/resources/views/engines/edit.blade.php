@extends('layouts.app')
@if (Auth::user()->admin == '1')
    @section('content')
        <div class="m-auto w-4/8 py-24">
            <div class="text-center">
                <h1 class="text-5xl uppercase bold">
                    Aggiorna motore: 
                </h1>
                <p class="p-6 text-4xl text-center uppercase text-megacar-primary font-semibold"> {{ $engine->engine_name }} </p>
            </div>
        </div>

        <div class="flex justify-center pt-20">
            <form action="/engines/{{ $engine->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="block">
                    <input type="text" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400 border border-megacar-primary rounded-md required" name="engine_name" placeholder="Nome motore...">
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