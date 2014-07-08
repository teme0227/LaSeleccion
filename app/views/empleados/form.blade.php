<!DOCTYPE HTML>
<HTML>
<head>
	{{HTML::script("js/jquery-1.8.2.min.js")}}
	{{HTML::script("js/formEmpleados.js")}}
</head>
<body>
	<div>
		<form action="postEmpleado" method="POST">
			<table>
				<tr>
					<td><label>Nombre: </label></td>
					<td><input name="nombre"></td>
				</tr>
				<tr>
					<td><label>Apellido Paterno: </label></td>
					<td><input name="appPaterno"></td>
				</tr>
				<tr>
					<td><label>Apellido Materno: </label></td>
					<td><input name="appMaterno"></td>
				</tr>
				<tr>
					<td><label>Fecha de Nacimiento: </label></td>
					<td><input name="appMaterno"></td>
				</tr>
				<tr>
					<td><label>Direccion: </label></td>
					<td><input name="appMaterno"></td>
				</tr>
				<tr>
					<td><label>Correo: </label></td>
					<td><input name="appMaterno"></td>
				</tr>
				<tr>
					<td><label>Usuario: </label></td>
					<td><input name="idusuario"></td>
				</tr>
				<tr>
					<td><label>Negocio: </label></td>
					<td>
						<select id="negocios">
							<!--@foreach ($negocio as $negocios)
								option value="{{$negocios->idNegocio}}">{{$negocios->NombreNegocio}}</option>
							@endforeach-->
						</select>
					</td>	
				</tr>
				<tr>
					<td><label>Puesto: </label></td>
					<td>
						<select id="puestos">
						<!--	@foreach ($combo as $puesto)
								<option value="{{$puesto->idPuesto}}">{{$puesto->NombrePuesto}}</option>
							@endforeach
						-->
						</select>
					</td>	
				</tr>
			</table>
			<button type="submit">Guardar</button>
		</form>
	</div>
</body>
</HTML>