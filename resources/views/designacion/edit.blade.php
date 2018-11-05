@extends('layout')

@section('content')
<div class="container">
<div class="">
	<h4 class="page-header text-center">
		Editar designacion

	</h4>
	<a href="{{ route('designacions.index') }}" class="btn btn-outline-info float-right btn-sm">Volver a lista</a>
	
</div>

	@include('fragment.error')

	{!! Form::model($vdesignacion, ['route' => ['designacions.update', $vdesignacion->id], 'method' =>'PUT']) !!}

		@include('fragment.formdesigna')

	{!! Form::close() !!}

</div>
@endsection