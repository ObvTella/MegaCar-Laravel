@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/5 py-24">
        <div class=" flex flex-col text-center">
            <div class="flex items-center justify-center flex-none">
                <img src="{{ asset('images/' . $car->image_path) }}" class="w-15 mb-10">
            </div>
            <div class="flex items-center justify-center flex-none">
                <h1 class="text-5xl tracking-tight bold uppercase">
                    {{ $car->name }}
                </h1>
            </div>
        </div>
        <div class="py-10 text-center flex flex-col">
            <div class="m-auto">
                <div class=" flex items-center justify-center">
                    <p class="uppercase text-megacar-primary font-bold text-xs">Creata: {{ $car->founded }}</p>
                </div>
                <div>
                    <p class="text-lg text-gray-700 p-6 break-words m-1 leading-snug">
                        {{ $car->description }}
                    </p>
                </div>
                <div class=" m-auto  flex flex-col text-center items-center justify-center">
                    <table class="table-auto shadow">
                        <tr class="bg-megacar_primary">
                            <th class="w-auto px-2 border-2 border-gray-600">Modello</th>
                            <th class="w-auto px-2 border-2 border-gray-600">Motori</th>
                            <th class="w-auto px-2 border-2 border-gray-600">Anno Produzione</th>
                            <th class="w-auto px-2 border-2 border-gray-600">Prezzo Iniziale</th>
                            <th class="w-auto px-2 border-2 border-gray-600">Condizioni</th>
                            <th class="w-auto px-2 border-gray-600 border-t-2 border-b-2 border-l-2"></th>
                            <th class="w-auto px-2 border-gray-600 border-t-2 border-b-2 border-r-2"></th>
                        </tr>

                        @forelse ( $car->carModels as $model )
                            <tr>
                                <td class="p-5">{{ $model->model_name }}</td>
                                <td class="py-6 px-5 flex text-center items-center justify-center">
                                    @forelse ( $car->engines as $engine )
                                        @if ($model->id == $engine->model_id)
                                            {{ $engine->engine_name }}
                                            @if (Auth::user() && Auth::user()->admin == '1')
                                                    <a href="/engines/{{ $engine->id }}/edit" class="px-2">
                                                        <button class="border p-1 font-semibold text-green-500 rounded-full text-xs">E </button>
                                                    </a>
                                                    <form action="/engines/{{ $engine->id }}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="border p-1 font-semibold text-red-500 rounded-full text-xs">D</button>
                                                    </form>
                                            @endif
                                        @endif
                                    @empty
                                        Nessun motore trovato
                                    @endforelse
                                </td>
                                <td class="p-5">{{ $model->prod_year }}</td>
                                <td class="p-5">{{ $model->price }} $</td>
                                @if ($model->used == 1)
                                    <td class="p-5">Usata</td>
                                @else
                                    <td class="p-5">Nuova</td>
                                @endif
                                <td class="p-5">
                                    <a href="/sales/{{ $model->id }}/create">
                                        <button class="border p-2 font-semibold text-megacar_primary rounded-full text-xs">COMPRA &rarr;</button>
                                    </a>  
                                </td>
                                <td class="p-5">
                                    <a href="/prenotations/{{ $model->id }}/create">
                                        <button class="border p-2 font-semibold text-megacar_primary rounded-full text-xs">CONSULENZA &rarr;</button>
                                    </a>  
                                </td>
                                @if (Auth::user() && Auth::user()->admin == '1')
                                        <td class="p-1">
                                            <a href="/carmodels/{{ $model->id }}/edit">
                                                <button class="border p-2 font-semibold text-green-500 rounded-md text-xs">Modifica &rarr;</button>
                                            </a>
                                        </td>
                                        <td class="p-1">
                                            <form action="/carmodels/{{ $model->id }}" method="POST" >
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="border p-2 font-semibold text-red-500 rounded-md text-xs">Cancella &rarr;</button>
                                            </form>
                                        </td>
                                @endif
                            </tr>
                        @empty
                            <td class="text-red-600 p-5">Nessun modello trovato</td>
                            <td class="text-red-600 p-5">Nessun motore trovato</td>
                            <td class="text-red-600 p-5">Nessun anno di produzione trovato</td>
                            <td class="text-red-600 p-5">Nessun prezzo iniziale trovato</td>
                        @endforelse
                    </table>
                </div>
                <div class="py-5 flex flex-col text-center items-center justify-center">
                    @if (Auth::user() && Auth::user()->admin == '1')
                        <div class="pt-4 h-1/2 flex items-center justify-center ">
                            <a href="{{ url('/carmodels/create') }}" class="p-2">
                                <button class="border p-2 font-semibold text-green-500 rounded-md">Aggiungi modello &rarr;</button>
                            </a>                         
                            <a href="{{ url('/engines/create') }}" class="p-2">
                                <button class="border p-2 font-semibold text-green-500 rounded-md">Aggiungi motore &rarr;</button>
                            </a>
                        </div>
                    @endif
                </div>
                <hr class="mt-4 mb-8 text-megacar_primary">
            </div>
        </div>
    </div>

@endsection