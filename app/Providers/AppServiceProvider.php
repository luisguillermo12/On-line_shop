<?php

namespace Massaggi\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Massaggi\MainMenu;
use Massaggi\Province;
use Massaggi\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);// Este es el valor por defecto de los campos que lo le coloco un valor del tamaño en la migrations si coloco 192 ó superior dará /* El valor por debecto se lo agrego en la migration como segundo parametro y si no lo coloco me aparecerá con el valor que envié como parametro en esta función */

           view()->composer('layouts.app', function($view)
        {
            //$view->with('main_menu', MainMenu::orderby('order_menu')->get());

        });
            
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
