@extends('layouts.app')

@section('content')

div class="">
	<h4 class="page-header text-center">Adicionar Designacion</h4>
</div>
<div class="container">
	<form class="from-group" action="/designacions" method="post">
	  @csrf
	  <div class="form-group">
	    <label for="">Descripción</label>
	    <input type="text" name="descripcion" class="form-control" >
	  </div>
	  <button type="submit" name="btn btn-primary">Guardar</button>
	</form>
</div>
@endsection
