<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartIndicator extends Component
{
    public $cartCount;

    public function render()
    {
        return view('livewire.cart-indicator');
    }
}


