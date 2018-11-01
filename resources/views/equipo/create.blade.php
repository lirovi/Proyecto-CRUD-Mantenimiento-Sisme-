@extends('layout')

@section('content')

<div class="">
	<h4 class="page-header text-center">Adicionar Equipos</h4>
</div>
<div class="container">
	<form class="from-group" action="/equipos" method="post">
	  @csrf
	  <div class="form-group">
	    <label for="">Descripción:</label>
	    <input type="text" name="descripcion" class="form-control" >
	    <label for="">Tipo Equipo:</label>
	    <input type="text" name="tipoequipo" class="form-control" >
	    <label for="">Codigo Activo Fijo:</label>
	    <input type="text" name="codaf" class="form-control" >
	    <label for="">Serie:</label>
	    <input type="text" name="serie" class="form-control" >
	    <label for="">Fecha Ingreso:</label>
	    <input type="date" name="fecingreso" step="1" min="1950-01-01"  value="2018-01-01" class="form-control" >
	  </div>
	  <button type="submit" name="btn btn-primary">Guardar</button>
	</form>
</div>
@endsection
