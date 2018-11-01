@extends('layout')

@section('content')


<div class="">
	<h4 class="page-header text-center">Adicionar Unidad</h4>
</div>
<div class="container">
	<form class="from-group" action="/unidads" method="post">
	  @csrf
	  <div class="form-group">
	    <label for="">Nombre:</label>
	    <input type="text" name="nombre" class="form-control" >
	  </div>
	  <button type="submit" name="btn btn-primary">Guardar</button>
	</form>
</div>
@endsection
