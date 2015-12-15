TReporte = function(){
	var self = this;
	
	this.add = function(id, latitud, longitud, direccion, comentario, fn){
		if (fn.before !== undefined) fn.before();
		
		$.post('?mod=gw_reporte&action=add', {
				"id": id,
				"latitud": latitud, 
				"longitud": longitud,
				"direccion": direccion,
				"comentario": comentario
			}, function(data){
				if (data.band == 'false')
					console.log(data.mensaje);
					
				if (fn.after !== undefined)
					fn.after(data);
			}, "json");
	};
	
	this.del = function(id, fn){
		$.post('?mod=gw_reporte&action=del', {
			"id": id,
		}, function(data){
			if (fn.after != undefined)
				fn.after(data);
			if (data.band == 'false'){
				alert("Ocurrió un error al eliminar el reporte");
			}
		}, "json");
	};
};