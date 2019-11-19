<?php
use App\Contenido;


//Rutas cabeceras
Route::get('/contenidos/{id}', 'ContenidoController@index')->name('contenidos.index')->where('id', '[0-9]+');
Route::get('/contenidos/elemento/{id}', 'ContenidoController@show')->name('contenidos.show')->where('id', '[0-9]+');




Route::get('/', function () {
    $contenidos = Contenido::destacado(); 
    return view('welcome', compact(['contenidos']));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
