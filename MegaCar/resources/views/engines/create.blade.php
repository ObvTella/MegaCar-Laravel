@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/8 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Aggiungi motore
            </h1>
        </div>
    </div>

    <div class="flex justify-center pt-20">
        <form action="/engines" method="POST">
            @csrf
            <div class="block">
                <select name="model_id" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400 border border-megacar-primary rounded-md required">
                    @foreach ($carModels as $model)
                        <option value="{{ $model->id }}"> {{ $model->model_name }}  {{ $model->prod_year }}</option>
                    @endforeach
                </select>
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