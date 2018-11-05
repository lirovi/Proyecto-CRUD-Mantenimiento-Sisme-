@extends('layout')

@section('content')
<div class="container">
<div class="">
	<h4 class="page-header text-center">
		Editar tipo equipo

	</h4>
	<a href="{{ route('tipoequipos.index') }}" class="btn btn-outline-info float-right btn-sm">Volver a lista</a>
	
</div>

	@include('fragment.error')

	{!! Form::model($vtipoequipo, ['route' => ['tipoequipos.update', $vtipoequipo->id], 'method' =>'PUT']) !!}

		@include('fragment.formtipoequipo')

	{!! Form::close() !!}

</div>
@endsection

