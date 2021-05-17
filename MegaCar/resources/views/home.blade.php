@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full px-6">

        <section class="flex flex-col break-words bg-white border-1 rounded-md shadow-lg">

            <header class="font-semibold bg-megacar-primary text-white py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                Dashboard
            </header>

            <div class="w-full p-6 flex flex-col justify-between h-full text-center">
                <div class="text-gray-700 italic font-semibold p-4">
                    <p>
                        Benvenuto <span>{{ Auth::user()->name }}</span>
                    </p>
                </div>
                <div class="p-6">
                    <a href="{{ url('/cars') }}" class="p-2 text-base leading-6 text-white whitespace-no-wrap rounded-md bg-megacar-primary hover:bg-pink-800 shadow"> Visualizza il catalogo</a>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection
