<form method="POST" v-on:submit.prevent="createdescripcion">
<div class="modal fade" id="create">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span>&times;</span>
				</button>
				<h4>Crear</h4>
			</div>
			<div class="modal-body">
				<label for="descripcion">Nuevo Cargo</label>
				<input type="text" name="descripcion" class="form-control" v-model="newdescripcion">
				<span v-for="error in errors" class="text-danger">@{{ error }}</span>
			</div>
			<div class="modal-footer">
				<input type="submit" class="btn btn-primary" value="Guardar">
			</div>
		</div>
	</div>
</div>
</form>