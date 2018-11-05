<div class="form-group">
	{!! Form::label('descripcion','Descripción del equipo') !!}
{!! Form::text('descripcion',null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('tequipo_id','Tipo de Equipo') !!}
	{!! Form::select('id', $vtequipos, null) !!}
</div>

<div class="form-group">
	{!! Form::label('cod_af','Código de activo fijo') !!}
	{!! Form::text('cod_af',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('serie','Número de serie') !!}
	{!! Form::text('serie',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('fecha_ing','Fecha de ingreso') !!}
	{!! Form::text('fecha_ing',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit('Guardar',['class' => 'btn btn-primary']) !!}
</div>