<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Make sure this runs after Blade is properly initialized
        if ($this->app->bound('blade.compiler')) {
            Blade::component('shop.components.app-layout', 'app-layout');
        }
    }
}