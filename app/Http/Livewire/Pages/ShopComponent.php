<?php

namespace App\Http\Livewire\Pages;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ShopComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'tailwind';
    public function render()
    {
        $categories = Category::all();
        $products = Product::paginate(3);
        return view('livewire.pages.shop-component', ['products' => $products,'categories'=>$categories])
        ->layout('layouts.guest');
    }
}
