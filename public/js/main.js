$(document).ready( function (){
	
	//$("#fecNac").datepicker();
	
	$(document).foundation();

	$("#loginPOST").click(function(){
		iniciaSesion($("#usuario").val(), $("#contrasena").val());
		return false;
	});

	

});

