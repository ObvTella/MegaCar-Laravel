@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/8 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Aggiorna brand: 
            </h1>
            <p class="p-6 text-4xl text-center uppercase text-megacar-primary font-semibold"> {{ $car->name }} </p>
        </div>
    </div>

    <div class="flex justify-center pt-20">
        <form action="/cars/{{ $car->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="block">
                <input type="text" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400 border border-megacar-primary rounded-md" name="name" placeholder="Brand name..." value="{{ $car->name }}">
                <input type="text" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400 border border-megacar-primary rounded-md" name="founded" placeholder="Founded..." value="{{ $car->founded }}">
                <input type="text" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400 border border-megacar-primary rounded-md" name="description" placeholder="Description..." value="{{ $car->description }}">
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