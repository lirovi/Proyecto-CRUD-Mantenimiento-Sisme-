@extends('layout')

@section('content')
<div class="container">
<div class="">
	<h4 class="page-header text-center">
		Editar diagnóstico

	</h4>
	<a href="{{ route('diagnosticos.index') }}" class="btn btn-outline-info float-right btn-sm">Volver a lista</a>
	
</div>

	@include('fragment.error')

	{!! Form::model($vdiagnostico, ['route' => ['diagnosticos.update', $vdiagnostico->id], 'method' =>'PUT']) !!}

		@include('fragment.formdiag')

	{!! Form::close() !!}

</div>
@endsection

