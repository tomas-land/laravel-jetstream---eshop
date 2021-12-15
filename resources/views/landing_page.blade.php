<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @livewireStyles
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="">


    <div class="flex justify-end p-5 bg-gray-100 dark:bg-gray-900 ">
        @if (Route::has('login'))
            <div class="space-x-2.5">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="p-5 text-sm text-gray-700 dark:text-gray-500 underline">Log
                        in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-9 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
    {{-- Header --}}
    <div class="bg-gray-200 uppercase text-center">Nemokamas pristatymas Lietuvoje uz 50 &euro;</div>
    <header class="flex bg-white">
        <div class="logo ">
            <img class='w-52' src="./img/techlogo.JPG" alt="logo">
        </div>
        <nav class="ml-5 w-full flex justify-between text-sm">
            <ul class="flex sm:hidden items-center gap-8">
                <x-jet-nav-link class='' href="/">PRADŽIA</x-jet-nav-link>
                <x-jet-nav-link href="/posts">PARDUOTUVĖ</x-jet-nav-link>
                <x-jet-nav-link href="/posts">PASLUGOS</x-jet-nav-link>
                <x-jet-nav-link href="/posts">APIE MUS</x-jet-nav-link>
                <x-jet-nav-link href="/posts">KONTAKTAI</x-jet-nav-link>
                <x-jet-nav-link href="/posts">BLOGAS</x-jet-nav-link>
            </ul>
            <div class="flex items-center px-5">
                <label class="relative block">
                    <span class="sr-only">Search</span>
                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 512 512">
                            <title>ionicons-v5-f</title>
                            <path
                                d="M456.69,421.39,362.6,327.3a173.81,173.81,0,0,0,34.84-104.58C397.44,126.38,319.06,48,222.72,48S48,126.38,48,222.72s78.38,174.72,174.72,174.72A173.81,173.81,0,0,0,327.3,362.6l94.09,94.09a25,25,0,0,0,35.3-35.3ZM97.92,222.72a124.8,124.8,0,1,1,124.8,124.8A124.95,124.95,0,0,1,97.92,222.72Z" />
                        </svg>
                    </span>
                    <input
                        class="placeholder:italic placeholder:text-gray-400 block w-full border border-gray-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm"
                        placeholder="Search for anything..." type="text" name="search" />
                </label>
                {{-- <x-jet-input placeholder="Search for anything..." class="p-1 placeholder-shown:text-gray-100 placeholder-shown:italic">
                    <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512"><title>ionicons-v5-f</title><path d="M456.69,421.39,362.6,327.3a173.81,173.81,0,0,0,34.84-104.58C397.44,126.38,319.06,48,222.72,48S48,126.38,48,222.72s78.38,174.72,174.72,174.72A173.81,173.81,0,0,0,327.3,362.6l94.09,94.09a25,25,0,0,0,35.3-35.3ZM97.92,222.72a124.8,124.8,0,1,1,124.8,124.8A124.95,124.95,0,0,1,97.92,222.72Z"/></svg>
                    Search..</x-jet-input> --}}
            </div>
        </nav>
    </header>
    {{-- Carousel --}}
    <section class="container flex justify-center items-center text-3xl  bg-red-200 h-96">carousel</section>
    {{-- Popular products --}}
    <section class="container my-16">
        <h1 class="text-3xl font-semibold text-gray-700 sm:pl-8">POPULIARIAUSIOS <br> PREKĖS</h1>
        <div class="border-t-2 my-8 border-gray-700 w-12"></div>

        @livewire('product-component')

    </section>
    <x-jet-section-border></x-jet-section-border>
    {{-- Rules and information --}}
    <div class="container grid grid-cols-4 gap-12">
        <div class="flex my-10">
            <div class="w-1/4"><svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24"><path class="hover:text-gray-200" d="M20 8h-3V4H3c-1.1 0-2 .9-2 2v11h2c0 1.66 1.34 3 3 3s3-1.34 3-3h6c0 1.66 1.34 3 3 3s3-1.34 3-3h2v-5l-3-4zM6 18.5c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zm13.5-9l1.96 2.5H17V9.5h2.5zm-1.5 9c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5z"/></svg></div>
            <div class="w-3/4">
                <h4 class="font-semibold transition-to-gray">GREITAS PRISTATYMAS VISAME PASAULYJE</h4>
                <h5 class="text-sm mt-5 text-gray-400 ">Per 1-3 darbo dienas visoje Lietuvoje!</h5>
            </div>

        </div>
        <div class="flex my-10">
            <div class="w-1/4"><svg xmlns="http://www.w3.org/2000/svg" width="44" height="44"  viewBox="0 0 24 24"><path d="M14 12c0-1.1-.9-2-2-2s-2 .9-2 2 .9 2 2 2 2-.9 2-2zm-2-9c-4.97 0-9 4.03-9 9H0l4 4 4-4H5c0-3.87 3.13-7 7-7s7 3.13 7 7-3.13 7-7 7c-1.51 0-2.91-.49-4.06-1.3l-1.42 1.44C8.04 20.3 9.94 21 12 21c4.97 0 9-4.03 9-9s-4.03-9-9-9z"/></svg></div>
            <div class="w-3/4">
                <h4 class="font-semibold transition-to-gray">NEMOKAMAS GRĄŽINIMAS</h4>
                <h5 class="text-sm mt-5 text-gray-400">14 dienų nemokamo grąžinimo garantija!</h5>
            </div>

        </div>
        <div class="flex my-10">
            <div class="w-1/4"><svg xmlns="http://www.w3.org/2000/svg" width="44" height="44"" viewBox="0 0 512 512"><title>ionicons-v5-p</title><path d="M435.25,48H312.35a14.46,14.46,0,0,0-10.2,4.2L56.45,297.9a28.85,28.85,0,0,0,0,40.7l117,117a28.85,28.85,0,0,0,40.7,0L459.75,210a14.46,14.46,0,0,0,4.2-10.2V76.8A28.66,28.66,0,0,0,435.25,48Z" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><path d="M384,160a32,32,0,1,1,32-32A32,32,0,0,1,384,160Z"/></svg></div>
            <div class="w-3/4">
                <h4 class="font-semibold transition-to-gray">SAUGUS ATSISKAITYMAS</h4>
                <h5 class="text-sm mt-5 text-gray-400">Naudojame saugių atsiskaitymų sprendimą!</h5>
            </div>

        </div>
        <div class="flex my-10">
            <div class="w-1/4"><svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24"><path d="M14.36,14.23a3.76,3.76,0,0,1-4.72,0,1,1,0,0,0-1.28,1.54,5.68,5.68,0,0,0,7.28,0,1,1,0,1,0-1.28-1.54ZM9,11a1,1,0,1,0-1-1A1,1,0,0,0,9,11Zm6-2a1,1,0,1,0,1,1A1,1,0,0,0,15,9ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"/></svg></div>
            <div class="w-3/4">
                <h4 class="font-semibold transition-to-gray">PAGALBA IR KONSULTACIJOS</h4>
                <h5 class="text-sm mt-5 text-gray-400">Telefonu I Internetu I El. paštu</h5>
            </div>

        </div>
    </div>

    <x-jet-section-border></x-jet-section-border>
    @livewireScripts

</body>

</html>
