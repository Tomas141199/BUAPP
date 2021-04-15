<?php

namespace App\Providers;

use View;

use Illuminate\Support\ServiceProvider;

class LinksProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {


        View::composer('*', function ($view) {
            $categorias = array(
                [
                    'nombre' => 'Historia universitaria',
                    'url' => 'https://www.buap.mx/historia_universitaria',
                ],
                [
                    'nombre' => 'Secretaria Acedemica',
                    'url' => 'https://secreacademica.cs.buap.mx/',
                ],
                [
                    'nombre' => 'Biblioteca BUAP',
                    'url' => 'https://secreacademica.cs.buap.mx/',
                ],
                [
                    'nombre' => 'Autosevicios',
                    'url' => 'http://webserver1.siiaa.siu.buap.mx:81/autoservicios/twbkwbis.P_GenMenu?name=homepage',
                ],
                [
                    'nombre' => 'Profesores',
                    'url' => 'https://secreacademica.cs.buap.mx/profesores.html',
                ],
            );
            $view->with('categorias', $categorias);
        });
    }
}