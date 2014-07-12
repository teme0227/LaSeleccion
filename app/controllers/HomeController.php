<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function showIndex(){
		return View::make('login');
	}

	public function showRegister(){
		return View::make('register');
	}

	public function showDashboard(){
		return View::make('dashboard.index');
	}

	public function showFormEmpleados(){

		$puestos = Puestos::all();

		$negocios = Negocios::all();

		Log::info("TOTAL: ".count($negocios));

		return View::make('empleados.form')->with('combo', $puestos)->with('negocios', $negocios);
	}
}
