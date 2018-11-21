@extends('app')

@section('content')
<div class="contenido">
		<h4 class="page-header text-center">
			Adicionar diagnostico

		</h4>
		<a href="{{ route('diagnosticos.index') }}" class="btn btn-outline-info float-right btn-sm">Volver a lista</a>
</div>
	@include('fragment.error')
	
	{!! Form::open(['route' => 'diagnosticos.store']) !!}

		@include('fragment.formdiag')

	{!! Form::close() !!}


@endsection
