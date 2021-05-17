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
            <div>
                <p class=" text-gray-700 py-6 uppercase font-bold">
                    sede:
                </p>
            </div>
        </div>
        <div class="py-10 text-center flex flex-col">
            <div class="m-auto">
                <div class=" flex items-center justify-center">
                    <span class="pl-4 uppercase text-megacar-primary font-bold text-xs">
                        Creata: {{ $car->founded }}
                    </span>
                </div>
                <div>
                    <p class="text-lg text-gray-700 py-6 pr-10 pl-4 break-words m-1 leading-snug">
                        {{ $car->description }}
                    </p>
                </div>
                <table class="table-auto">
                    <tr class="bg-megacar_primary">
                        <th class="w-1/4 border-4 border-gray-500">
                            Modello
                        </th>
                        <th class="w-1/4 border-4 border-gray-500">
                            Motori
                        </th>
                        <th class="w-1/4 border-4 border-gray-500">
                            Anno Produzione
                        </th>
                    </tr>

                    @forelse ( $car->carModels as $model )
                        <tr>
                            <td class="border-4 border-gray-500">
                                {{ $model->model_name }}
                            </td>
                            <td class="border-4 border-gray-500">
                                @foreach ( $car->engines as $engine )
                                    @if ($model->id == $engine->model_id)
                                        {{ $engine->engine_name }}
                                    @endif
                                @endforeach
                            </td>
                            <td class="border-4 border-gray-500">
                                @foreach ( $car->productionDate as $data )
                                @if ($model->id == $data->model_id)
                                    {{ date('d-m-Y', strtotime($data->created_at)) }}
                                @endif
                                @endforeach
                            </td>
                        </tr>
                    @empty
                        Nessun modello trovato
                    @endforelse
                </table>

                <p class="text-left">
                    Prodotti:
                    @forelse ( $car->products as $product )
                        {{ $product->name }}
                    @empty
                        <p>
                            Nessun prodotto
                        </p>
                    @endforelse
                </p>

                <hr class="mt-4 mb-8">
            </div>
        </div>
    </div>

@endsection