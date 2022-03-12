$(document).ready(function(){
	var base_url = "http://localhost/CotizApp/";
	$("#btn-cotizar").click(function(e)
	{

		$.ajax(
		{

			"url" : base_url + "inicio/nuevaSolicitud",
			"type" : "post",
			"data" : {
				"Nom_Client" : $("#Nom_Client").val(),
				"Ap_Client" : $("#Ap_Client").val(),
				"Mail_Client" : $("#Mail_Client").val(),
				"Tel_Client" : $("#Tel_Client").val(),
				"hrs_extras" : $("#hrs_extras").val(),
				"cant_inv" : $("#cant_inv").val(),
			},
			"dataType" : "json",
			complete : function(json){
				if(json.responseJSON.estado == true){
					alert("Se está procesando la solicitud, asegurese de que su selección de servicios es correcta.");
				}else{
					alert("Algo falló, en los datos de contacto");
				}
			}


		});

		var arrayServ = [];
		var arrayCant = [];

		$('.checkbox1:checked').each(function(){
			//alert(this.checked ? "SI" : "NO");
			let id_serv = $(this).attr("id");
			let cant_serv = $("#"+"cant_serv"+$(this).attr("id")).val();
			//alert(id_serv);
			//alert(cant_serv);
			arrayServ.push(id_serv);
			arrayCant.push(cant_serv);
		});

		console.log(arrayServ);
		console.log(arrayCant);

		$.ajax(
		{

			"url" : base_url + "inicio/nuevaDetSolicitud",
			"type" : "post",
			"data" : {
				"Mail_Client" : $("#Mail_Client").val(),
				"id_serv" : JSON.stringify(arrayServ),
				"cant_serv" : JSON.stringify(arrayCant),
			},
			"dataType" : "json",
			complete : function(json){
				if(json.responseJSON.estado == true){
					alert("su solicitud de evento fue cotizada.");
					$( location ).attr( 
						"href","http://localhost/CotizApp/inicio/tuSolicitud/" 
						);
				}else{
					alert("Algo falló, en los servicios elegidos de su evento");
					window.location.replace(base_url + "inicio/");
				}
			}


		});

	});

});