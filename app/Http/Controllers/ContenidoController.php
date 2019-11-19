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
     * Devuelve el listado de revistas.
     *
     * @return 
     */
    public function index($id) {
        $contenidos = Contenido::listado($id); 
        return view('contenido.index', compact(['contenidos']));
    }
    
    /**
     * Show the specified resource.
     *
     * @param  int $id
     * @return a view.
     */
    public function show($id) {
        $item = Contenido::encontrar($id)[0];
        
        return view("contenido.show", compact(['item']));
    }
}
