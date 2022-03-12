//
//$(document).ready(function(){
//	
//	$("#btn-entrar").click(function(e)
//	{
//
//		$.ajax(
//		{
//
//			"url" : "http://localhost/MonkeySystem/inicio/verificacorreo",
//			"type" : "post",
//			"data" : {
//				"correo" : $("#correo").val(),
//				"password": $("#password").val()
//			},
//			"dataType" : "json",
//			"success" : function(obj) 
//			{
//
//				if (obj.resultado) 
//				{
//						/*alert(base_url + "inicio/login/" 
//						+ $( "#correo" ).val());*/
//
//						$( location ).attr( 
//							"href","http://localhost/MonkeySystem/inicio/login/" 
//							+ $( "#correo" ).val() );
//
//					}
//					else
//					{
//						alert("Accesso Denegado");
//						//$(location).attr("href", base_url + "inicio/principal");
//
//					}
//
//				}
//
//			});
//
//	});
//});

$(document).ready(function(){


	$("#btn-entrar").click(function(e)
	{
		$.ajax(
		{

			"url" :  "http://localhost/MonkeySystem/inicio/iniciarSesion",
			"type" : "post",
			"data" : {
				"correo" : $("#correo").val(),
				"password" : $("#password").val(),

			},
			"dataType" : "json",
			complete : function(json){
				if(json.responseJSON.resultado != null)
				{
					if (json.responseJSON.mensaje == "Usuario Chido") 
					{
						$( location ).attr( 
							"href","http://localhost/MonkeySystem/inicio/login/" 
							+ $( "#correo" ).val() );
					}
					else
					{
						alert(json.responseJSON.mensaje); 
					}
				}
				else
				{
					alert("Algo falló");
				}
			}

		});
	});

});