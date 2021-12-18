<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ButtonComponent extends Component
{

    public $name;
    public function setName($name){
        $this->name = $name;
    }
    public function render()
    {
        return view('livewire.button-component');
    }
}
