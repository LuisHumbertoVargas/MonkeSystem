$(document).ready(function(){

	$("#btn-agregar-cat").click(function(e)
	{

		$.ajax(
		{

			"url" : base_url + "inicio/nuevaCat",
			"type" : "post",
			"data" : {
				"nombre_cat" : $("#nombre_cat").val(),
				"descr_cat" : $("#descr_cat").val(),
			},
			"dataType" : "json",
			complete : function(json){
				if(json.responseJSON.estado == true){
					alert(json.responseJSON.mensaje);
					window.location.replace(base_url + "inicio/agregarCat");
				}else{
					alert("Algo falló");
				}
			}


		});

	});
});