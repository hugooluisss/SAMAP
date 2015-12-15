TMapa = function(){
	var self = this;
	var map;
	var geocoder = new google.maps.Geocoder;
	var posicionActual = new google.maps.Marker();
	var marcas;
	
	this.setDiv = function(div){
		var options = {
			zoom: 16, 
			center: new google.maps.LatLng(18.2, -66.4), 
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		
		self.map = new google.maps.Map($(div)[0], options);
		self.marcas = new Array();
	};
	
	this.getUbicacion = function(fn){
		if (fn.onSuccessGeolocating === undefined)
			fn.onSuccessGeolocating = self.onSuccessGeolocating;
		
		if (fn.onErrorGeolocating === undefined)
			fn.onErrorGeolocating = self.onErrorGeolocating;
			
		if(navigator.geolocation){
			navigator.geolocation.getCurrentPosition(fn.onSuccessGeolocating, self.onErrorGeolocating, {
				enableHighAccuracy: true,
				maximumAge:         5000,
				timeout:            10000
			});
		}
	};
	
	this.incluirMarca = function(latitud, longitud, parametros){
		if (parametros.icono === undefined || parametros.icono == "")
			parametros.icono = null;
		
		if (parametros.centrar === undefined || parametros.icono == "")
			parametros.centrar = true;
			
		var marker = new google.maps.Marker({
			position: {lat: parseFloat(latitud), lng: parseFloat(longitud)},
			map: self.map,
			icon: {
		    	path: parametros.icono,
		    	scale: 10
		    },
			animation: google.maps.Animation.DROP
		});
		
		if (parametros.centrar)
			self.map.setCenter({lat: parseFloat(latitud), lng: parseFloat(longitud)});
		
		console.log("Marca agregada: " + latitud + ", " + longitud);
		return marker;
	}
	
	this.onSuccessGeolocating = function(posicion){
		console.log("Geolocalización Ok: " + posicion);
		
	};
	
	this.onErrorGeolocating = function(error){
		switch(error.code){
			case error.PERMISSION_DENIED:
				console.log('ERROR: User denied access to track physical position!');
			break;
			case error.POSITION_UNAVAILABLE:
				console.log("ERROR: There is a problem getting the position of the device!");
			break;
			case error.TIMEOUT:
				console.log("ERROR: The application timed out trying to get the position of the device!");
			break;
			default:
				console.log("ERROR: Unknown problem!");
			break;
		}
	};
	
	this.getDireccion = function(latitud, longitud, fn){
		if (self.geocoder === undefined)
			self.geocoder = new google.maps.Geocoder;
		
		self.geocoder.geocode({'location': {lat: latitud, lng: longitud}}, function(results, status){
			if (status === google.maps.GeocoderStatus.OK) {
				console.log("Dirección encontrada: " + results[1].formatted_address);
				if (fn.ok !== undefined) fn.ok(results);
			}else
				if (fn.error !== undefined) fn.error();
		});
	};
};