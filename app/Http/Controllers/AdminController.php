<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contenido;

class AdminController extends Controller
{
    public function estadisticas() {
        
        $contenidos = Contenido::destacado(); 
        $ultimonumero = Contenido::ultimoElemento(4);
        $analisismasvisto = Contenido::masvisto(1);
        $previewmasvisto = Contenido::masvisto(2);
        $articulosmasvistos = Contenido::articulosmasvistos();
        return view('gestion/estadisticas', compact(['contenidos','ultimonumero'
            ,'analisismasvisto', 'previewmasvisto','articulosmasvistos']));
    }
}
