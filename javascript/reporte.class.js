TReporte = function(){
	var self = this;
	
	this.add = function(usuario, latitud, longitud, direccion, campo1, campo2, campo3, fn){
		if (fn.before !== undefined) fn.before();
		
		$.post('?mod=gw_reporte&action=add', {
				"usuario": usuario,
				"latitud": latitud, 
				"longitud": longitud,
				"direccion": direccion,
				"campo1": campo1,
				"campo2": campo2,
				"campo3": campo3
			}, function(data){
				if (data.band == 'false')
					console.log(data.mensaje);
					
				if (fn.after !== undefined)
					fn.after(data);
			}, "json");
	};
	
	this.addPosicion = function(latitud, longitud, direccion, fn){
		if (fn.before !== undefined) fn.before();
		
		$.post('?mod=gw_reporte&action=getUbicacion', {
				"latitud": latitud, 
				"longitud": longitud,
				"direccion": direccion
			}, function(data){
				if (data.band == 'false')
					console.log(data.mensaje);
					
				if (fn.after !== undefined)
					fn.after(data);
			}, "json");
	}
	
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