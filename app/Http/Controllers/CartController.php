<?php

namespace App\Http\Controllers;

class CartController extends Controller
{
    public function index()
    {
        // Добавьте код для отображения списка продуктов и формы оформления заказа

        return view('cart.index');
    }
}
