<h1>
	Empleados
<h1>

<ul>
	@foreach($empleados as $empleado)
	<li>
		{{$empleado->Nombre.' '.$empleado->AppPaterno }}
	</li>
	@endforeach
</ul>
	