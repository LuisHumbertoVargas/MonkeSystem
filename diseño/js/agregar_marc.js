$(document).ready(function(){

	$("#btn-agregar-marc").click(function(e)
	{

		$.ajax(
		{

			"url" : base_url + "inicio/nuevaMarc",
			"type" : "post",
			"data" : {
				"nombre_marc" : $("#nombre_marc").val(),
				"descr_marc" : $("#descr_marc").val(),
			},
			"dataType" : "json",
			complete : function(json){
				if(json.responseJSON.estado == true){
					alert(json.responseJSON.mensaje);
					window.location.replace(base_url + "inicio/agregarMarc");
				}else{
					alert("Algo falló");
				}
			}


		});

	});
});