
<div class="form-group">
	{!! Form::label('Equipo','Descricpión del Equipo') !!}
	{!! Form::select('equipo_id', $vequipos, null) !!}
</div>

<div class="form-group">
	{!! Form::label('Funcionario','Nombre del Funcionario') !!}
	{!! Form::select('fun_id', $vfuns, null) !!}
</div>

<div class="form-group">
	{!! Form::label('tecnico_id','Nombre del Tecnico') !!}
	{!! Form::select('tecnico_id', $vtecnicos, null) !!}
</div>

<div class="form-group">
	{!! Form::label('Tipomant','Tipo de Mantenimiento') !!}
	{!! Form::select('tecnico_id', $vtipomants, null) !!}
</div>

<div class="form-group">
	{!! Form::label('diag_id','Diagnóstico') !!}
	{!! Form::select('diag_id', $vdiags, null) !!}
</div>

<div class="form-group">
	{!! Form::label('fechadiag','Fecha Diagnóstico') !!}
	{!! Form::select('fechadiag', $vfdiags, null) !!}
</div>

<div class="form-group">
	{!! Form::label('solucion_id','Solucion ejecutada') !!}
	{!! Form::select('solucion_id', $vsolucions, null) !!}
</div>

<div class="form-group">
	{!! Form::label('fechasol','Fecha Solucion') !!}
	{!! Form::select('fechasol', $vfsols, null) !!}
</div>

<div class="form-group">
	{!! Form::submit('Guardar',['class' => 'btn btn-primary']) !!}
</div>