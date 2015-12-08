<div class="panel panel-default">
	<div class="panel-head">
		<h1>Mapa</h1>
	</div>
	<div class="panel-body">
		<div class="btn-group" role="group" aria-label="...">
			<button type="button" class="btn btn-default" id="btnEnviarUbicacion">Enviar ubicación</button>
		</div>
		<br /><br />
    	<div id="dvMapa" class="col-xs-12 col-sm-12" style="height: 300px; width: 100%;"></div>
    </div>
</div>

<div id="dvLista"></div>

{include file=$PAGE.rutaModulos|cat:"modulos/localizacion/addComentario.tpl"}