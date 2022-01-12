<?php

namespace App\Http\Livewire\Pages;

use Cart;
use Livewire\Component;

class CartComponent extends Component
{

    public function increaseQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty + 1;
        Cart::update($rowId, $qty);
        $this->emit('cart_updated');
    }
    public function decreaseQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty - 1;
        Cart::update($rowId, $qty);
        $this->emit('cart_updated');
    }
    public function removeProduct($rowId,$name)
    {
        Cart::remove($rowId);
        session()->flash('success_message', 'Prekė "'. $name .'" išimta iš krepšelio');
    }
  
    public function render()
    {
        return view('livewire.pages.cart-component')->layout('layouts.guest');
    }
}
