<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// Untuk handle bug pagination laravel
// use Illuminate\Pagination\Paginator;

// Untuk handle migration error
use Illuminate\Support\Facades\Schema;

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

        // Untuk handle bug Migration Error: Syntax error or access violation: 1071 Specified key was too long; max key length is 767 bytes
        Schema::defaultStringLength(191);
    }
}
