$(document).ready(function(){

	$("#btn-agregar-serv").click(function(e)
	{

		$.ajax(
		{

			"url" : base_url + "inicio/nuevaServ",
			"type" : "post",
			"data" : {
				"nombre_prod" : $("#nombre_prod").val(),
				"descr_prod" : $("#descr_prod").val(),
				"cantidad" : $("#cantidad").val(),
				"precio_compra" : $("#precio_compra").val(),
				"precio_venta" : $("#precio_venta").val(),
				"id_cat" : $("#id_cat").val(),
				"id_marc" : $("#id_marc").val(),
			},
			"dataType" : "json",
			complete : function(json){
				
				if(json.responseJSON.estado == true){
					alert(json.responseJSON.mensaje);
					window.location.replace(base_url + "inicio/agregarServ");
				}else{
					alert("Algo falló");
				}
				
			}


		});

	});
});