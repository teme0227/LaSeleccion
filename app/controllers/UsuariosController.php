<?php
	class UsuariosController extends BaseController{
	
		public function loginUsuario (){

			return View::make('loginUsuarios.login');

		}

		public function accesaLogin(){

			$user = Input::get('user');
			$pass = Input::get('pass');

			$data = [
				'usuario' => $user,
				'password'=> $pass
			];

			if (Auth::attempt($data)){
				$user_res = Auth::user();
				return Response::json($user_res);
			}
			else{
				$user_res = Auth::user();
				return Response::json($user_res);
			}

		}

		public function formUsers (){

			return View::make('loginUsuarios.formUsers');

		}

		public function guardaUsuarios(){

			$usuarios = new Usuarios;

			$usuarios -> usuario = Input::get('user');
			$usuarios -> password = Hash::make(Input::get('passw'));
			$usuarios -> save();
		}

		public function logout(){
			Auth::logout();
    		return Redirect::to('/');
		}
	}
?>