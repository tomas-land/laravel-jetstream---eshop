<?php

namespace App\Http\Livewire\Pages;

use App\Models\Product;
use Cart;
// use Gloudemans\Shoppingcart\Facades\Cart as FacadesCart;
use Livewire\Component;

class DetailsComponent extends Component
{
    // public $qty = 8;
    public $slug;
    public $count = 1;
    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function addToCart($product_id)
    {
        
        $product = Product::findOrFail($product_id);
        Cart::add($product->id, $product->name, $this->count, $product->price)->associate('App\Models\Product');
        // dd(Cart::content());
        // return redirect()->route('shop');
    }



    public function increment()
    {
        $this->count++;
    }
    public function decrement()
    {
        if($this->count != 0){
          $this->count--;  
        }
        
    }

    public function render()
    {

        // $cart = Cart::content();
        $product = Product::where('slug', $this->slug)->first();
        $related_products = Product::all();
        // $cart = FacadesCart::content()->count();
        // dd($product);
        // $category = Category::with('products')->find($this->slug);
        // dd($category);'cart' => $cart
        return view('livewire.pages.details-component', ['product' => $product, 'related_products' => $related_products])->layout('layouts.guest');
    }
}
