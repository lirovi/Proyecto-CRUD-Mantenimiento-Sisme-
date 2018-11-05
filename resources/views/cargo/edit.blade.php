@extends('layout')

@section('content')
<div class="container">
<div class="">
	<h4 class="page-header text-center">
		Editar Cargo

	</h4>
	<a href="{{ route('cargos.index') }}" class="btn btn-outline-info float-right btn-sm">Volver a lista</a>
	
</div>

	@include('fragment.error')

	{!! Form::model($vcargo, ['route' => ['cargos.update', $vcargo->id], 'method' =>'PUT']) !!}

		@include('fragment.formcargo')

	{!! Form::close() !!}


	<!--<form class="from-group" action="/cargos" method="PUT">
	  @csrf
	  <div class="form-group">
	    <label for="">Descripción</label>
	    <input type="text" name="descripcion" class="form-control" >
	  </div>
	  <button type="submit" name="btn btn-primary">Guardar</button>
	</form>-->
</div>
@endsection

