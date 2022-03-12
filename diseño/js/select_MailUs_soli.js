$(document).ready(function(){

	$.ajax(
	{

		"url" : base_url + "inicio/getUser",
		"dataType" : "json",
		"success"  : function(obj){
			if (obj.resultado) {

				$.each(obj.Users,function(i,p){
					$('#correo').append(''+
						'<option value="'+p.correo+'">'+p.nombre+' '+p.apellidos+'</option>'+
						'');
				});
			}
		}


	});


});