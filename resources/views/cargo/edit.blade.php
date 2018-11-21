<form method="POST" v-on:submit.prevent="updatedescripcicon(filldescripcion.id)">
<div class="modal fade" id="edit">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span>&times;</span>
				</button>
				<h4>Editar</h4>
			</div>
			<div class="modal-body">
				<label for="descripcion">Actualizar Cargo</label>
				<input type="text" name="descripcion" class="form-control" v-model="filldescripcion.descripcion">
				<span v-for="error in errors" class="text-danger">@{{ error }}</span>
			</div>
			<div class="modal-footer">
				<input type="submit" class="btn btn-primary" value="Actualizar">
			</div>
		</div>
	</div>
</div>
</form>