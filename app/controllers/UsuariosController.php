<?php
	class UsuariosController extends BaseController{
	
		

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