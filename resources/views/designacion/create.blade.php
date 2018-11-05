@extends('layout')

@section('content')
<div class="container">
<div class="">
	<h4 class="page-header text-center">
		Adicionar Designacion

	</h4>
	<a href="{{ route('designacions.index') }}" class="btn btn-outline-info float-right btn-sm">Volver a lista</a>
</div>

	@include('fragment.error')
	
	{!! Form::open(['route' => 'designacions.store']) !!}

		@include('fragment.formdesigna')

	{!! Form::close() !!}

</div>
@endsection