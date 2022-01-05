<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryComponent extends Component
{
    public $sorting;
    public $pagesize;
    public $category_slug;
    public function mount($category_slug)
    {
        $this->sorting = '';
        $this->pagesize = 6;
        $this->category_slug = $category_slug;
    }
    use WithPagination;
    public function render()
    {
        $category = Category::where('slug', $this->category_slug)->first();
        $category_id = $category->id;
        $category_name = $category->name;
        if ($this->sorting == 'latest') {
            $products = Product::where('category_id', $category_id)->orderBy('created_at', 'DESC')->paginate($this->pagesize);
        } else if ($this->sorting == 'min-max') {
            $products = Product::where('category_id', $category_id)->orderBy('price', 'ASC')->paginate($this->pagesize);
        } else if ($this->sorting == 'max-min') {
            $products = Product::where('category_id', $category_id)->orderBy('price', 'DESC')->paginate($this->pagesize);
        } else {
            $products = Product::where('category_id', $category_id)->paginate($this->pagesize);
        }

        $categories = Category::all();
        // $products = Product::paginate(3);
        return view('livewire.category-component', ['products' => $products, 'categories' => $categories, 'category_name' => $category_name])
            ->layout('layouts.guest');
    }
}
