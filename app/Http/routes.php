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

Route::get('asociarUsuarios/{id}',[
    'as' => 'asociarUsuarios', 'uses' => 'AsociarUsuariosController@index'
]);

Route::get('lineacorte/{id}/{l}',[
    'as' => 'lineacorte', 'uses' => 'LineaCorteController@index'
]);

Route::resource('asociarRiesgos','AsociarRiesgosController');
Route::resource('asociarUsuarios','AsociarUsuariosController');
Route::resource('categoria','CategoriaRiesgoController');
Route::resource('lineacorte','LineaCorteController');
Route::resource('login','LogController');
Route::get('logout','LogController@logout');
Route::resource('proyecto','ProyectoController');
Route::resource('riesgo','RiesgoController');
Route::resource('tipoProyecto','TipoProyectoController');
Route::resource('usuario','UsuarioController');

