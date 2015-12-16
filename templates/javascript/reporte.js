$(document).ready(function(){
	$("#txtFecha").inputmask("9999-99-99");
	getLista($("#txtFecha").val(), $("#lstUsuario").val());
	
	$("#btnBuscar").click(function(){
		getLista($("#txtFecha").val(), $("#lstUsuario").val());
	});
	
	function getLista(fecha, usuario){
		$("#dvLista").html("Actualizando...");
		$.get("?mod=posicionesPorDia&fecha=" + fecha + "&usuario=" + usuario, function( data ) {
			$("#dvLista").html(data);
			
			$("[action=ubicar]").click(function(){
				$("#modalPosicion").modal();
				var el = $(this);
				$("img#mapa").attr("src", "https://maps.googleapis.com/maps/api/staticmap?center=" + el.attr("latitud") + "," + el.attr("longitud") + "&zoom=16&size=600x400&format=JPG&markers=color:green|label:M|" + el.attr("latitud") + "," + el.attr("longitud") + "");
				$("img#mapa").attr("width", "100%");
				$("img#mapa").attr("height", "100%");
				
				$("#lblFecha").html(el.attr("fecha"));
				$("#lblLatitud").html(el.attr("latitud"));
				$("#lblLongitud").html(el.attr("longitud"));
				$("#modalPosicion #idReporte").val(el.attr("reporte"));
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
	
	/*Modal*/
	
	$("#enviarPorEmail").click(function(){
		$.get("?mod=gw_reporte&action=reportarViaEMail&reporte=" + $("#modalPosicion #idReporte").val(), function( data ) {
			alert(data.band);
		}, "json");
		
		alert("El correo electrónico se está enviando, puedes seguir utilizando la aplicación");
	});
});