<div class="form-group">
	{!! Form::label('descripcion','Detalle Designacion ') !!}
{!! Form::text('descripcion',null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('fun_id','Funcionario') !!}
	{!! Form::text('fun_id',null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('cargo_id','Cargo Funcionario') !!}
	{!! Form::text('cargo_id',null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('fechadesigna','Fecha Designacion') !!}
	{!! Form::text('fechadesigna',null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('estado','Estado Activo') !!}
	{!! Form::text('estado',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit('Guardar',['class' => 'btn btn-primary']) !!}
</div>