<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HeaderCartComponent extends Component
{
protected $listeners = ['cart_updated' =>'render'];

    public function render()
    {
        return view('livewire.header-cart-component');
    }
}
