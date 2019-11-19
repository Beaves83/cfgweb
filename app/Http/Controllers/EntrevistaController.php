<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contenido;

class EntrevistaController extends Controller
{
    /**
     * Devuelve el listado de revistas.
     *
     * @return 
     */
    public function index() {
        $contenidos = Contenido::listado(3);
        
        return view('contenido.index', compact(['contenidos']));
    }
}
