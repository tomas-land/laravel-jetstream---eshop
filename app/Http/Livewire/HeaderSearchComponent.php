<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class HeaderSearchComponent extends Component
{
    public $query;
    public $products;

  
    public function mount(){
        $this->resetSearch();
    }
    public function resetSearch()
    {
        $this->query = '';
        $this->products = [];
    }
    public function updatedQuery()
    {
        $this->products = Product::where('name', 'like', '%' . $this->query . '%')->get()->toArray();
    }
 
    public function render()
    {

        return view('livewire.header-search-component');
    }
}
