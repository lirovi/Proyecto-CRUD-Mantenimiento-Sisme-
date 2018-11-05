@extends('layout')

@section('content')
<div class="container">
<div class="">
	<h4 class="page-header text-center">
		Editar mantenimiento

	</h4>
	<a href="{{ route('mantenimientos.index') }}" class="btn btn-outline-info float-right btn-sm">Volver a lista</a>
	
</div>

	@include('fragment.error')

	{!! Form::model($vmantenimiento, ['route' => ['mantenimientos.update', $vmantenimiento->id], 'method' =>'PUT']) !!}

		@include('fragment.formmante')

	{!! Form::close() !!}

</div>
@endsection
