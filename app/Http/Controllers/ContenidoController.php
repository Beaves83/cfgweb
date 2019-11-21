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
        
        $contenidos = Contenido::destacado();  
        $ultimonumero = Contenido::ultimoElemento(4);
        $analisismasvisto = Contenido::masvisto(1);
        $previewmasvisto = Contenido::masvisto(2);
        $articulosmasvistos = Contenido::articulosmasvistos();
        return view('welcome', compact(['contenidos','ultimonumero'
            ,'analisismasvisto', 'previewmasvisto','articulosmasvistos']));
    }
    /**
     * 
     *
     * @return 
     */
    public function index($id) {
        
        $contenidos = Contenido::listado($id); 
        $ultimonumero = Contenido::ultimoElemento(4);
        $analisismasvisto = Contenido::masvisto(1);
        $previewmasvisto = Contenido::masvisto(2);
        $articulosmasvistos = Contenido::articulosmasvistos();
        return view('welcome', compact(['contenidos','ultimonumero'
            ,'analisismasvisto', 'previewmasvisto','articulosmasvistos']));
    }
    
    /**
     * Show the specified resource.
     *
     * @param  int $id
     * @return a view.
     */
    public function show($id) {
        
        $item = Contenido::encontrar($id);
        $ultimonumero = Contenido::ultimoElemento(4);
        $analisismasvisto = Contenido::masvisto(1);
        $previewmasvisto = Contenido::masvisto(2);
        $articulosmasvistos = Contenido::articulosmasvistos();
        
        if($item->count() < 4){
            return view('revista.show', compact(['item','ultimonumero'
            ,'analisismasvisto', 'previewmasvisto','articulosmasvistos']));
        } else {
            return view('contenido.show', compact(['item','ultimonumero'
            ,'analisismasvisto', 'previewmasvisto','articulosmasvistos']));
        }
        
    }
}
