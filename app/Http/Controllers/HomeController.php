<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contenido;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'user','gestor']);
        $contenidos = Contenido::all();

        return view('home', compact(['contenidos']));
    }
}
