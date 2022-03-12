$(document).ready(function(){

	//Consumir servicio de getpromociones

	$.ajax({
		"url" : "http://localhost/MonkeySystem/inicio/getServ",
		"dataType" : "json",
		"success"  : function(obj){
			if (obj.resultado) {
				//Llenar tabla
				var tabla = $("#tabla-admins tbody");
				$.each(obj.Serv,function(i,p){
					tabla.append('<tr>'+
						'<td class="text-center">'+ p.id_producto+'</td>'+
						'<td class="text-center">'+ p.nombre_prod+'</td>'+
						'<td class="text-center">'+ p.cantidad+'</td>'+
						'<td class="text-center">'+ p.precio_compra+'</td>'+
						'<td class="text-center">'+ p.precio_venta+'</td>'+
						'<td class="text-center">'+ p.nombre_marc+'</td>'+
						'<td class="text-center">'+ p.nombre_cat+'</td>'+
						'<td class="text-center"><button class="btn text-white" style="background-color: #A01127" data-toggle="modal" data-target="#modal-borrar" data-usuario="'+
						p.nombre_prod+'" data-idServ="'+
						p.id_producto+'" onclick="borra_serv(this)"><i class="fas fa-trash"></i></button><a href="http://localhost/MonkeySystem/inicio/modificaServ/'+p.id_producto+'"><button id="btn-modificar"class="btn text-white" style="background-color:#444242"type="submit"><i class="fas fa-edit text-white text-center"></i></button></a></td>"'+
						'</tr>'
						);
				});
			}
			else{
				alert("No hay servicios en la base de datos");
				$( location ).attr( 
					"href","http://localhost/MonkeySystem/inicio/admin" 
					);
			}
		}
	});

	$("#btn-confirmar-baja-serv").click(function(e){
		$.ajax({
			"url" : base_url+"/inicio/borraServ",
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


function borra_serv( btn ) {
	//$( "#modal-borrar-nomproducto" ).html( btn.getAttribute( "data-nomproducto" ) );
	$( "#btn-confirmar-baja-serv" ).attr( 
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