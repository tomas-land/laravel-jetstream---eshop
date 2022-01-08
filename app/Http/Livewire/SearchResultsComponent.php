<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class SearchResultsComponent extends Component
{
    public $sorting;
    public $pagesize;
    public $query;

    public function mount(Request $request)
    {  

         $this->query = $request->searchQuery;
        // $this->products = [];
        $this->sorting = '';
        $this->pagesize = 9;
    }
 
    use WithPagination;
    public function render()
    {
      
        if ($this->sorting == 'latest') {
            $products = Product::where('name', 'like', '%' . $this->query .'%')->orderBy('created_at', 'DESC')->paginate($this->pagesize);
        } else if ($this->sorting == 'min-max') {
            $products = Product::where('name', 'like', '%' . $this->query .'%')->orderBy('price', 'ASC')->paginate($this->pagesize);
        } else if ($this->sorting == 'max-min') {
            $products = Product::where('name', 'like', '%' . $this->query .'%')->orderBy('price', 'DESC')->paginate($this->pagesize);
        } else {
            $products = Product::where('name', 'like', '%' . $this->query .'%')->paginate($this->pagesize);
        }

        $categories = Category::all();
        // $products = Product::paginate(3);
        return view('livewire.search-results-component', ['products' => $products, 'categories' => $categories])
            ->layout('layouts.guest');
    }
}
