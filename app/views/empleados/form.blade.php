@extends('layouts.laSeleccionLayo')
@section('js')
<script type="text/javascript">
	$("#fecNac").datepicker();
</script>
@stop

@section('contentIndex')
<div style="width:100%; padding-top: 30px; padding-left: 50px; padding-right: 50px;">
	<fieldset>
	<legend>Alta de Empleados</legend>
	<table width="100%" >
		<tr>
			<td align="left">
				<div class="row" width="100%" align="left">
					<div class="small-12 large-4 columns">
						<strong>Nombre: </strong><br/>
						<input name="nombre" style="width: 320px;" type="text"/>
					</div>
					<div class="small-12 large-4 columns">
						<strong>Apellido Paterno: </strong><br/>
						<input name="appPaterno" style="width: 320px;" type="text"/>
					</div>
					<div class="small-12 large-4 columns">
						<strong>Apellido Materno: </strong><br/>
						<input name="appMaterno" style="width: 320px;" type="text"/>
					</div>
				</div>
			</td>
		</tr>
        <tr>
			<td align="left">
				<div class="row" width="100%" align="left">
					<div class="small-12 large-2 columns">
						<strong>Fecha de Nac: </strong><br/>
						<input id="fecNac" name="fecNac" style="width: 150px;" type="date"/>
					</div>
					<div class="small-12 large-3 columns">
						<strong>Correo: </strong><br/>
						<input name="email" style="width: 320px;" type="text"/>
					</div>
					<div class="small-12 large-3 columns" style="padding-left: 100px;">
						<strong>Negocio: </strong><br/>
                        <select id="negocios" style="width: 230px;">
                            @foreach ($negocios as $negocio)
                                <option value="{{$negocio->idNegocio}}">{{$negocio->NombreNegocio}}</option>
                            @endforeach
                        </select>
					</div>
					<div class="small-12 large-3 columns">
						<strong>Puesto: </strong><br/>
						<select id="puestos" style="width: 235px;">
						@foreach ($combo as $puesto)
								<option value="{{$puesto->idPuesto}}">{{$puesto->NombrePuesto}}</option>
						@endforeach	
					</select>
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="row" width="100%" align="left">
					<div class="small-12 large-4 columns">
						<strong>Calle: </strong><br/>
						<input name="calle" style="width: 320px;" type="text"/>
					</div>
					<div class="small-12 large-4 columns">
						<strong>Colonia: </strong><br/>
						<input name="colonia" style="width: 320px;" type="text"/>
					</div>
					<div class="small-12 large-2 columns">
						<strong>Num. Ext: </strong><br/>
						<input name="nExt" style="width: 100px;" type="text"/>
					</div>
					<div class="small-12 large-2 columns">
						<strong>Num. Int: </strong><br/>
						<input name="nInt" style="width: 100px;" type="text"/>
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td align="left">
				<div class="row" width="100%" align="left">
					<div class="small-12 large-3 columns">
						<strong>Estado: </strong><br/>
						<input name="estado" style="width: 200px;" type="text"/>
					</div>
					<div class="small-12 large-3 columns">
						<strong>Deleg./Municipio: </strong><br/>
						<input name="estado" style="width: 200px;" type="text"/>
					</div>
					<div class="small-12 large-2 columns">
						<strong>Código Postal: </strong><br/>
						<input name="estado" style="width: 100px;" type="text"/>
					</div>
					<div class="small-12 large-4 columns"></div>
				</div>
			</td>
		</tr>
	</table>
    <p align="center">
        <button type="submit">Guardar</button>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="reset">Limpiar</button>
    </p>
</fieldset>
</div>




<!--div>
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
						@foreach ($negocios as $negocio)
							<option value="{{$negocio->idNegocio}}">{{$negocio->NombreNegocio}}</option>
						@endforeach
					</select>
				</td>	
			</tr>
			<tr>
				<td><label>Puesto: </label></td>
				<td>
					<select id="puestos">
						@foreach ($combo as $puesto)
								<option value="{{$puesto->idPuesto}}">{{$puesto->NombrePuesto}}</option>
						@endforeach	
					</select>
				</td>	
			</tr>
		</table>
		<button typSe="submit">Guardar</button>
	</form>
</div-->
@stop