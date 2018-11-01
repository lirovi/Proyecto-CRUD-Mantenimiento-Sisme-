@extends('layout')

@section('content')

<div class="">
	<h4 class="page-header text-center">Editar Cargo</h4>
</div>
<div class="container">
	<form class="from-group" action="/cargos" method="PUT">
	  @csrf
	  <div class="form-group">
	    <label for="">Descripción</label>
	    <input type="text" name="descripcion" class="form-control" >
	  </div>
	  <button type="submit" name="btn btn-primary">Guardar</button>
	</form>
</div>
@endsection

