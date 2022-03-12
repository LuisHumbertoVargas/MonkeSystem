$(document).ready(function(){

	//Consumir servicio de getpromociones

	$.ajax({
		"url" : "http://localhost/MonkeySystem/inicio/getServInactive",
		"dataType" : "json",
		"success"  : function(obj){
			if (obj.resultado) {
				//Llenar tabla

				var tabla = $("#tabla-admins tbody");
				$.each(obj.Serv,function(i,p){
					tabla.append('<tr>'+
						'<td class="text-center">'+ p.id_producto+'</td>'+
						'<td class="text-center">'+ p.nombre_prod+'</td>'+
						'<td class="text-center">'+ p.descr_prod+'</td>'+
						'<td class="text-center">'+ p.precio_compra+'</td>'+
						'<td class="text-center">'+ p.precio_venta+'</td>'+
						'<td class="text-center">'+ p.id_cat+'</td>'+
						'<td class="text-center"><button class="btn text-white" style="background-color: #33658A" data-toggle="modal" data-target="#modal-activar-serv" data-usuario="'+
						p.nombre_prod+'" data-idServ="'+
						p.id_producto+'" onclick="activar_serv(this)"><i class="fas fa-check"></i></button></td>"'+
						'</tr>'
						);
				});
			}
			else{
				alert("No hay producto inactivos");
				$( location ).attr( 
					"href","http://localhost/MonkeySystem/inicio/catalogoServicio" 
					);
			}
		}
	});

	$("#btn-confirmar-alta-serv").click(function(e){
		$.ajax({
			"url" : "http://localhost/MonkeySystem/inicio/activaServ",
			"type": "post",
			"data": {
				"id_producto" : $(this).attr("data-idServ")
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


function activar_serv( btn ) {
	//$( "#modal-borrar-nomproducto" ).html( btn.getAttribute( "data-nomproducto" ) );
	$( "#btn-confirmar-alta-serv" ).attr( 
		"data-idServ", btn.getAttribute( "data-idServ" ) );
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