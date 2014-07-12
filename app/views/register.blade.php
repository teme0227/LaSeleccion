<!DOCTYPE HTML>
<HTML>
<head>
	<meta charset="UTF-8">
	{{ HTML::style('css/foundation.css') }}
 	{{ HTML::style('css/normalize.css')}} 

	<script src="{{ URL::asset('js/jquery-1.8.2.min.js') }}"></script>
	<script src="{{ URL::asset('js/vendor/modernizr.js') }}"></script>	
	<script src="{{ URL::asset('js/foundation.min.js') }}"></script>
  	<script src="{{ URL::asset('js/jquery.blockUI.js') }}"></script>
  	<script src="{{ URL::asset('js/formEmpleados.js') }}"></script>
</head>
<body>

	
	
	<div>
		<form action="postUsuarios" method="POST">
			<table>
				<tr>
					<td><label>Usuario: </label></td>
					<td><input name="user"></td>
				</tr>
				<tr>
					<td><label>Contraseña: </label></td>
					<td><input name="passw" type="password"></td>
				</tr>
			</table>
			<button type="submit">Guardar</button>
		</form>
	</div>
</body>
</HTML>