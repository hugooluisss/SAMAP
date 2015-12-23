$(document).ready(function(){
	getLista();
	
	$("#panelTabs li a[href=#add]").click(function(){
		$("#frmAdd").get(0).reset();
		$("#id").val("");
		$("form:not(.filter) :input:visible:enabled:first").focus();
	});
	
	$("#btnReset").click(function(){
		$('#panelTabs a[href="#listas"]').tab('show');
	});
	
	$("#frmAdd").validate({
		debug: true,
		rules: {
			txtEmail: "required",
			txtPass: "required"
		},
		wrapper: 'span', 
		messages: {
			txtEmail: "Este campo es necesario",
			txtPass: "Este campo es necesario"
		},
		submitHandler: function(form){
			if ($("#selTipo").val() == 3 && $("#txtCedula").val() == ''){ // hay que validar que tenga minimamente el numero de cedula
				alert("indica el número de cédula del doctor");
			}else{
				var obj = new TUsuario;
				obj.add(
					$("#id").val(), 
					$("#txtNombre").val(), 
					$("#txtApp").val(),
					$("#txtApm").val(),
					$("#txtEmail").val(),
					$("#txtPass").val(),
					$("#selTipo").val(),
					$("#txtCelular").val(),
					{
						after: function(datos){
							if (datos.band){
								getLista();
								$("#frmAdd").get(0).reset();
								$('#panelTabs a[href="#listas"]').tab('show');
							}else{
								alert("Upps... " + datos.mensaje);
							}
						}
					}
				);
			}
        }

    });
		
	function getLista(){
		$.get("?mod=listaUsuarios", function( data ) {
			$("#dvLista").html(data);
			
			$("[action=eliminar]").click(function(){
				if(confirm("¿Seguro?")){
					var obj = new TUsuario;
					obj.del($(this).attr("usuario"), {
						after: function(data){
							getLista();
						}
					});
				}
			});
			
			$("[action=modificar]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				
				$("#id").val(el.idUsuario);
				$("#txtNombre").val(el.nombre);
				$("#txtApp").val(el.app);
				$("#txtApm").val(el.apm);
				$("#txtEmail").val(el.email);
				$("#txtPass").val(el.pass);
				$("#selTipo").val(el.idTipo);
				$("#txtCelular").val(el.celular);
				$('#panelTabs a[href="#add"]').tab('show');
			});
			
			$("[action=ubicar]").click(function(){
				var usuario = $(this).attr("usuario");
				$("#modalUbicar #usuario").val(usuario);
				$("#modalUbicar").modal();
			});
			
			$("#tblUsuarios").DataTable({
				"responsive": true,
				"language": espaniol,
				"paging": true,
				"lengthChange": false,
				"ordering": true,
				"info": true,
				"autoWidth": false
			});
		});
	}
});

$(document).ready(function(){
	$("#modalUbicar #sendMail").click(function(){
		$.get("?mod=gw_reporte&action=solicitarUbicacionMail&user=" + $("#modalUbicar #usuario").val() + "&solicita=" + $("#modalUbicar #origen").val(), function( data ) {
			if (data.band != true)
				alert("Ocurrió un error al enviar el correo electrónico");
			console.log("Email " + data.band);
		}, "json");
		
		alert("El correo electrónico se está enviando, puedes seguir utilizando la aplicación");
	});
	
	$("#modalUbicar #sendSMS").click(function(){
		alert("Función no disponible");
	});
});