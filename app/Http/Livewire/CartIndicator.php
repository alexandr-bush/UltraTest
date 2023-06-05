<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartIndicator extends Component
{
    public $listeners = ['cartUpdated' => 'render'];

    public function render()
    {
        $cartCount = 0; // Получите количество товаров в корзине
    
        return view('livewire.cart-indicator', compact('cartCount'));
    }
}


