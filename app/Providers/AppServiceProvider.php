<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Contenido;

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
        Schema::defaultStringLength(191);
       
        //Datos para los menús laterales    
        View::share('contenidos', Contenido::destacado());
        View::share('ultimonumero', Contenido::ultimoElemento(4));
        View::share('analisismasvisto', Contenido::masvisto(1));
        View::share('previewmasvisto', Contenido::masvisto(2));
        View::share('articulosmasvistos', Contenido::articulosmasvistos());
    }
}
