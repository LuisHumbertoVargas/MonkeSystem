$(document).ready(function(){

	//Consumir servicio de getpromociones

	$.ajax({
		"url" : "http://localhost/MonkeySystem/inicio/getMarcInactive",
		"dataType" : "json",
		"success"  : function(obj){
			if (obj.resultado) {
				//Llenar tabla

				var tabla = $("#tabla-admins tbody");
				$.each(obj.Marc,function(i,p){
					tabla.append('<tr>'+
						'<td class="text-center">'+ p.id_marc+'</td>'+
						'<td class="text-center">'+ p.nombre_marc+'</td>'+
						'<td class="text-center">'+ p.descr_marc+'</td>'+
						'<td class="text-center"><button class="btn text-white" style="background-color: #33658A" data-toggle="modal" data-target="#modal-activar-cmarca" data-usuario="'+
						p.nombre_marc+'" data-idMarc="'+
						p.id_marc+'" onclick="activar_cat(this)"><i class="fas fa-check"></i></button></td>"'+
						'</tr>'
						);
				});
			}
			else{
				alert("No hay cmarcas inactivas");
				$( location ).attr( 
					"href","http://localhost/MonkeySystem/inicio/marcas/" 
					);
			}
		}
	});

	$("#btn-confirmar-alta-marc").click(function(e){
		$.ajax({
			"url" : base_url+"/inicio/activaMarca",
			"type": "post",
			"data": {
				"id_marc" : $(this).attr("data-idMarc")
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


function activar_cat( btn ) {
	//$( "#modal-borrar-nomproducto" ).html( btn.getAttribute( "data-nomproducto" ) );
	$( "#btn-confirmar-alta-cat" ).attr( 
		"data-idMarc", btn.getAttribute( "data-idMarc" ) );
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