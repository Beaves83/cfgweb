<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contenido;

class ReportajeController extends Controller
{
    /**
     * Devuelve el listado de revistas.
     *
     * @return 
     */
    public function index() {
        $contenidos = Contenido::listado(7);
        
        return view('contenido.index', compact(['contenidos']));
    }
}
