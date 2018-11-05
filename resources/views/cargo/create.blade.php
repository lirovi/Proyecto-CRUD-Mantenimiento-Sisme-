@extends('layout')

@section('content')
<div class="container">
<div class="">
	<h4 class="page-header text-center">
		Adicionar Cargo

	</h4>
	<a href="{{ route('cargos.index') }}" class="btn btn-outline-info float-right btn-sm">Volver a lista</a>
</div>

	@include('fragment.error')
	
	{!! Form::open(['route' => 'cargos.store']) !!}

		@include('fragment.formcargo')

	{!! Form::close() !!}

</div>
@endsection
