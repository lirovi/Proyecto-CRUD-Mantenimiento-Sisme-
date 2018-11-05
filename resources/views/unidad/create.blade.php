@extends('layout')

@section('content')
<div class="container">
<div class="">
	<h4 class="page-header text-center">
		Adicionar unidad

	</h4>
	<a href="{{ route('unidads.index') }}" class="btn btn-outline-info float-right btn-sm">Volver a lista</a>
</div>

	@include('fragment.error')
	
	{!! Form::open(['route' => 'unidads.store']) !!}

		@include('fragment.formunidad')

	{!! Form::close() !!}

</div>
@endsection

