<?php

namespace App\Providers;

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
        // Livewire::livewire('cart-indicator', \App\Http\Livewire\CartIndicator::class);
    }
}
