<?php
	class EmpleadosController extends BaseController{

		public function mostrarEmpleados()
		{
			$empleados = Empleados::all();

			return View::make('empleados.lista', array('empleados'=>$empleados));
		}


		public function guardaEmpleado(){

			$nombre = Input::get('nombre');
			Log::info("NOMBRE: ".$nombre);

			$empleado = new Empleados;
			$empleado->Nombre=$nombre;
			$empleado->AppPaterno = $AppPaterno;
			$empleado->AppMaterno = $AppMaterno;
			$empleado->FechNacimiento = $FechNacimiento;
			$empleado->Direccion = $Direccion;
			$empleado->Correo = $Correo;
			$empleado->IdUsuario = $IdUsuario;
			$empleado->IdNegocio = $IdNegocio;
			$empleado->IdPuesto = $IdPuesto;
			$empleado->save();

			$empleados = Empleados::all();
			return View::make('empleados.lista', array('empleados'=>$empleados));

		}


		public function formEmpleado(){

			$puestos = Puestos::all();

			$negocios = Negocios::all();

			return View::make('empleados.form')->with('combo', $puestos)->with('negocio', $negocios);

		}


		public function getNegocios(){
			$negocios = Negocios::all();
			return Response::json($negocios);

		} 

		public function getPuestos(){
			$puestos = Puestos::all();
			return Response::json($puestos);
		}

		/*public function selectPuestos(){

			$puestos = Puestos::all() -> list('idPuesto','NombrePuesto');

			$combobox = array(0=>"Selecciona un Puesto") + $puestos;

			$selected = array();

			return View::make("selectPuestos", compact('combobox', 'selected'));
		}*/
	}
?>