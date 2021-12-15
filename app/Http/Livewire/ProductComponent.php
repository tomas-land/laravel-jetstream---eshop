<?php

namespace App\Http\Livewire;
use App\Models\Product;
use Livewire\Component;

class ProductComponent extends Component
{
    public $products;

    public function mount()
    {
        $this->products = Product::all();

    }
    public function render()
    {
        
        return view('livewire.product-component');
    }
}
