<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

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
        // Register Blade components
        Blade::component('admin-layout', \App\View\AdminLayout::class);
        Blade::component('guest-layout', \App\View\GuestLayout::class);
        Blade::component('auth-layout', \App\View\AuthLayout::class);
    }
}
