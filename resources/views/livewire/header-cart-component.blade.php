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