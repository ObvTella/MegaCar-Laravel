@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold text-gray-900 italic">
                Lista prenotazioni: 
            </h1>
            <p class="p-6 text-4xl text-center text-megacar-primary font-semibold"> {{ $user->name }} </p>
        </div>
        <div class="w-5/6 py-10 m-auto">
            <div class=" m-auto  flex flex-col text-center items-center justify-center">
                <table class="table-auto shadow">
                    <tr class="bg-megacar_primary">
                        <th class="w-auto border-2 border-gray-600">ID Prenotazione</th>
                        <th class="w-auto border-2 border-gray-600">Data</th>
                        <th class="w-auto border-2 border-gray-600">Brand</th>
                        <th class="w-auto border-2 border-gray-600">Modello</th>
                        <th class="w-auto border-2 border-gray-600">Anno</th>
                        <th class="w-auto border-2 border-gray-600">Motore</th>
                    </tr>

                    @forelse ( $prenotations as $prenotation )
                        <tr>
                            <td class="p-5">{{ $prenotation->id_prenotazione }}</td>
                            <td class="p-5">{{ $prenotation->data }}</td>
                            <td class="p-5">{{ $prenotation->brand }}</td>
                            <td class="p-5">{{ $prenotation->modello }}</td>
                            <td class="p-5">{{ $prenotation->anno_prod }}</td>
                            <td class="p-5">{{ $prenotation->motore }}</td>
                        </tr>
                    @empty
                        <td class="text-red-600 p-5">Nessun id trovato</td>
                        <td class="text-red-600 p-5">Nessuna data trovata</td>
                        <td class="text-red-600 p-5">Nessun brand trovato</td>
                        <td class="text-red-600 p-5">Nessun modello trovato</td>
                        <td class="text-red-600 p-5">Nessun anno di produzione trovato</td>
                        <td class="text-red-600 p-5">Nessun motore trovato</td>
                    @endforelse
                </table>
        </div>
    </div>
@endsection