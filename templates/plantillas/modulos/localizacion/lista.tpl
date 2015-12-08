<div class="box">
	<div class="box-header">
	</div><!-- /.box-header -->
	<div class="box-body">
		<table id="tblReportes" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Fecha/Hora</th>
					<th>Lugar</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				{foreach from=$lista item="row"}
					<tr>
						<td>{$row.fecha}</td>
						<td>{$row.direccion}</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-success" action="ubicar" title="Posicionar en el mapa" reporte="{$row.idReporte}" latitud="{$row.latitud}" longitud="{$row.longitud}"><i class="fa fa-map-pin"></i></button>
							<button type="button" class="btn btn-danger" action="eliminar" title="Eliminar" reporte="{$row.idReporte}"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				{/foreach}
			</tbody>
		</table>
	</div>
</div>