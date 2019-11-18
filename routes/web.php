<?php
use App\Contenido;


//Rutas cabeceras
Route::get('/revistas', 'ContenidoController@revistas')->name('revistas');

//Route::get('/contenido', function () {
//    return view('contenido/index');
//});

Route::get('/', function () {
    $contenidos = Contenido::destacado(); 
    return view('welcome', compact(['contenidos']));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
