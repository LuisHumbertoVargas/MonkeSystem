$(document).ready(function(){

	$("#btn-registro").click(function(e)
	{

		$.ajax(
		{

			"url" : base_url + "inicio/registroAdm",
			"type" : "post",
			"data" : {
				"correo" : $("#correo").val(),
				"password" : $("#password").val(),
				"nombre" : $("#nombre").val(),
				"apellidos" : $("#apellidos").val(),
				"telefono" : $("#telefono").val()
			},
			"dataType" : "json",
			complete : function(json){
				if(json.responseJSON.estado == true){
					alert(json.responseJSON.mensaje);
					window.location.replace(base_url + "inicio/registroUsu");
				}else{
					alert("Algo falló");
				}
			}


		});

	});
});