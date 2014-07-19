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
			$rows = DB::table('productos')->count();
			if(Input::get("jtSorting"))
			{
				$search = explode(" ", Input::get("jtSorting"));
				$data = DB::table("productos")
				->skip(Input::get("jtStartIndex"))
				->take(Input::get("jtPageSize"))
				->orderBy($search[0], $search[1])
				->get();
			}
			else
			{
				$data = DB::table("productos")
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
				"Descripcion"			=>		Input::get("Descripcion"),
				"Marca"			=>		Input::get("Marca"),
				"Cantidad" => Input::get("Cantidad"),
				"Precio" => Input::get("Precio"),
				"Proveedor" => Input::get("Proveedor")
			);
			$people = new Productos($peopleData);
			if($people->save())
			{
				$person = Productos::find($people->idProducto);
				$toView = array(
					"0"				=>		$people->idProducto,
					"idProducto"	=>		$people->idProducto,
					"1"				=>		$person->Descripcion,
					"Descripcion"	=>		$person->Descripcion,
					"2"				=>		$person->Marca,
					"Marca"			=>		$person->Marca,
					"3"				=>		$person->Cantidad,
					"Cantidad"		=>		$person->Cantidad,
					"4"				=>		$person->Precio,
					"Precio"		=>		$person->Precio,
					"5"				=>		$person->Proveedor,
					"Proveedor"		=>		$person->Proveedor
				);

				return Response::json(array(
						"Result"			=>		"OK",
						"Record"			=>		$toView
					)
				);
			}
			break;
		case 'update':
			$person = Productos::find(Input::get("idProducto"));
			$person->Descripcion = Input::get("Descripcion");
			$person->Marca = Input::get("Marca");
			$person->Cantidad = Input::get("Cantidad");
			$person->Precio = Input::get("Precio");
			$person->Proveedor = Input::get("Proveedor");
			if($person->save())
			{
				return Response::json(array(
						"Result"			=>		"OK",
					)
				);
			}
			break;
		case 'delete':
			$person = Productos::find(Input::get("idProducto"));
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