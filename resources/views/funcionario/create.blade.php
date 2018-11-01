@extends('layout')

@section('content')

<div class="">
	<h4 class="page-header text-center">Adicionar Funcionarios</h4>
</div>
<div class="container">
	<form class="from-group" action="/funcionarios" method="post">
	  @csrf
	  <div class="form-group">
	    <label for="">Nombre:</label>
	    <input type="text" name="nombre" class="form-control" >
	    <label for="">Apellido:</label>
	    <input type="text" name="apellido" class="form-control" >
	    <label for="">Dirección:</label>
	    <input type="text" name="direccion" class="form-control" >
	    <label for="">Telefono:</label>
	    <input type="text" name="telefono" class="form-control" >
	    <label for="">Sexo:</label>
	    <input type="text" name="sexo" class="form-control" >
	    <label for="">Fecha Nacimiento:</label>
	    <input type="date" name="fecnac" step="1" min="1950-01-01"  value="2002-01-01" class="form-control" >
	    <label for="">Profesinón_id:</label>
	    <input type="text" name="prof" class="form-control" >
	  </div>
	  <button type="submit" name="btn btn-primary">Guardar</button>
	</form>
</div>
@endsection
