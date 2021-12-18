<?php

namespace App\Http\Livewire\Pages;
use App\Models\Product;
use Livewire\Component;

class HomepageComponent extends Component
{
    public $products;

    public function mount()
    {
        $this->products = Product::all();

    }

    public function render()
    {
        return view('livewire.pages.homepage-component');
    }
}
