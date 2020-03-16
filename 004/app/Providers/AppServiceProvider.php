<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

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
        // I will change this values to portuguese (usuarios/{novo,editar})
        Route::resourceVerbs([
            "create" => "novo",
            "edit" => "editar"
        ]);
    }
}
