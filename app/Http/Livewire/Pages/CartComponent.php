<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use Livewire\Request;

class CartComponent extends Component
{

    public function store(Request $request)
    {
    dd($request);
// Cart::add($product_id,$product_name,$this->quantity,$product_price)->associate('App\Models\Product');
        return redirect()->route('shop');
    }
    public function render()
    {
        return view('livewire.pages.cart-component');
    }
}
