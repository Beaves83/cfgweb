<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contenido;

class SorteoController extends Controller
{
    /**
     * Devuelve el listado de revistas.
     *
     * @return 
     */
    public function index() {
        $contenidos = Contenido::listado(8);
        
        return view('contenido.index', compact(['contenidos']));
    }
}
