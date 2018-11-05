@extends('layout')

@section('content')
<div class="container">
<div class="">
	<h4 class="page-header text-center">
		Adicionar solucion

	</h4>
	<a href="{{ route('solucions.index') }}" class="btn btn-outline-info float-right btn-sm">Volver a lista</a>
</div>

	@include('fragment.error')
	
	{!! Form::open(['route' => 'solucions.store']) !!}

		@include('fragment.formsolucion')

	{!! Form::close() !!}

</div>
@endsection