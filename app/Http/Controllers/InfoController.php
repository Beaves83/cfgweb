<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contenido;

class InfoController extends Controller
{
    /**
     * 
     *
     * @return 
     */
    public function about() {
        $ultimonumero = Contenido::ultimoElemento(4);
        $analisismasvisto = Contenido::masvisto(1);
        $previewmasvisto = Contenido::masvisto(2);
        $articulosmasvistos = Contenido::articulosmasvistos();
        return view('info.about', compact(['item','ultimonumero'
            ,'analisismasvisto', 'previewmasvisto','articulosmasvistos']));

    }
    
    /**
     * 
     *
     * @return 
     */
    public function archievements() {
        $ultimonumero = Contenido::ultimoElemento(4);
        $analisismasvisto = Contenido::masvisto(1);
        $previewmasvisto = Contenido::masvisto(2);
        $articulosmasvistos = Contenido::articulosmasvistos();
        return view('info.archievements', compact(['item','ultimonumero'
            ,'analisismasvisto', 'previewmasvisto','articulosmasvistos']));
    }
    
    /**
     * 
     *
     * @return 
     */
    public function contact() {
        $ultimonumero = Contenido::ultimoElemento(4);
        $analisismasvisto = Contenido::masvisto(1);
        $previewmasvisto = Contenido::masvisto(2);
        $articulosmasvistos = Contenido::articulosmasvistos();
        return view('info.contact', compact(['item','ultimonumero'
            ,'analisismasvisto', 'previewmasvisto','articulosmasvistos']));
    }
    
    /**
     * 
     *
     * @return 
     */
    public function origins() {
        $ultimonumero = Contenido::ultimoElemento(4);
        $analisismasvisto = Contenido::masvisto(1);
        $previewmasvisto = Contenido::masvisto(2);
        $articulosmasvistos = Contenido::articulosmasvistos();
        return view('info.origins', compact(['item','ultimonumero'
            ,'analisismasvisto', 'previewmasvisto','articulosmasvistos']));
    }
}
