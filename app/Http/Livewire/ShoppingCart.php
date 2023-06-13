<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ShoppingCart extends Component
{
    public function addToCart($productId)
    {
        $product = Product::find($productId);

        if ($product) {
            session()->push('cart', $product);
        }
    }
    public function render()
    {
        $cartItems = session('cart', []);

        return view('livewire.cart', [
            'cartItems' => $cartItems,
        ]);
    }
}
