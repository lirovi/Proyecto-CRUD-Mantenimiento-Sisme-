@extends('layout')

@section('content')
<div class="container">
<div class="">
	<h4 class="page-header text-center">
		Adicionar equipo

	</h4>
	<a href="{{ route('equipos.index') }}" class="btn btn-outline-info float-right btn-sm">Volver a lista</a>
</div>

	@include('fragment.error')
	
	{!! Form::open(['route' => 'equipos.store']) !!}

		@include('fragment.formequipo')

	{!! Form::close() !!}

</div>
@endsection
