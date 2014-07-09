<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Rutas para el login
Route::get('/', 'UsuariosController@loginUsuario');
Route::post('loginUsuario', 'UsuariosController@accesaLogin');

// Rutas para generar un nuevo usuario
Route::get('register', 'UsuariosController@formUsers');
Route::post('postUsuarios', 'UsuariosController@guardaUsuarios');

// Cerrar sesión
Route::get('logout', 'UsuariosController@logout');

Route::get('dashboard','HomeController@showDashboard');
