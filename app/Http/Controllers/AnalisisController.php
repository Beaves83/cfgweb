<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contenido;

class AnalisisController extends Controller
{
    /**
     * Devuelve el listado de revistas.
     *
     * @return 
     */
    public function index() {
        $contenidos = Contenido::listado(1);
        
        return view('contenido.index', compact(['contenidos']));
    }
}
