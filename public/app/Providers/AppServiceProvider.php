<?php

namespace App\Providers;

use App\Models\logo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
// use Facade\FlareClient\View;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        View::share('navLogo', logo::first());

        Blade::if('admin', function () {
            return Auth::user()->role_id == 1;
        });

        Blade::if('webmaster', function () {
            return Auth::user()->role_id <= 2;
        });

        Blade::if('editor', function () {
            return Auth::user()->role_id <= 3;
        });
    }
}
