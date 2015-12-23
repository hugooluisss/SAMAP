$(document).ready(function(){
	var mapa = new TMapa;
	mapa.setDiv("#dvMapa");
	
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
	}
	
	obtenerUbicacion();
	
	mapa.getUbicacion({
		onSuccessGeolocating: function(posicion){
			mapa.map.setCenter({lat: posicion.coords.latitude, lng: posicion.coords.longitude});
			mapa.getDireccion(posicion.coords.latitude, posicion.coords.longitude, {
				ok: function(results){
					var obj = new TReporte;
				
					obj.add($("#consultado").val(), posicion.coords.latitude, posicion.coords.longitude, results[1].formatted_address, "Reporte a solicitud de administrador", "", "", {
						after: function(data){
							if (data.band){
								alert("Tus datos fueron enviados con éxito... gracias");
								
								$.get("?mod=gw_reporte&action=reportarViaEMail&reporte=" + data.id + "&usuario=" + $("#consultador").val(), function( data ) {
									console.log("Email " + data.band);
								}, "json");
							}else
								alert("Ocurrió un error al guardar la dirección... verifique su conexión a internet");
						}
					});
				}
			});
		}
	});
});