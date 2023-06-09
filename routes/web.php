<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', 'App\Http\Controllers\ProductController@index');
// Route::get('/livewire/cart', [App\Http\Controllers\CartController::class, 'index']);
Route::get('/', 'App\Http\Livewire\ProductController@index');
Route::get('/cart', function () {
    return view('livewire/cart');
})->name('cart');

