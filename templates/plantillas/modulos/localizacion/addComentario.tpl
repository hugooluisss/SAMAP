<div class="modal fade" id="modalComentario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel">Enviar ubicación</h3>
			</div>
			<div class="modal-body">
				<div class="row">
					<label class="col-xs-4" for="txtComentario">Dirección</label>
					<div class="col-xs-8" id="ubicacion"></div>
				</div>
				<div class="row">
					<label class="col-xs-4" for="txtComentario">Coordenadas</label>
					<div class="col-xs-4" id="latitud"></div>
				</div>
				<div class="row">
					<div class="col-xs-offset-4 col-xs-4" id="longitud"></div>
				</div>
				<div class="row">
					<label class="col-xs-4" for="txtComentario">Comentario</label>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<textarea class="form-control" id="txtComentario" name="txtComentario"></textarea>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
				<button class="btn btn-primary" id="guardar">Enviar</button>
			</div>
		</div>
	</div>
</div>
