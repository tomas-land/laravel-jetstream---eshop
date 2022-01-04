<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class CheckoutComponent extends Component
{
    public function render()
    {
        return view('livewire.pages.checkout-component')->layout('layouts.guest');
    }
}
