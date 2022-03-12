$(document).ready(function(){

	$.ajax(
	{

		"url" : base_url + "inicio/getTypeServ",
		"dataType" : "json",
		"success"  : function(obj){
			if (obj.resultado) {

				$.each(obj.TypeServ,function(i,p){
					$('#id_cat').append(''+
						'<option value="'+p.id_cat+'">'+p.nombre_cat+'</option>'+
						'');
				});
			}
		}


	});


});