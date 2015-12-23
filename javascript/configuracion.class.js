TConfiguracion = function(){
	var self = this;
	
	this.guardar = function(data, fn){
		if (fn.before !== undefined) fn.before();
		
		var datos = "{";
		for (x = 0 ; x < data.length ; x++)
			datos += '"' + data[x].nombre + '": "' + data[x].valor + '", ';
		datos += '"listo": 0}';
		$.post('?mod=cconfiguracion&action=guardar', {data: datos}, function(data){
			if (fn.after !== undefined) fn.after(data);
			
		}, "json");
	}
}