@extends('layouts.laSeleccionLayo')

@section('jsbefore')
	<link href="themes/black-tie/jquery-ui-1.10.4.custom.css" rel="stylesheet" type="text/css" />
	<link href="scripts/jtable/themes/metro/darkorange/jtable.css" rel="stylesheet" type="text/css" />
    <script src="scripts/jtable/jquery.jtable.js" type="text/javascript"></script>
@stop

@section('contentIndex')

<div id="PeopleTableContainer" style="width: 100%;"></div>
<script type="text/javascript">

		$(document).ready(function () 
		{
		    //Prepare jTable
			$('#PeopleTableContainer').jtable({
				title: 'Tabla de Productos',
				paging: true,
				sorting: true,
				actions: {
					listAction: 'getData/list',
					createAction: 'getData/create',
					updateAction: 'getData/update',
					deleteAction: 'getData/delete'
				},
				fields: {
					id: {
						key: true,
						create: false,
						edit: false,
						list: false
					},
					Nombre: {
						title: 'Nombre',
						width: '30%'
					},
					Precio: {
						title: 'Precio',
						width: '30%'
					},
					Activo: {
						title: 'Activo',
						width: '30%'
					}
				}
			});

			//Load person list from server
			$('#PeopleTableContainer').jtable('load');

		});

	</script>
@stop