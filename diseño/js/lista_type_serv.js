$(document).ready(function(){

	//Consumir servicio de getpromociones

	$.ajax({
		"url" : "http://localhost/MonkeySystem/inicio/getTypeServ",
		"dataType" : "json",
		"success"  : function(obj){
			if (obj.resultado) {
				//Llenar tabla

				var tabla = $("#tabla-admins tbody");
				$.each(obj.TypeServ,function(i,p){
					tabla.append('<tr>'+
						'<td class="text-center">'+ p.id_cat+'</td>'+
						'<td class="text-center">'+ p.nombre_cat+'</td>'+
						'<td class="text-center">'+ p.descr_cat+'</td>'+
						'<td class="text-center"><button class="btn text-white" style="background-color: #A01127" data-toggle="modal" data-target="#modal-borrar" data-usuario="'+
						p.nombre_cat+'" data-idCat="'+
						p.id_cat+'" onclick="borra_cat(this)"><i class="fas fa-trash"></i></button>&nbsp;&nbsp;<a href="http://localhost/MonkeySystem/inicio/modificaCat/'+p.id_cat+'"><button id="btn-modificar"class="btn text-white" style="background-color:#444242"type="submit"><i class="fas fa-edit text-white text-center"></i></button></a></td>"'+
						'</tr>'
						);
				});
			}
			else{
				alert("No hay categorias");
				$( location ).attr( 
					"href","http://localhost/MonkeySystem/inicio/admin" 
					);
			}
		}
	});

	$("#btn-confirmar-baja-cat").click(function(e){
		$.ajax({
			"url" : base_url+"/inicio/borraCategoria",
			"type": "post",
			"data": {
				"id_cat" : $(this).attr("data-idCat")
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


function borra_cat( btn ) {
	//$( "#modal-borrar-nomproducto" ).html( btn.getAttribute( "data-nomproducto" ) );
	$( "#btn-confirmar-baja-cat" ).attr( 
		"data-idCat", btn.getAttribute( "data-idCat" ) );
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