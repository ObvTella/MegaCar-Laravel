@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold text-gray-900 italic">
                catalogo
            </h1>
        </div>

        @if (Auth::user()->admin == '1')
            <div class="pt-10">
                <a href="/cars/create" class="border p-2 font-semibold text-megacar-primary rounded-md">Aggiungi un brand &rarr;</a>
            </div>
        @endif

        <div class="w-5/6 py-10">
            @foreach ($cars as $car)
            <div class=" p-4 m-auto flex flex-none justify-between">
                <div class=" flex flex-row flex-none w-11/12">
                    <div class=" w-1/12 flex items-center justify-center flex-none">
                        <img src="{{ asset('images/' . $car->image_path) }}" class="w-10">
                    </div>
                    <div>
                        <span class=" pl-4 uppercase text-megacar-primary font-bold text-xs">
                            Creata: {{ $car->founded }}
                        </span>
                        <h2 class="text-gray-700 text-5xl pl-4 pt-4 uppercase hover:text-gray-500">
                            <a href="/cars/{{ $car->id }}">
                                {{ $car->name }}
                            </a>
                        </h2>
                        <p class="text-lg text-gray-700 py-6 pr-10 pl-4 break-words m-1 leading-snug">
                            {{ $car->description }}
                        </p>
                    </div>
                </div>
                @if (Auth::user()->admin == 1)
                <div class="flex flex-col flex-none justify-between">
                    <div class="pt-4 h-1/2 flex items-center justify-center ">
                        <a href="cars/{{ $car->id }}/edit">
                            <button class="border p-2 font-semibold text-green-500 rounded-md">Modifica &rarr;</button>
                        </a>
                        
                    </div>
                    <div class=" h-1/2 flex items-center justify-center">
                        <form action="/cars/{{ $car->id }}" method="POST" class="pt-3">
                            @csrf
                            @method('delete')
                            <button type="submit" class="border p-2 font-semibold text-red-500 rounded-md">Cancella &rarr;</button>
                        </form>
                    </div>
                </div>
            @endif
            </div>
            <hr class="mt-4 mb-8 text-megacar-primary">
            @endforeach
        </div>
        {{ $cars->links() }}
    </div>
@endsection