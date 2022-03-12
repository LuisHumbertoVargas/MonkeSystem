$(document).ready(function(){

	$.ajax({
		"url" : "http://localhost/CotizApp/inicio/getNewRequest",
		"dataType" : "json",
		"success"  : function(obj){
			if (obj.resultado) {
				//Llenar tabla
				var tabla = $("#tabla-new-request tbody");
				$.each(obj.Request,function(i,p){
					tabla.append('<tr>'+
						'<td class="text-center">'+ p.fecha_soli+'</td>'+
						'<td class="text-center">'+ p.Mail_Client+'</td>'+
						'<td class="text-center">'+
						'<a href="http://localhost/CotizApp/inicio/modificaSoli/'+p.id_soli+'"><button id="btn-modificar"class="btn text-white" style="background-color:#444242"type="submit"><i class="fas fa-edit text-white text-center"></i></button></a></td>"'+
						'</tr>'
						);
				});
			}
			else{
				$("container").hide();
			}
		}
	});

	$.ajax({
		"url":"http://localhost/CotizApp/inicio/getProcessRequest",
		"dataType" : "json",
		"success"  : function(obj){
			if (obj.resultado) {
				//Llenar tabla
				var tabla = $("#tabla-process-request tbody");
				$.each(obj.Request,function(i,p){
					tabla.append('<tr>'+
						'<td class="text-center">'+ p.fecha_soli+'</td>'+
						'<td class="text-center">'+ p.Mail_Client+'</td>'+
						'<td class="text-center">'+
						'<a href="http://localhost/CotizApp/inicio/modificaSoli/'+p.id_soli+'"><button id="btn-modificar"class="btn text-white" style="background-color:#444242"type="submit"><i class="fas fa-edit text-white text-center"></i></button></a></td>"'+
						'</tr>'
						);
				});
			}
			else{
				$("containers").hide();
			}
		}
	});

	$.ajax({
		"url" : "http://localhost/CotizApp/inicio/getCompleteRequest",
		"dataType" : "json",
		"success"  : function(obj){
			if (obj.resultado) {
				//Llenar tabla
				var tabla = $("#tabla-complete-request tbody");
				$.each(obj.Request,function(i,p){
					tabla.append('<tr>'+
						'<td class="text-center">'+ p.fecha_soli+'</td>'+
						'<td class="text-center">'+ p.Mail_Client+'</td>'+
						'<td class="text-center">'+
						'<a href="http://localhost/CotizApp/inicio/mostrarSoli/'+p.id_soli+'"><button id="btn-modificar"class="btn text-white" style="background-color:#33658A "type="submit"><i class="fas fa-eye text-white text-center"></i></button></a></td>"'+
						'</tr>'
						);
				});
			}
			else{
				$("container1").hide();
			}
		}
	});

	$.ajax({
		"url" : "http://localhost/CotizApp/inicio/getCancelRequest",
		"dataType" : "json",
		"success"  : function(obj){
			if (obj.resultado) {
				//Llenar tabla
				var tabla = $("#tabla-cancel-request tbody");
				$.each(obj.Request,function(i,p){
					tabla.append('<tr>'+
						'<td class="text-center">'+ p.fecha_soli+'</td>'+
						'<td class="text-center">'+ p.Mail_Client+'</td>'+
						'<td class="text-center">'+
						'<a href="http://localhost/CotizApp/inicio/modificaSoli/'+p.id_soli+'"><button id="btn-modificar"class="btn text-white" style="background-color:#444242"type="submit"><i class="fas fa-edit text-white text-center"></i></button></a></td>"'+
						'</tr>'
						);
				});
			}
			else{
				$("containers2").hide();
			}
		}
	});
	
});