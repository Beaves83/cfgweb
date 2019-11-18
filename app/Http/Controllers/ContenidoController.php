<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;
use App\Contenido;
use App\Cliente;
use Carbon\Carbon;

class ContenidoController extends Controller
{
    /**
     * Default page for showing all the list.
     *
     * @return a view with and the list of the clients.
     */
//    public function index() {
//        $contenido = Contenido::todoContenido();
//
//        return view('citas.index', compact(['citas', 'headers']));
//    }
    
    
    /**
     * Devuelve el listado de revistas.
     *
     * @return 
     */
    public function revistas() {
        $contenidos = Contenido::revistas();

        return view('contenido.index', compact(['contenidos']));
    }
}
