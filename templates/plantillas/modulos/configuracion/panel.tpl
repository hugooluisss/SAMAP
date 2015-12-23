<div class="panel panel-info" id="configuracion">
	<div class="panel-head">
		<h1>Configuración del sistema</h1>
	</div>
	<div class="panel-body">
		<div class="row">
			<label for="reportarCada" class="col-xs-3">Reporte de cada usuario cada</label>
			<div class="col-xs-8">

				<select id="reportarCada" name="reportarCada">
					<option value="1" {if 1 eq $reportarCada}selected{/if}>1
					{for $x=5 to 59 step 5}
					<option value="{$x}" {if $x eq $reportarCada}selected{/if}>{$x}
					{/for}
				</select> minutos
			</div>
		</div>
		<div class="row">
			<label for="servidorEmail" class="col-xs-3">Servidor de email</label>
			<div class="col-xs-4">
				<input type="text" value="{$servidorEmail}" id="servidorEmail" name="servidorEmail" class="form-control" />
			</div>
		</div>
		<div class="row">
			<label for="usuarioEmail" class="col-xs-3">Usuario del servidor de email</label>
			<div class="col-xs-4">
				<input type="text" value="{$usuarioEmail}" id="usuarioEmail" name="usuarioEmail" class="form-control" />
			</div>
		</div>
		<div class="row">
			<label for="passEmail" class="col-xs-3">Constraseña del servidor de email</label>
			<div class="col-xs-4">
				<input type="text" value="{$passEmail}" id="passEmail" name="passEmail" class="form-control" />
			</div>
		</div>
		<br />
		<div class="row">
			<label for="passEmail" class="col-xs-3">Dirección web</label>
			<div class="col-xs-4">
				<input type="text" value="{$web}" id="web" name="web" class="form-control" />
			</div>
		</div>
	</div>
	<div class="panel-footer">
		<input type="button" value="Guardar" id="btnGuardar" name="btnGuardar" class="btn btn-success"/>
	</div>
</div>