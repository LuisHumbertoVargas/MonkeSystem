$(document).ready(function(){

	//Consumir servicio de getpromociones

	$.ajax({
		"url" : "http://localhost/CotizApp/inicio/getServ",
		"dataType" : "json",
		"success"  : function(obj){
			if (obj.resultado) {
				//Llenar tabla
				var tabla = $("#tabla-admins tbody");
				$.each(obj.Serv,function(i,p){
					tabla.append('<tr>'+
						
						'<td class="text-center"><a type="button" text-white" data-toggle="modal" data-target="#modal-ver" data-idserv="'+p.id_serv+'" onclick="getServEsp(this)">'+ p.nombre_serv+' <i class="fas fa-eye" style="color: #33658A;"></i></a></td>'+
						'<td class="text-center"> '+ p.nombre_cat+'</td>'+
						'<td class="text-center"><input type="number" value="0" max="100" min="0" id="cant_serv'+p.id_serv+'" name="cant_serv"></td>'+
						'<td class="text-center"><input class="checkbox1" type="checkbox" id="'+p.id_serv+'" name="id_serv" value="'+ p.id_serv+'"></td>'+
						'</tr>'
						);
				});
			}
			else{
				alert("No hay servicios disponibles, vuelva mas tarde");
			}
		}
	});



});

function getServEsp(a){
	obtenerServicio(a.getAttribute("data-idserv"));
}

function obtenerServicio(idServ){
	var data = {
		"id_serv" : idServ
	}

	

	$.ajax({
		url: "http://localhost/CotizApp/inicio/obtenerServicio",
		type: 'post',
		dataType: 'json',
		data: data,
		async:false,
		success : function(response){
			if(response.resultado == true){

				$("#nombre_serv").html(response.Serv.nombre_serv);
				$("#descr_serv").html(response.Serv.descr_serv);
				$("#nombre_cat").html(response.Serv.nombre_cat);
				$("#descr_cat").html(response.Serv.descr_cat);
				
			}
		}
	});

	
	


}
