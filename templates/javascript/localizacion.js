$(document).ready(function(){
	var mapa = new TMapa;
	mapa.setDiv("#dvMapa");


	$("#btnEnviarUbicacion").click(function(){
		mapa.getUbicacion({
			onSuccessGeolocating: function(posicion){
				mapa.map.setCenter({lat: posicion.coords.latitude, lng: posicion.coords.longitude});
				var date = new Date;
				mapa.incluirMarca(posicion.coords.latitude, posicion.coords.longitude, "Hora " + date.getFullYear() + "-" + (date.getMonth() + 1) + "-" + date.getDate() + " " + date.getTime());
			}
		});
	});
});