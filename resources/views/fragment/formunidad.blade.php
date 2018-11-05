<div class="form-group">
	{!! Form::label('nombre','Nombre de la unidad') !!}
	{!! Form::text('nombre',null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('dpto_id','Nombre del Departamento') !!}
	{!! Form::select('dpto_id', $vdptos, null) !!}
</div>

<div class="form-group">
	{!! Form::submit('Guardar',['class' => 'btn btn-primary']) !!}
</div>