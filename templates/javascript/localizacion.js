$(document).ready(function(){
	var mapa = new TMapa;
	mapa.setDiv("#dvMapa");
	
	getLista();
	
	function obtenerUbicacion(){
		mapa.getUbicacion({
			onSuccessGeolocating: function(posicion){
				//mapa.map.setCenter({lat: posicion.coords.latitude, lng: posicion.coords.longitude});
				if (mapa.posicionActual === undefined)
					mapa.posicionActual = mapa.incluirMarca(posicion.coords.latitude, posicion.coords.longitude, {
						icono: ""
					});
				else
					mapa.posicionActual.setPosition(new google.maps.LatLng(posicion.coords.latitude, posicion.coords.longitude));
				console.log("Localizando");
			}
		});
			
		setTimeout(obtenerUbicacion, 3000);
	}
	
	obtenerUbicacion();
	
	$("#btnEnviarUbicacion").click(function(){
		$("#btnEnviarUbicacion").prop("disabled", true);
		
		mapa.getUbicacion({
			onSuccessGeolocating: function(posicion){
				mapa.map.setCenter({lat: posicion.coords.latitude, lng: posicion.coords.longitude});
				var date = new Date;
				$("#btnEnviarUbicacion").prop("disabled", false);
				$("#modalComentario #latitud").html(posicion.coords.latitude);
				$("#modalComentario #longitud").html(posicion.coords.longitude);
				$("#modalComentario #guardar").prop("disabled", true);
				mapa.getDireccion(posicion.coords.latitude, posicion.coords.longitude, {
					ok: function(results){
						$("#modalComentario #ubicacion").html(results[1].formatted_address);
						$("#modalComentario #guardar").prop("disabled", false);
						$("#modalComentario #txtComentario").val("");
					},
					error: function(){
						alert("No se pudo determinar su dirección");
					}
				});
				$("#modalComentario").modal();
			}
		});
	});
	
	$("#modalComentario #guardar").click(function(){
		var obj = new TReporte;
		
		obj.add('', $("#modalComentario #latitud").html(), $("#modalComentario #longitud").html(), $("#modalComentario #ubicacion").html(), $("#modalComentario #txtComentario").val(), {
			after: function(data){
				if (data.band){
					$("#modalComentario").modal("hide");
					getLista();
				}else
					alert("Ocurrió un error al guardar la dirección... verifique su conexión a internet");
			}
		});
	});
	
	function getLista(){
		$("#dvLista").html("Actualizando...");
		$.get("?mod=listaReportes", function( data ) {
			$("#dvLista").html(data);
			
			$("[action=eliminar]").click(function(){
				if(confirm("¿Seguro?")){
					var obj = new TReporte;
					obj.del($(this).attr("reporte"), {
						after: function(data){
							getLista();
						}
					});
				}
			});
			
			$("[action=ubicar]").click(function(){
				var el = $(this);
				if (mapa.marcas[el.reporte] == undefined){
					var marca = mapa.incluirMarca(el.attr("latitud"), el.attr("longitud"), {
						icono: google.maps.SymbolPath.BACKWARD_CLOSED_ARROW,
						centrar: true
					});
					
					mapa.marcas[el.reporte] = marca;
				}else
					mapa.map.setCenter({lat: parseFloat(el.attr("latitud")), lng: parseFloat(el.attr("longitud"))});
			});
			
			$("#tblReportes").DataTable({
				"responsive": true,
				"language": espaniol,
				"paging": true,
				"lengthChange": false,
				"ordering": true,
				"order": [
					[0, "desc"]
				],
				"info": true,
				"autoWidth": false
			});
		});
	}
});