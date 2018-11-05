@extends('layout')

@section('content')
<div class="container">
<div class="">
	<h4 class="page-header text-center">
		Editar funcionario

	</h4>
	<a href="{{ route('funcionarios.index') }}" class="btn btn-outline-info float-right btn-sm">Volver a lista</a>
	
</div>

	@include('fragment.error')

	{!! Form::model($vfuncionario, ['route' => ['funcionarios.update', $vfuncionario->id], 'method' =>'PUT']) !!}

		@include('fragment.formfunc')

	{!! Form::close() !!}


	
</div>
@endsection
