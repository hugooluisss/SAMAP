TMapa = function(){
	var self = this;
	var map;
	
	this.setDiv = function(div){
		var options = {
			zoom: 16, 
			center: new google.maps.LatLng(18.2, -66.4), 
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};

		self.map = new google.maps.Map($(div)[0], options);
		self.getUbicacion({
			onSuccessGeolocating: function(posicion){
				self.map.setCenter({lat: posicion.coords.latitude, lng: posicion.coords.longitude});
				self.incluirMarca(posicion.coords.latitude, posicion.coords.longitude, "Posición incial");
			}
		});
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
	
	this.incluirMarca = function(latitud, longitud, titulo){
		var marker = new google.maps.Marker({
			position: {lat: latitud, lng: longitud},
			map: self.map,
			title: titulo
		});
		
		console.log("Marca agregada: " + latitud + ", " + longitud + ", " + titulo);
		
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
};