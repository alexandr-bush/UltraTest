<?php

namespace App\Providers;

use App\Models\Product;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Именно в этом месте появляется ошибка объявления, если раскоментировать, то php artisan serve выдаст ошибку   Call to undefined method Livewire\LivewireManager::livewire().
        // Пути все правильные, объявления тоже.
        // Livewire::component('cart-indicator', \app\Http\Livewire\CartIndicator::class);
  
        view()->composer('cat.moder.icart-indicatpr', function ($view) {
            $posts = 'pula';

            $view->with('posts1', $posts);
            $view->with('posts2', $post xxds);
        });
        
    }
}
