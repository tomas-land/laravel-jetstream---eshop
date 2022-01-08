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

<body class="bg-white min-h-screen flex flex-col ">
    {{-- Login --}}
    <div class="flex justify-end bg-gray-100 dark:bg-gray-900 ">
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
    <div class=" uppercase text-center">Nemokamas pristatymas Lietuvoje uz 50 &euro;</div>
    <header class="flex " style="background: #f9f9fb">
        <div class="logo ">
            <img class='w-52' src="{{asset('img/techlogo.JPG')}}" alt="logo">
        </div>
        <nav class="ml-5 flex justify-between w-full text-sm">
            <ul class="flex lg:hidden items-center gap-8">
                <x-jet-nav-link class='' href="/">PRADŽIA</x-jet-nav-link>
                <x-jet-nav-link href="/parduotuve">PARDUOTUVĖ</x-jet-nav-link>
                <x-jet-nav-link href="/posts">PASLUGOS</x-jet-nav-link>
                <x-jet-nav-link class="whitespace-nowrap" href="/posts">APIE MUS</x-jet-nav-link>
                <x-jet-nav-link href="/posts">KONTAKTAI</x-jet-nav-link>
                <x-jet-nav-link href="/posts">BLOGAS</x-jet-nav-link>
            </ul>
            <div class="w-full flex justify-end items-center pr-5 ">
               @livewire('header-search-component')
                <div class="cart flex mr-8 ">
                    <x-jet-nav-link href="{{route('cart')}}"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 512 512">
                        <title>ionicons-v5-d</title>
                        <circle cx="176" cy="416" r="16"
                            style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                        <circle cx="400" cy="416" r="16"
                            style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                        <polyline points="48 80 112 80 160 352 416 352"
                            style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                        <path d="M160,288H409.44a8,8,0,0,0,7.85-6.43l28.8-144a8,8,0,0,0-7.85-9.57H128"
                            style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                    </svg></x-jet-nav-link>
                    <span class="counter flex items-center justify-center ml-2">{{Cart::count()}}</span>
                </div>
                
                {{-- <x-jet-input placeholder="Search for anything..." class="p-1 placeholder-shown:text-gray-100 placeholder-shown:italic">
                        <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512"><title>ionicons-v5-f</title><path d="M456.69,421.39,362.6,327.3a173.81,173.81,0,0,0,34.84-104.58C397.44,126.38,319.06,48,222.72,48S48,126.38,48,222.72s78.38,174.72,174.72,174.72A173.81,173.81,0,0,0,327.3,362.6l94.09,94.09a25,25,0,0,0,35.3-35.3ZM97.92,222.72a124.8,124.8,0,1,1,124.8,124.8A124.95,124.95,0,0,1,97.92,222.72Z"/></svg>
                        Search..</x-jet-input> --}}
            </div>
        </nav>
    </header>
        <!-- Page Heading -->
        @if (isset($header))
        <header class="bg-gray-200 shadow">
            <div class="container mx-auto py-8 sm:px-6 lg:px-8 flex items-center justify-between">
                {{ $header }}
            </div>
        </header>
    @endif
    <main class=" font-sans text-gray-900 antialiased bg-white flex-grow h-auto">
        {{ $slot }}
    </main>
    {{-- Footer --}}
    <footer class="w-full h-60 flex items-center justify-center bg-gray-700 text-white text-2xl  ">
        footer
    </footer>
    @stack('modals')
    @livewireScripts
</body>

</html>
