<?php
use App\Contenido;

//Revista
Route::get('revista/create', 'RevistaController@create')->name('revista.create');
Route::post('revista', 'RevistaController@store')->name('revista.store');
Route::get('revista/{id}/edit', 'RevistaController@edit')->name('revista.edit');
Route::put('revista/{id}', 'RevistaController@update')->name('revista.update');
Route::delete('revista/{id}', 'RevistaController@destroy')->name('revista.destroy');

//Analisis
Route::get('analisis/create', 'AnalisisController@create')->name('analisis.create');
Route::post('analisis', 'AnalisisController@store')->name('analisis.store');
Route::get('analisis/{id}/edit', 'AnalisisController@edit')->name('analisis.edit');
Route::put('analisis/{id}', 'AnalisisController@update')->name('analisis.update');
Route::delete('analisis/{id}', 'AnalisisController@destroy')->name('analisis.destroy');

//Cotenido generico: Noticias, ¿sorteo?, videos, entrevista, previews, reportajes,... 
Route::get('contenido/create/{tipocontenido}', 'ContenidoController@create')->name('contenido.create')->where('id', '[0-9]+');
Route::post('noticia', 'ContenidoController@store')->name('Contenido.store');
Route::get('noticia/{id}/edit', 'ContenidoController@edit')->name('Contenido.edit');
Route::put('noticia/{id}', 'ContenidoController@update')->name('Contenido.update');
Route::delete('noticia/{id}', 'ContenidoController@destroy')->name('Contenido.destroy');

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


//Mantenimientos
Route::get('/mantenimiento/desarrolladoras', 'MantenimientoController@desarrolladoras')->name('mantenimiento.desarrolladoras.index');
Route::get('/mantenimiento/etiquetas', 'MantenimientoController@etiquetas')->name('mantenimiento.etiquetas.index');
Route::get('/mantenimiento/usuarios', 'MantenimientoController@usuarios')->name('mantenimiento.usuarios.index');

