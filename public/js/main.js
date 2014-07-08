$(document).ready( function (){
	
	$(document).foundation();

	$("#loginPOST").click(function(){
		iniciaSesion($("#usuario").val(), $("#contrasena").val());
		return false;
	});


});

