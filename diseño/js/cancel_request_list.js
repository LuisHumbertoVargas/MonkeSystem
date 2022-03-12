$(document).ready(function(){

	//Consumir servicio de getpromociones

	$.ajax({
		"url" : "http://localhost/CotizApp//inicio/getCancelRequest",
		"dataType" : "json",
		"success"  : function(obj){
			if (obj.resultado) {
				//Llenar tabla

				var tabla = $("#tabla-admins tbody");
				$.each(obj.Request,function(i,p){
					tabla.append('<tr>'+
						'<td class="text-center">'+ p.fecha_soli+'</td>'+
						'<td class="text-center">'+ p.Mail_Client+'</td>'+
						'<td class="text-center">'+ p.Tel_Client+'</td>'+
						'<td class="text-center">'+ p.Mail_Us+'</td>'+
						'<td class="text-center">'+
						'<a href="http://localhost/CotizApp//inicio/modificaSoli/'+p.id_soli+'"><button id="btn-modificar"class="btn text-white" style="background-color:#444242"type="submit"><i class="fas fa-edit text-white text-center"></i></button></a></td>"'+
						'</tr>'
						);
				});
			}
			else{
				alert("No hay solicitudes");
				$( location ).attr( 
					"href","http://localhost/CotizApp//inicio/admin" 
					);
			}
		}
	});

	$("#btn-confirmar-baja-soli").click(function(e){
		$.ajax({
			"url" : base_url+"/inicio/borraSolicitud",
			"type": "post",
			"data": {
				"id_soli" : $(this).attr("data-idSoli")
			},
			"dataType" : "json",
			"success" : function(obj){
				if (obj.resultado) {
					muestra_mensaje("success",obj.mensaje);
					setTimeout(function(){
						location.reload();
					},2000);
				}
				else{
					muestra_mensaje("danger",obj.mensaje);
				}
			}
		});
	});

});


function borra_soli( btn ) {
	//$( "#modal-borrar-nomproducto" ).html( btn.getAttribute( "data-nomproducto" ) );
	$( "#btn-confirmar-baja-soli" ).attr( 
		"data-idsoli", btn.getAttribute( "data-idSoli" ) );
}

function muestra_mensaje(tipo,mensaje){

	switch(tipo){
		case "danger" : aviso = "ERROR"; break;
		case "success" : aviso = "EXITO"; break;
		case "warning" : aviso = "ADVERTENCIA"; break;
		case "info" : aviso = "INFORMACION"; break;
		default : aviso ="AVISO"; break;
	}


	$("#mensaje").html('<div class="alert alert-'+
		tipo +' alert-dismissible fade show" role="alert" style="position:absolute;bottom:20px;width:50%;"><strong>'+
		aviso+':</strong>'+
		mensaje+'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

	setTimeout(function() {
		$("#mensaje").html("");
	}, 2000);

}