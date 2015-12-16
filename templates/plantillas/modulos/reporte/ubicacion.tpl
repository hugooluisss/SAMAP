<div class="modal fade" id="modalPosicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3>Posición</h3>
			</div>
			<div class="modal-body">
				<div class="thumbnail">
					<img src="" id="mapa">
					<div class="caption">
						<div class="row">
							<div class="col-xs-4"><b>Fecha</b></div>
							<div class="col-xs-4" id="lblFecha"></div>
						</div>
						<div class="row">
							<div class="col-xs-4"><b>Latitud</b></div>
							<div class="col-xs-4" id="lblLatitud"></div>
						</div>
						<div class="row">
							<div class="col-xs-4"><b>Longitud</b></div>
							<div class="col-xs-4" id="lblLongitud"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
				<button class="btn btn-primary" id="enviarPorEmail">Enviar correo electrónico</button>
				<input type="hidden" value="" id="idReporte" name="idReporte">
			</div>
		</div>
	</div>
</div>
