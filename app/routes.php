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

Route::get('/','HomeController@showIndex');
Route::post('loginUsuario', 'UsuariosController@accesaLogin');

Route::get('/register','HomeController@showRegister');
Route::post('postUsuarios', 'UsuariosController@guardaUsuarios');

Route::get('logout', 'UsuariosController@logout');

Route::get('dashboard','HomeController@showDashboard');

Route::get('userAdmin', 'HomeController@showFormEmpleados');