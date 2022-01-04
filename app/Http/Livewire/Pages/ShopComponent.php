<?php

namespace App\Http\Livewire\Pages;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ShopComponent extends Component
{
public $sorting;
public $pagesize;

public function mount(){
    $this->sorting = '';
    $this->pagesize = 9;
}
    use WithPagination;
    public function render()
    {
        if($this->sorting == 'latest'){
            $products = Product::orderBy('created_at', 'DESC')->paginate($this->pagesize);
        } else if($this->sorting == 'min-max'){
            $products = Product::orderBy('price', 'ASC')->paginate($this->pagesize);
        } else if($this->sorting == 'max-min'){
            $products = Product::orderBy('price', 'DESC')->paginate($this->pagesize);
        } else {
            $products = Product::paginate($this->pagesize);
        }
        
        $categories = Category::all();
        // $products = Product::paginate(3);
        return view('livewire.pages.shop-component', ['products' => $products,'categories'=>$categories])
        ->layout('layouts.guest');
    }
}
