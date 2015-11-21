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

Route::get('/', ['as' => 'index', function () {
    return view('indexInvitado');
}]);

Route::get('index', ['as' => 'indexUsuario', function () {
    return view('indexUsuario');
}]);

Route::get('registrarse',[
    'as' => 'registrare', 'uses' => 'UsuarioController@create'
]);

Route::resource('usuario','UsuarioController');

Route::resource('login','LogController');
Route::resource('proyecto','ProyectoController');
Route::resource('tipoProyecto','TipoProyectoController');
Route::get('logout','LogController@logout');
