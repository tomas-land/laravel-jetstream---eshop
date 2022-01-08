<div>
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
    <div class="container flex ">
        {{-- Sidebar --}}
        <div class="w-1/4 ">
            <h2 class="uppercase text-md font-semibold py-5">prekių kategorijos</h2>
            <ul class="flex-col  text-gray-400">
                @foreach ($categories as $category)
                    <li class="">
                   <a href="{{route('product.category',$category->slug)}}">{{ $category->name }}</a>
                   </li>
                @endforeach
            </ul>
        </div>
        {{-- Products --}}
        <div class="w-3/4  px-4 ">
            <div class="flex justify-end mb-4">
                <div class=" ">
                    <select class="mr-4 py-4 pr-8 border-gray-300 text-gray-400 hover:text-gray-800" wire:model='pagesize'>
                        <option selected value="9">Rodyti po 9</option>
                        <option value="18">Rodyti po 18</option>
                        <option value="36">Rodyti po 36</option>
                    </select>
                    <select class=" pr-7 py-4 border-gray-300 text-gray-400 hover:text-gray-800" wire:model='sorting'>
                        <option selected value="latest">Rikiuoti nuo naujausių</option>
                        <option value="min-max">Rikiuoti pagal kainą (min->max)</option>
                        <option value="max-min">Rikiuoti pagal kainą (max->min)</option>
                    </select>
                </div>
            </div>
            <div class="grid grid-cols-3 gap-3 h-auto">
                @foreach ($products as $product)
                    <div class="">
                        <a href="{{ route('product.details', $product->slug) }}">
                            <img src="{{ asset($product->image) }}" class="" alt="product image">
                            <h3 class="text-center uppercase">{{ $product->name }}</h3>
                            <h5 class="text-center uppercase">&euro;{{ $product->price }}</h5>
                        </a>
                    </div>

                @endforeach


            </div>
            <div class="my-8">
                {{ $products->links() }}
            </div>
        </div>

    </div>

</div>
