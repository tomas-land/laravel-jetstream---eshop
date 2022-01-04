<div>
    <x-slot name="header">
        <h2 class="font-semibold text-lg text-gray-800 leading-tight uppercase">
            {{ __('Krepšelis') }}
        </h2>
    </x-slot>

    @if (Session::has('success_message'))
        <div
            class="alert alert-success container my-5 border-green-200 border-solid border-2 py-5 text-center text-xl bg-green-100 text-green-700">
            {{ session('success_message') }}
        </div>

    @endif
    @if (Cart::count() == 0)
        <div class="container my-5 border-gray-200 border-solid border-2 py-10 text-center text-2xl">Krepšelis tuščias
        </div>
    @else
        <div class="container flex flex-col mt-8">
            <div class="-my-2 overflow-x-auto -mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full px-6 lg:px-8">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="">
                            <tr>
                                <th scope="col"
                                    class="w-14 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                </th>
                                <th scope="col"
                                    class="w-32 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                </th>
                                <th scope="col"
                                    class="w-1/3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Produktas
                                </th>
                                <th scope="col"
                                    class=" py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Kaina
                                </th>
                                <th scope="col"
                                    class="w-1/3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Kiekis
                                </th>
                                <th scope="col"
                                    class="w py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Suma
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach (Cart::content() as $product)


                                <tr>
                                    <td class="text-2xl text-gray-400 py-6 pr-6"><a href="#"
                                            wire:click="removeProduct('{{ $product->rowId }}','{{ $product->name }}')">×</a>
                                    </td>
                                    <td><img class="w-24 py-6" src="{{ asset('img/laptop.jpeg') }}" alt="">
                                    </td>
                                    <td><a
                                            href="{{ route('product.details', $product->model->slug) }}">{{ $product->name }}</a>
                                    </td>
                                    <td>{{ $product->price }} &euro;</td>
                                    <td>

                                        <div class="max-w-min flex text-base font-semibold border border-gray-300">
                                            <div class="text-gray-400 flex items-center justify-center mx-2">
                                                KIEKIS</div>
                                            <button class="px-4 p-4"
                                                wire:click="increaseQuantity('{{ $product->rowId }}')">+</button>
                                            <h1 class="flex items-center justify-center">{{ $product->qty }}
                                            </h1>
                                            {{-- <input name='qty' type="hidden" value="{{ $count }}"> --}}
                                            <button class="px-4 p-4"
                                                wire:click="decreaseQuantity('{{ $product->rowId }}')">-</button>
                                        </div>
                                    </td>
                                    <td>{{ $product->price * $product->qty }} &euro;</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="w-full flex justify-end">
                    <div class=" mt-5 flex">
                        <ul class="text-right ">
                            <li>Iš viso už prekes : </li>
                            <li>PVM 21% mokestis : </li>
                            <li>Kompensacinis atlyginimas autoriams : </li>
                            <div class="w-full h-2 border-gray-400 border-solid"></div>
                            <li>Bendra suma :</li>
                        </ul>
                        <ul class="pl-4 text-right">
                            <li>{{ Cart::subtotal() - Cart::tax() }} &euro;</li>
                            <li>{{ Cart::tax() }} &euro;</li>
                            <li>10,50 &euro;</li>
                            <div class="w-full h-2 border-gray-400 border-solid"></div>
                            <li>{{ Cart::initial() }} &euro;</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

@endif
{{-- {{Cart::destroy()}} --}}
<div class="text-center">
   <a href="{{ route('shop') }}">
       <x-jet-button class="uppercase my-20">Grįžti į parduotuvę</x-jet-button>
   </a>
</div>
</div>
