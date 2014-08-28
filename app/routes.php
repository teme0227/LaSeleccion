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

Route::get('productos', 'HomeController@showProductos');


Route::post("getData/{action}", function($action)
{
	switch ($action) 
	{
		case 'list':
			$rows = DB::table('products')->count();
			if(Input::get("jtSorting"))
			{
				$search = explode(" ", Input::get("jtSorting"));
				$data = DB::table("products")
				->skip(Input::get("jtStartIndex"))
				->take(Input::get("jtPageSize"))
				->orderBy($search[0], $search[1])
				->get();
			}
			else
			{
				$data = DB::table("products")
				->skip(Input::get("jtStartIndex"))
				->take(Input::get("jtPageSize"))
				->get();
			}
			return Response::json(
				array(
					"Result"			=>		"OK",
					"TotalRecordCount"	=>		$rows,
					"Records"			=>		$data
				)
			);
			break;
		case 'create':
			$peopleData = array(
				"name"			=>		Input::get("Nombre"),
				"price"			=>		Input::get("Precio"),
				"active" => Input::get("Activo")
			);
			$people = new Products($peopleData);
			if($people->save())
			{
				$person = Products::find($people->id);
				$toView = array(
					"0"				=>		$people->id,
					"id"	=>		$people->id,
					"1"				=>		$person->name,
					"Nombre"	=>		$person->name,
					"2"				=>		$person->price,
					"Precio"			=>		$person->price,
					"3"				=>		$person->active,
					"Activo"		=>		$person->active
				);

				return Response::json(array(
						"Result"			=>		"OK",
						"Record"			=>		$toView
					)
				);
			}
			break;
		case 'update':
			$person = Products::find(Input::get("id"));
			$person->name = Input::get("Nombre");
			$person->price = Input::get("Precio");
			$person->active = Input::get("Activo");
			if($person->save())
			{
				return Response::json(array(
						"Result"			=>		"OK",
					)
				);
			}
			break;
		case 'delete':
			$person = Products::find(Input::get("id"));
			if($person->delete())
			{
				return Response::json(array(
						"Result"			=>		"OK",
					)
				);
			}
			break;
	}
});	