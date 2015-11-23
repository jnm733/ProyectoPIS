<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',[
    'as' => '/', 'uses' => 'FrontController@index'
]);
Route::get('index',[
    'as' => 'index', 'uses' => 'FrontController@indexUsuario'
]);

Route::get('registrarse',[
    'as' => 'registrarse', 'uses' => 'UsuarioController@create'
]);

Route::get('asociarRiesgos/{id}',[
    'as' => 'asociarRiesgos', 'uses' => 'AsociarRiesgosController@index'
]);

Route::resource('asociarRiesgos','AsociarRiesgosController');
Route::resource('usuario','UsuarioController');
Route::resource('proyecto','ProyectoController');
Route::resource('tipoProyecto','TipoProyectoController');

Route::resource('riesgo','RiesgoController');
Route::resource('categoria','CategoriaRiesgoController');

Route::resource('login','LogController');
Route::get('logout','LogController@logout');
