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
    <div class=" uppercase text-center bg-gray-500 text-gray-300">Nemokamas pristatymas Lietuvoje uz 50 &euro;</div>
    <header>
        <nav style="background: #f9f9fb">
            <div class="max-w-7xl mx-auto ">
                <div class="flex justify-between flex-wrap">
                    <!--logo + menu -->
                    <div class="flex space-x-2">
                        <div class="flex-shrink-0">
                            <img class='h-28 w-full' src="{{ asset('img/techlogo.JPG') }}" alt="logo">
                        </div>
                        <div class="lg:hidden flex items-center space-x-4">
                            <x-jet-nav-link class='' href="/">PRADŽIA</x-jet-nav-link>
                            <x-jet-nav-link href="/parduotuve">PARDUOTUVĖ</x-jet-nav-link>
                            <x-jet-nav-link href="#">PASLAUGOS</x-jet-nav-link>
                            <x-jet-nav-link class="whitespace-nowrap" href="#">APIE MUS</x-jet-nav-link>
                            <x-jet-nav-link href="#">KONTAKTAI</x-jet-nav-link>
                            <x-jet-nav-link href="#">BLOGAS</x-jet-nav-link>
                        </div>
                    </div>

                    <!-- cart + hamburger -->
                    <div class="flex items-center space-x-1">
                        @livewire('header-cart-component')
                        <div class="hidden items-center lg:flex pr-10">
                            <button class="mobile-menu-button">
                                <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16" />
                                </svg>
                            </button>
                        </div>
                    </div>

                </div>
            </div>

            <!-- mobile menu -->
            <div class="mobile-menu hidden md:hidden">
                <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-200">Features</a>
                <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-200">Pricing</a>
            </div>
            <div class="max-w-7xl flex justify-end  mx-auto py-4 md:justify-center md:px-4 ">
                {{-- <div class="w-full border-red-300"></div> --}}
                @livewire('header-search-component')
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
