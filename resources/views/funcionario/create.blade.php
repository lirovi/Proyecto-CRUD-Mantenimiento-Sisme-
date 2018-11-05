@extends('layout')

@section('content')
<div class="container">
<div class="">
	<h4 class="page-header text-center">
		Adicionar funcionario

	</h4>
	<a href="{{ route('funcionarios.index') }}" class="btn btn-outline-info float-right btn-sm">Volver a lista</a>
</div>

	@include('fragment.error')
	
	{!! Form::open(['route' => 'funcionarios.store']) !!}

		@include('fragment.formfunc')

	{!! Form::close() !!}

</div>
@endsection

