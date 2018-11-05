<div class="form-group">
	{!! Form::label('descripcion','Nombre del cargo') !!}
{!! Form::text('descripcion',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit('Guardar',['class' => 'btn btn-primary']) !!}
</div>