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
        return view('info.about');

    }
    
    /**
     * 
     *
     * @return 
     */
    public function archievements() {
        return view('info.archievements');
    }
    
    /**
     * 
     *
     * @return 
     */
    public function contact() {
        return view('info.contact');
    }
    
    /**
     * 
     *
     * @return 
     */
    public function origins() {
        return view('info.origins');
    }
}
