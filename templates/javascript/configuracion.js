$(document).ready(function(){
	$("#btnGuardar").click(function(){
		var datos = [];
		$("#configuracion input, #configuracion select").each(function(){
			if ($(this).attr("id") != "btnGuardar"){
				el = {};
				el.nombre = $(this).attr("id");
				el.valor = $(this).val();
				datos.push(el);
			}
			//datos[$(this).attr("id")] = $(this).val();
		});
		
		var obj = new TConfiguracion;
		obj.guardar(datos, {
			after: function(result){
				if (!result.band)
					alert("Ocurrió un error al guardar los datos");
			}
		});
	});
});