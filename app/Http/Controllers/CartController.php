<?php

namespace App\Http\Controllers;

use App\Models\Product;

class CartController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('livewire.cart', compact('products'));
    }
}
