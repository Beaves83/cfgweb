<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contenido;
use App\User;
use App\Revista;
use App\Estadisticas;
use App\Etiqueta;

class AdminController extends Controller
{
    public function estadisticas() {
        //Estadisticas
        $estadisticas = new Estadisticas();
        $estadisticas->cantidadusuarios = User::count(); 
        $estadisticas->cantidadrevistas = Revista::cantidad(); 
        $estadisticas->cantidadposts = Contenido::count();
        $estadisticas->topeposts = Contenido::top(5);
        $estadisticas->topetiquetas = Etiqueta::top(5);
        //3 Post más visto.
        //3 Etiquetas más usadas
        //

        return view('gestion/estadisticas', compact(['estadisticas']));
    }
}
