<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;
use App\Contenido;
use App\Cliente;

class ContenidoController extends Controller
{
    public function welcome() {
        return view('welcome');
    }
    /**
     * 
     *
     * @return 
     */
    public function index($id) {
        
        $contenidos = Contenido::listado($id);
        return view('welcome', compact(['contenidos']));
    }
    
    /**
     * Show the specified resource.
     *
     * @param  int $id
     * @return a view.
     */
    public function show($id) {
        
        $item = Contenido::encontrar($id);
        
        if($item->count() < 4){
            return view('revista.show', compact(['item']));
        } else {
            return view('contenido.show', compact(['item']));
        }       
    }
}
