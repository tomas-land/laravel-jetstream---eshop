<div class="flex text-base font-semibold border border-gray-300 ">
    <div class="text-gray-400 flex items-center justify-center mx-2">KIEKIS</div>
    <button class="px-4 p-4" wire:click="increment">+</button>
    <h1 class="flex items-center justify-center">{{ $count }}</h1>
    <input name='qty' type="hidden" value="{{ $count }}">
    <button class="px-4 p-4" wire:click="decrement">-</button>
</div>
