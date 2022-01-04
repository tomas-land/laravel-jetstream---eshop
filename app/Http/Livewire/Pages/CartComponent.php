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
    }
    public function decreaseQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty - 1;
        Cart::update($rowId, $qty);

    }
    public function removeProduct($rowId,$name)
    {
        Cart::remove($rowId);
        session()->flash('success_message', 'Prekė "'. $name .'" išimta iš krepšelio');
    }
    // public function addToCart($product_id)
    // {

    //     $product = Product::findOrFail($product_id);
    //     Cart::add($product->id, $product->name, $this->count, $product->price)->associate('App\Models\Product');
    //     // dd(Cart::content());
    //     // return redirect()->route('shop');
    // }
    public function render()
    {
// $cart_subtotal = Cart::subtotal();
        // $cart_tax = Cart::tax();,['cart_subtotal'=>$cart_subtotal,'cart_tax'=>$cart_tax]
        // Cart::destroy;
        
        return view('livewire.pages.cart-component')->layout('layouts.guest');
    }
}
