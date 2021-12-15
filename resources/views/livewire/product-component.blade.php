<div class="grid grid-cols-3 gap-12 sm:grid-cols-1"> 
    @foreach ($products as $product)
        <div class="">
            <img src="./img/laptop.jpeg" class="w-3/4 mx-auto" alt="laptop">
            <h3 class="text-center uppercase">{{ $product->name }}</h3>
            <h5 class="text-center uppercase">&euro;{{ $product->price }}</h5>
        </div>
       
    @endforeach
</div>

