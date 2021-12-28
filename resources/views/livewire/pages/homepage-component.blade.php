

<div>
    {{-- Carousel --}}
    <section class="container flex justify-center items-center text-3xl  bg-red-200 h-96">carousel</section>
    {{-- Popular products --}}
    <section class="container my-16">
        <h1 class="text-3xl font-semibold text-gray-700 sm:pl-8">POPULIARIAUSIOS <br> PREKĖS</h1>
        <div class="border-t-2 my-8 border-gray-700 w-12"></div>

        @livewire('product-component',['products'=>$products])

    </section>
    <x-jet-section-border></x-jet-section-border>
    {{-- Rules and information --}}
    <div class="container grid grid-cols-4 gap-12 sm:grid-cols-1 sm:gap-6 lg:grid-cols-2 mx-auto">
        <div class="flex my-10 mx-auto sm:w-2/4 md:w-3/4 ">
            <div class="w-1/4  flex justify-end"><svg class="fill-current transition-to-gray"
                    xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24">
                    <path class="hover:text-gray-200"
                        d="M20 8h-3V4H3c-1.1 0-2 .9-2 2v11h2c0 1.66 1.34 3 3 3s3-1.34 3-3h6c0 1.66 1.34 3 3 3s3-1.34 3-3h2v-5l-3-4zM6 18.5c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zm13.5-9l1.96 2.5H17V9.5h2.5zm-1.5 9c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5z" />
                </svg></div>
            <div class="w-3/4 pl-6">
                <h4 class="font-semibold transition-to-gray">GREITAS PRISTATYMAS VISAME PASAULYJE</h4>
                <h5 class="text-sm mt-5 text-gray-400 ">Per 1-3 darbo dienas visoje Lietuvoje!</h5>
            </div>
        </div>
        <div class="flex my-10 mx-auto sm:w-2/4 md:w-2/4 ">
            <div class="w-1/4 flex justify-end"><svg class="fill-current transition-to-gray"
                    xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24">
                    <path
                        d="M14 12c0-1.1-.9-2-2-2s-2 .9-2 2 .9 2 2 2 2-.9 2-2zm-2-9c-4.97 0-9 4.03-9 9H0l4 4 4-4H5c0-3.87 3.13-7 7-7s7 3.13 7 7-3.13 7-7 7c-1.51 0-2.91-.49-4.06-1.3l-1.42 1.44C8.04 20.3 9.94 21 12 21c4.97 0 9-4.03 9-9s-4.03-9-9-9z" />
                </svg></div>
            <div class="w-3/4  pl-6">
                <h4 class="font-semibold transition-to-gray">NEMOKAMAS GRĄŽINIMAS</h4>
                <h5 class="text-sm mt-5 text-gray-400">14 dienų nemokamo grąžinimo garantija!</h5>
            </div>
        </div>
        <div class="flex my-10 mx-auto sm:w-2/4 md:w-2/4 ">
            <div class="w-1/4 flex justify-end"><svg class="fill-current transition-to-gray"
                    xmlns="http://www.w3.org/2000/svg" width="44" height="44"" viewBox=" 0 0 512 512">
                    <title>ionicons-v5-p</title>
                    <path
                        d="M435.25,48H312.35a14.46,14.46,0,0,0-10.2,4.2L56.45,297.9a28.85,28.85,0,0,0,0,40.7l117,117a28.85,28.85,0,0,0,40.7,0L459.75,210a14.46,14.46,0,0,0,4.2-10.2V76.8A28.66,28.66,0,0,0,435.25,48Z"
                        style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                    <path d="M384,160a32,32,0,1,1,32-32A32,32,0,0,1,384,160Z" />
                </svg></div>
            <div class="w-3/4  pl-6">
                <h4 class="font-semibold transition-to-gray">SAUGUS ATSISKAITYMAS</h4>
                <h5 class="text-sm mt-5 text-gray-400">Naudojame saugių atsiskaitymų sprendimą!</h5>
            </div>
        </div>
        <div class="flex my-10 mx-auto sm:w-2/4 md:w-2/4 ">
            <div class="w-1/4 flex justify-end"><svg class="fill-current transition-to-gray"
                    xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24">
                    <path
                        d="M14.36,14.23a3.76,3.76,0,0,1-4.72,0,1,1,0,0,0-1.28,1.54,5.68,5.68,0,0,0,7.28,0,1,1,0,1,0-1.28-1.54ZM9,11a1,1,0,1,0-1-1A1,1,0,0,0,9,11Zm6-2a1,1,0,1,0,1,1A1,1,0,0,0,15,9ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z" />
                </svg></div>
            <div class="w-3/4  pl-6">
                <h4 class="font-semibold transition-to-gray">PAGALBA IR KONSULTACIJOS</h4>
                <h5 class="text-sm mt-5 text-gray-400">Telefonu I Internetu I El. paštu</h5>
            </div>
        </div>
    </div>
    @livewire('button-component')
    <x-jet-section-border></x-jet-section-border>
    {{-- Latest products --}}
    <section class="container my-16">
        <h1 class="text-3xl font-semibold text-gray-700 sm:pl-8">NAUJAUSIOS <br> PREKĖS</h1>
        <div class="border-t-2 my-8 border-gray-700 w-12"></div>
        @livewire('product-component',['products'=>$products])
    </section>
</div>
