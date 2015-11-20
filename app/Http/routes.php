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

Route::resource('usuario','UsuarioController');