<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// Untuk handle bug pagination laravel
// use Illuminate\Pagination\Paginator;

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
        // Untuk handle bug pagination laravel
        // Paginator::useBootstrap();
    }
}
