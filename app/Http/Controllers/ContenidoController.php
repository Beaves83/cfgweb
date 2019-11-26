<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;
use App\Contenido;
use App\Cliente;
use App\Tipocontenido;

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
    
    public function create($tipocontenido) {
        //auth()->user()->authorizeRoles(['admin','secretario']);
//        $elemento = Contenido::find($id);
//        
        //$tipos = Tipocontenido::all();
        $tipos = Tipocontenido::find($tipocontenido);
//        $municipios = Municipio::all('city_name','id','region_id');
        return view('contenido.create', compact(['tipocontenido','tipos']));
        //return view('clientes.create', compact(['provincias','municipios']));
    }
}
