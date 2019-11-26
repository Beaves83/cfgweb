<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use App\Etiqueta;
use App\User;

class MantenimientoController extends Controller
{
    //Listado de desalloradoras/Distribuidoras
    public function desarrolladoras() {  
        $listado = Empresa::all();
        return view('mantenimiento/desarrolladora/index', compact(['listado']));
    }
    
    //Listado de etiquetas
    public function etiquetas() {  
        $listado = Etiqueta::all();
        return view('mantenimiento/etiquetas/index', compact(['listado']));
    }
    
    //Listado de etiquetas
    public function usuarios() {  
        $listado = User::all();
        return view('mantenimiento/usuarios/index', compact(['listado']));
    }
}
