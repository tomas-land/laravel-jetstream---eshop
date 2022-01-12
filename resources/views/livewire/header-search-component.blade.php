
    <div class="relative block ">
        <form action="{{ route('product.search') }}" method="GET">
            <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                <button type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 512 512">
                        <title>ionicons-v5-f</title>
                        <path
                            d="M456.69,421.39,362.6,327.3a173.81,173.81,0,0,0,34.84-104.58C397.44,126.38,319.06,48,222.72,48S48,126.38,48,222.72s78.38,174.72,174.72,174.72A173.81,173.81,0,0,0,327.3,362.6l94.09,94.09a25,25,0,0,0,35.3-35.3ZM97.92,222.72a124.8,124.8,0,1,1,124.8,124.8A124.95,124.95,0,0,1,97.92,222.72Z" />
                    </svg>
                </button>
            </span>
            <input name="searchQuery" wire:model='query' wire:keydown.escape="resetSearch"
            style="border: #f9f9fb solid 2px"
                class="sm:w-screen focus:border-gray-300 focus:ring-0 outline-transparent  placeholder:italic placeholder:text-gray-400 block w-full border border-gray-300 rounded-md py-2 pl-9 pr-56 shadow-sm  "
                placeholder="Search for anything..." type="text"  autocomplete="off" />
        </form>
        @if (!empty($query))
            <div class="fixed top-0 right-0 bottom-0 left-0" wire:click='resetSearch'></div> <!-- div for closing search by clicking anywhere away from search-->
            <div class=" absolute z-5 flex flex-col bg-white divide-y border border-gray-200 w-full">
                @if (!empty($products))
                    @foreach ($products as $product)
                        <a class="px-3 py-4 flex hover:bg-gray-100" href="{{ route('product.details', $product['slug']) }}">
                            <div class="w-14"><img src="{{ asset($product['image']) }}" alt=""></div>
                            <div class="flex flex-col pl-3 pr-12">
                                <div class="text-lg font-bold">{{ $product['name'] }}</div>
                                <div>{{ $product['details'] }}</div>
                            </div>
                            <div class="flex-grow flex justify-center items-center text-lg">{{ $product['price'] }}
                            </div>
                        </a>
                    @endforeach
                @else
                    <div class="py-6 flex  bg-white w-full divide-y border border-gray-200 justify-center items-center">
                        Nieko nerasta</a>
                @endif
            </div>
        @endif
    
        </div>

