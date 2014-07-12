
function obtieneNegocios(){
	
	$.ajax({
		async: false,
		type: "GET",
		url: '/laseleccionHamburguesas/public/getNegocios',
		dataType: 'json',
		success: function(info){
			var i = 0;
			//alert(info);
			for(i in info){
				//alert('b');
				$("#negocios").append("<option value='"+info[i].idNegocio+"'>"+info[i].NombreNegocio+"</option>");
			}
		}
	});
}

function obtienePuestos(){
	
	$.ajax({
		async: false,
		type: "GET",
		url: '/laseleccionHamburguesas/public/getPuestos',
		dataType: 'json',
		success: function(info){
			var i = 0;
			//alert(info);
			for(i in info){
				//alert('b');
				$("#puestos").append("<option value='"+info[i].idPuesto+"'>"+info[i].NombrePuesto+"</option>");
			}
		}
	});
}