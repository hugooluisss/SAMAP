<div class="panel panel-info">
	<div class="panel-head">
		<h1>Reporte diario</h1>
	</div>
	<div class="panel-body">
		<div class="row">
			<label for="lstUsuarios" class="col-xs-4">Usuario</label>
			<div class="col-xs-8">
				<select id="lstUsuario" name="lstUsuario">
					{foreach key=key item=item from=$usuarios}
						<option value="{$item.idUsuario}">{$item.nombre}
					{/foreach}
				</select>
			</div>
		</div>
		<div class="row">
			<label for="txtFecha" class="col-xs-4">Fecha</label>
			<div class="col-xs-4">
				<input type="text" value="{$smarty.now|date_format:"%Y-%m-%d"}" id="txtFecha" name="txtFecha" placeholder="Y-m-d" />
			</div>
		</div>
    	<div class="btn-group pull-right">
    		<input type="button" value="Buscar" id="btnBuscar" name="btnBuscar" class="btn btn-success"/>
    	</div>
    </div>
</div>

<div id="dvLista"></div>

{include file=$PAGE.rutaModulos|cat:"modulos/reporte/ubicacion.tpl"}