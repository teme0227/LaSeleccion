function iniciaSesion(usuario, contra){
	 $.ajax({
            url: 'loginUsuario',
            data: {
                "user": usuario,
                "pass": contra
            },
            type: "post",

            beforeSend: function(msg) {
                waitMessage("Cargando...");
            },
            success: function(res) {

                $.unblockUI();

                var cad = "";
                if (!jQuery.isEmptyObject(res)) {

                    window.location = "dashboard"
                    // alert(res);
                } else {
                    waitMessage("Datos Invalidos");
                    setTimeout($.unblockUI, 2000);
                }

            },
            error: function(err) {
                $.unblockUI();
                waitMessage("Error");
                setTimeout($.unblockUI, 2000);
            }

        });
}