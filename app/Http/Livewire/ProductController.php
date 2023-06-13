<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductController extends Component
{
    public function addToCart($productId)
    {

        $product = Product::find($productId);

        if ($product) {
            session()->push('cart', $product);
        }
    }

    public function index()
    {
        $products = Product::where('active', true)->get();
        $cartCount = 2;

        return view('livewire.product-controller', compact('products', 'cartCount'));
    }
}

