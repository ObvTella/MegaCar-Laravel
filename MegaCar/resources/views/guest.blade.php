<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MegaCar</title>

  <!-- Font Awesome per immagini-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
  <!-- CSS compilato-->
  <link href="css/app.css" rel="stylesheet">

</head>
<body class="bg-white">
    <!-- SEZIONE:Titolo / Login -->
    <section class="relative w-full px-8 text-gray-700 font-semibold tracking-tight lg:text-xl">
        <!-- SPAZIO TITOLO LOGIN flex container -->
        <div class="container flex flex-col flex-wrap items-center justify-between py-5 mx-auto md:flex-row max-w-7xl">
            <!-- TITOLO -->
            <span class="relative z-10 flex items-center w-auto leading-none text-gray-900 text-3xl tracking-tight italic">MegaCar</span>
            <!-- SPAZIO TASTI -->
            <div class="relative z-10 inline-flex items-center space-x-3 md:ml-5 lg:justify-end">
                @auth
                    <!-- SE LOGGATO MOSTRA HOME -->
                    <span class="inline-flex rounded-md shadow-sm">
                        <a href="{{ url('/home') }}" class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap bg-megacar-primary rounded-md shadow-sm hover:bg-pink-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-600">Home</a>
                    </span>
                @else
                    <!-- ALTRIMENTI LOGIN / REGISTRATI -->
                    <a href="{{ route('login') }}" class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-gray-600 whitespace-no-wrap bg-white border border-gray-200 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:shadow-none">Login</a>
                    <span class="inline-flex rounded-md shadow-sm">
                        <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap bg-megacar-primary rounded-md shadow-sm hover:bg-pink-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-600">Registrati</a>
                    </span>
                @endauth
            </div>
        </div>
    </section>

    <!-- SEZIONE: Motto -->
    <section class="px-2 py-32 md:px-0">
        <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
            <div class="flex flex-wrap items-center sm:-mx-3">
                <!-- DIV Testo -->
                <div class="w-full md:w-1/2 md:px-3">
                    <div class="w-full pb-6 space-y-6 sm:max-w-md lg:max-w-lg md:space-y-4 lg:space-y-8 xl:space-y-9 sm:pr-5 lg:pr-0 md:pb-0">
                        <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl">
                            <span class="block xl:inline">L'auto dei tuoi sogni</span>
                            <span class="block text-megacar-primary xl:inline">al prezzo dei tuoi sogni</span>
                        </h1>
                        <!-- Paragrafo piccolo -->
                        <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">Prenota subito il tuo appuntamento con uno dei nostri specialisti qualificati.</p>
                        <div class="relative flex flex-col sm:flex-row sm:space-x-4">
                            <a href="{{ url('/cars') }}" class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-megacar-primary rounded-md sm:mb-0 hover:bg-pink-800 sm:w-auto">
                            Prenota subito!
                            <i class="far fa-arrow-alt-circle-right pl-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- FOTO -->
                <div class="w-full md:w-1/2 shadow-xl">
                    <div class="w-full h-auto overflow-hidden rounded-md shadow-xl sm:rounded-xl">
                        <img src="/sys/images/megacar.jpg">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- COSA OFFRIAMO -->
    <section class="py-20">
        <div class="container max-w-6xl mx-auto">
            <h2 class="text-4xl font-bold tracking-tight text-center">Features</h2>
            <p class="mt-2 text-lg text-center text-gray-600">Ecco perche' dovresti sceglierci</p>
            <div class="grid grid-cols-4 gap-8 mt-10 sm:grid-cols-8 lg:grid-cols-12 sm:px-8 xl:px-0">

                <div class="relative flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 overflow-hidden bg-gray-100 sm:rounded-xl">
                    <div class="p-3 text-white bg-megacar-primary rounded-full">
                        <i class="fas fa-cogs py-1 px-2"></i>
                    </div>
                    <h4 class="text-xl font-medium text-gray-700">Certificazioni</h4>
                    <p class="text-base text-center text-gray-500">Tutte le nostre auto sono certificate da meccanici specializzati.</p>
                </div>

                <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl">
                    <div class="p-3 text-white bg-megacar-primary rounded-full">
                        <i class="fas fa-search-dollar py-1 px-2"></i>
                    </div>
                    <h4 class="text-xl font-medium text-gray-700">Offerte</h4>
                    <p class="text-base text-center text-gray-500">Solo le migliori offerte sulle migliori auto.</p>
                </div>

                <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl">
                    <div class="p-3 text-white bg-megacar-primary rounded-full">
                        <i class="fas fa-fax py-1 px-2"></i>
                    </div>
                    <h4 class="text-xl font-medium text-gray-700">Prenotazioni</h4>
                    <p class="text-base text-center text-gray-500">Consultenze su prenotazione dai nostri esperti del settore.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- ICONE MACCHINE -->
    <section class="pt-7 pb-14">
        <div class="flex items-center justify-center p-4 centered">
            <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">Desideri comprare una nuova auto?</p>
        </div>
        <div class="flex items-center justify-center pt-6 pb-12 centered">
            <a href="{{ url('/cars') }}" class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-megacar-primary rounded-md sm:mb-0 hover:bg-pink-800 sm:w-auto">
            Sfoglia il catalogo!
            <i class="far fa-arrow-alt-circle-right pl-2"></i>
            </a>
        </div>
        <div class="container px-8 mx-auto sm:px-12 lg:px-20">
            <h1 class="text-sm font-bold tracking-wide text-center text-gray-800 uppercase mb-7">Le migliori auto</h1>
            <div class="grid items-center justify-center grid-cols-12 gap-y-8">
                <div class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-3 xl:col-span-2">
                    <img src="/sys/images/toyota.png" alt="Toyota" class="block object-contain h-12">
                </div>
                <div class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-3 xl:col-span-2">
                    <img src="/sys/images/nissan.png" alt="Nissan" class="block object-contain h-9">
                </div>
                <div class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-3 xl:col-span-2">
                    <img src="/sys/images/mazda.png" alt="Mazda" class="block object-contain h-9">
                </div>
                <div class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-3 xl:col-span-2">
                    <img src="/sys/images/subaru.png" alt="Subaru" class="block object-contain h-7 lg:h-8">
                </div>
                <div class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-6 xl:col-span-2">
                    <img src="/sys/images/fiat.png" alt="Fiat" class="block object-contain h-9">
                </div>
                <div class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-6 xl:col-span-2">
                    <img src="/sys/images/honda.png" alt="Honda" class="block object-contain h-9">
                </div>
            </div>
        </div>
    </section>

    <!-- CREDITI -->
    <section class="text-gray-700">
        <div class="container flex flex-col items-center px-8 py-8 mx-auto max-w-7xl sm:flex-row">
            <span class="text-xl leading-none text-gray-900 select-none font-semibold tracking-tight italic">MegaCar</span>
            <p class="mt-4 text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l sm:border-gray-200 sm:mt-0">Esame di stato 2021</p>
            <p class="mt-4 text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l sm:border-gray-200 sm:mt-0">
                <a href="https://github.com/ObvTella/MegaCar-Laravel" class="text-gray-400 hover:text-gray-500">
                    <i class="fab fa-github"></i>
                </a>
            </p>
        </div>

    </section>
</body>

</html>
