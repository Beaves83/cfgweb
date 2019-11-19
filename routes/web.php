<?php
use App\Contenido;


//Rutas cabeceras
Route::get('/revistas', 'RevistaController@index')->name('revistas.index');
Route::get('/analisis', 'AnalisisController@index')->name('analisis.index');
Route::get('/noticias', 'NoticiaController@index')->name('noticias.index');
Route::get('/entrevistas', 'EntrevistaController@index')->name('entrevistas.index');
Route::get('/previews', 'PreviewController@index')->name('previews.index');
Route::get('/reportajes', 'ContenidoController@index')->name('reportajes.index');
Route::get('/sorteos', 'SorteoController@index')->name('sorteos.index');
Route::get('/videos', 'VideoController@index')->name('videos.index');


//Elementos
//Route::get('/revistas/{item}', 'ContenidoController@revistasshow')->name('revistas');
//Route::get('/noticias', 'ContenidoController@noticias')->name('noticias');
//Route::get('/analisis', 'ContenidoController@analisis')->name('analisis');
//Route::get('/previews', 'ContenidoController@previews')->name('previews');
//Route::get('/reportajes', 'ContenidoController@reportajes')->name('reportajes');
//Route::get('/sorteos', 'ContenidoController@sorteos')->name('sorteos');
//Route::get('/videos', 'ContenidoController@videos')->name('videos');
//Route::get('clientes/{cliente}', 'ClienteController@show')->name('clientes.show')->where('cliente', '[0-9]+');


//Route::get('/contenido', function () {
//    return view('contenido/index');
//});

Route::get('/', function () {
    $contenidos = Contenido::destacado(); 
    return view('welcome', compact(['contenidos']));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
