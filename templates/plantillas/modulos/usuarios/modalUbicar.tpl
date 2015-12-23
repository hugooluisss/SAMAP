<div class="modal fade" id="modalUbicar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel">Solicitar ubicación</h3>
			</div>
			<div class="modal-body">
				<ul class="list-group">
					<li class="list-group-item">
						<button class="btn btn-primary" id="sendMail"><i class="fa fa-envelope-o"></i> Correo electrónico</button>
					</li>
					<li class="list-group-item">
						<button class="btn btn-primary" id="sendSMS"><i class="fa fa-phone"></i> SMS</button>
					</li>
				</ul>
			</div>
		</div>
	</div>
	
	<input type="hidden" value="" id="usuario" />
	<input type="hidden" value="{$PAGE.sesion.usuario}" id="origen" />
</div>
