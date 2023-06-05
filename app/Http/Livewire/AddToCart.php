<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddToCart extends Component
{
    public $product;

    public function addToCart()
    {
        // Добавьте код для добавления товара в корзину
    
        $this->emit('cartUpdated');
    }
    

    public function render()
    {
        return view('livewire.add-to-cart');
    }

    
}
