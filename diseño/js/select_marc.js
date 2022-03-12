$(document).ready(function(){

	$.ajax(
	{

		"url" : base_url + "inicio/getMarc",
		"dataType" : "json",
		"success"  : function(obj){
			if (obj.resultado) {

				$.each(obj.Marc,function(i,p){
					$('#id_marc').append(''+
						'<option value="'+p.id_marc+'">'+p.nombre_marc+'</option>'+
						'');
				});
			}
		}


	});


});