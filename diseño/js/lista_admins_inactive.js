$(document).ready(function(){

	//Consumir servicio de getpromociones

	$.ajax({
		"url" : "http://localhost/MonkeySystem/inicio/getUserDeleted",
		"dataType" : "json",
		"success"  : function(obj){
			if (obj.resultado) {
				//Llenar tabla

				var tabla = $("#tabla-admins tbody");
				$.each(obj.Users,function(i,p){
					tabla.append('<tr>'+
						'<td class="text-center">'+ p.nombre+'</td>'+
						'<td class="text-center">'+ p.apellidos+'</td>'+
						'<td class="text-center">'+ p.telefono+'</td>'+
						'<td class="text-center">'+ p.correo+'</td>'+
						'<td class="text-center"><button class="btn text-white" style="background-color: #33658A" data-toggle="modal" data-target="#modal-activar" data-usuario="'+
						p.nombre+'" data-MailUs="'+
						p.correo+'" onclick="activar_admin(this)"><i class="fas fa-check"></i></button></td>"'+
						'</tr>'
						);
				});
			}
			else{
				alert("No hay usuarios inactivos");
				$( location ).attr( 
					"href","http://localhost/MonkeySystem/inicio/modificacion/" 
					);
			}
		}
	});

	$("#btn-confirmar-alta").click(function(e){
		$.ajax({
			"url" : base_url+"/inicio/activaUsuario",
			"type": "post",
			"data": {
				"correo" : $(this).attr("data-MailUs")
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


function activar_admin( btn ) {
	//$( "#modal-borrar-nomproducto" ).html( btn.getAttribute( "data-nomproducto" ) );
	$( "#btn-confirmar-alta" ).attr( 
		"data-MailUs", btn.getAttribute( "data-MailUs" ) );
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