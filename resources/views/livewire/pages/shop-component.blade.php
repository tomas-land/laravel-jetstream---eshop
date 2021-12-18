<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lg text-gray-800 leading-tight uppercase">
            {{ __('Parduotuvė') }}
        </h2>
        <div class="breadcrumb flex items-center justify-center uppercase">
            <x-jet-nav-link href="/">pradžia</x-jet-nav-link>
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-gray-400" width="28" height="28"
                viewBox="0 0 48 48">
                <path d="M17.17 32.92l9.17-9.17-9.17-9.17L20 11.75l12 12-12 12z" />
            </svg>
            <x-jet-nav-link href="{{ route('shop') }}">parduotuve</x-jet-nav-link>
        </div>
    </x-slot>
    <div class="container flex h-screen">
        {{-- Sidebar --}}
        <div class="w-1/4 ">
            <h2 class="uppercase text-md font-semibold py-5">prekių kategorijos</h2>
            <ul class="flex-col  text-gray-400">
                @foreach ($categories as $category)
                    <li class="">{{ $category->name }}</li>
                @endforeach
            </ul>
        </div>
        {{-- Products --}}
        <div class="w-3/4 bg-gray-100"></div>

    </div>

</x-guest-layout>
