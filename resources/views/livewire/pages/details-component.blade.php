<div>

    {{-- <div class="breadcrumb flex items-center justify-center uppercase">
            <x-jet-nav-link href="/">pradžia</x-jet-nav-link>
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-gray-400" width="28" height="28"
                viewBox="0 0 48 48">
                <path d="M17.17 32.92l9.17-9.17-9.17-9.17L20 11.75l12 12-12 12z" />
            </svg>
            <x-jet-nav-link href="{{ route('shop') }}">parduotuve</x-jet-nav-link>
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-gray-400" width="28" height="28"
            viewBox="0 0 48 48">
            <path d="M17.17 32.92l9.17-9.17-9.17-9.17L20 11.75l12 12-12 12z" />
        </svg>
        <x-jet-nav-link>{{$product->name}}</x-jet-nav-link>
        </div> --}}

    <div class="container flex flex-wrap mt-8">
        {{-- Product details --}}
        <div class="image  w-2/4 sm:w-full">
            <img src="{{ asset('img/laptop.jpeg') }}" class="" alt="laptop">
        </div>
        <div class="w-2/4 pl-6 sm:w-full sm:mt-12 sm:px-8">
            <div class="uppercase text-5xl">{{ $product->name }}</div>
            <div class="uppercase text-xl">{{ $product->details }}</div>
            <div class="text-lg mt-8">{{ $product->price }} &euro;</div>
            <div class="text-lg mt-4 flex items-center"><svg xmlns="http://www.w3.org/2000/svg"
                    class="fill-current text-gray-400" width="12" height="12" viewBox="0 0 512 512">
                    <title>ionicons-v5-e</title>
                    <path
                        d="M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z" />
                </svg><svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-gray-400" width="12" height="12"
                    viewBox="0 0 512 512">
                    <title>ionicons-v5-e</title>
                    <path
                        d="M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z" />
                </svg><svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-gray-400" width="12" height="12"
                    viewBox="0 0 512 512">
                    <title>ionicons-v5-e</title>
                    <path
                        d="M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z" />
                </svg><svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-gray-400" width="12" height="12"
                    viewBox="0 0 512 512">
                    <title>ionicons-v5-e</title>
                    <path
                        d="M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z" />
                </svg><svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-gray-400" width="12" height="12"
                    viewBox="0 0 512 512">
                    <title>ionicons-v5-e</title>
                    <path
                        d="M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z" />
                </svg>
                <div class="text-sm ml-3">( 3 atsiliepimai )</div>
            </div>
            <div class="mt-8">{{ $product->description }}</div>
            <div class="text-sm mt-5">Produkto kodas: 4986616197</div>
            <div class="text-sm ">Kategorija: <a
                    href="{{ route('shop') }}">{{ $product->category['name'] }}</a>
            </div>
            <div class="my-5 text-lg">Liko {{ $product->quantity }}</div>
            <div >
                <div class="flex text-base font-semibold border border-gray-300 ">
                    <div class="text-gray-400 flex items-center justify-center mx-2">KIEKIS</div>
                    <button class="px-4 p-4" wire:click="increment">+</button>
                    <h1 class="flex items-center justify-center">{{ $count }}</h1>
                    {{-- <input name='qty' type="hidden" value="{{ $count }}"> --}}
                    <button class="px-4 p-4" wire:click="decrement">-</button>
                </div>
                <form class="flex" action="" wire:submit.prevent="addToCart({{ $product->id }})">
              
                    
                    {{-- @csrf --}}
                {{-- @livewire('counter') --}}
                {{-- <x-jet-button wire:click='store({{$product->id}},{{$product->name}},{{$product->price}})' class="uppercase ml-8">į krepšelį</x-jet-button> --}}
                 {{-- <a href="#" wire:click="store({{ $product->id }},'{{ $product->name }}',{{ $product->price }})">add</a> --}}
<button type="submit">add</button>
                </form>  
             {{-- {{$cart}} --}}
            </div>
        </div>
      
        {{-- Related products --}}
        <div class="w-full mt-20">
            <section class="container my-16">
                <h1 class="text-3xl font-semibold text-gray-700 sm:pl-8">SUSIJUSIOS <br> PREKĖS</h1>
                <div class="border-t-2 my-8 border-gray-700 w-12"></div>
                @livewire('product-component',['products'=>$related_products])
            </section>
        </div>
    </div>

</div>
