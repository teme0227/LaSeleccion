<?php
	class UsuariosController extends BaseController{
	
		

		public function accesaLogin(){

			$user = Input::get('user');
			$pass = Input::get('pass');

			$data = [ 
						'user' => $user,
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

			$newUser = new User;

			$newUser -> user = Input::get('user');
			$newUser -> password = Hash::make(Input::get('passw'));
			$newUser -> active = 1;
			$newUser -> role_id = 2;
			$newUser -> save();
		}

		public function logout(){
			Auth::logout();
    		return Redirect::to('/');
		}
	}
?>