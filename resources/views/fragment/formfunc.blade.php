<div class="form-group">
	{!! Form::label('nombre','Nombre del funcionario') !!}
	{!! Form::text('nombre',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('apellido','Apellido') !!}
	{!! Form::text('apellido',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('direccion','Dirección') !!}
	{!! Form::text('direccion',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('telefono','Telefono') !!}
{!! Form::text('telefono',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('sexo','Género') !!}
{!! Form::text('sexo',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('fecha_nac','Fecha Nacimiento') !!}
{!! Form::text('fecha_nac',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('prof_id','Profesión') !!}
{!! Form::text('prof_id',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit('Guardar',['class' => 'btn btn-primary']) !!}
</div>