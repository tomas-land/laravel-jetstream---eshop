<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
class ProductPageComp extends Component
{
    use WithPagination;
    public function render()
    {
        $products = Product::paginate(3);
        return view('livewire.product-page-comp', ['products' => $products]);
    }
}
