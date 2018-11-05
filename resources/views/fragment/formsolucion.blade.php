<div class="form-group">
	{!! Form::label('descripcion','Descripción de la solución') !!}
{!! Form::text('descripcion',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit('Guardar',['class' => 'btn btn-primary']) !!}
</div>