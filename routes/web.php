<?php
use App\Contenido;


//Rutas cabeceras
Route::get('/contenidos/{id}', 'ContenidoController@index')->name('contenidos.index')->where('id', '[0-9]+');
Route::get('/contenidos/elemento/{id}', 'ContenidoController@show')->name('contenidos.show')->where('id', '[0-9]+');

//Rutas informaticas.
Route::get('/info/about', 'InfoController@about')->name('info.about');
Route::get('/info/archievements', 'InfoController@archievements')->name('info.archievements');
Route::get('/info/contact', 'InfoController@contact')->name('info.contact');
Route::get('/info/origins', 'InfoController@origins')->name('info.origins');

//Admin
Route::get('/admin/estadisticas', 'AdminController@estadisticas')->name('admin.estadisticas');

//Rutas genéricas
Route::get('/', 'ContenidoController@welcome');

Route::get('/home', 'HomeController@index')->name('home');

//Rutas seguridad
Auth::routes();


