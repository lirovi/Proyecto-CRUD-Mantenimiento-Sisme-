@extends('layout')

@section('content')
<div class="container">
<div class="">
	<h4 class="page-header text-center">
		Editar unidad

	</h4>
	<a href="{{ route('unidads.index') }}" class="btn btn-outline-info float-right btn-sm">Volver a lista</a>
	
</div>

	@include('fragment.error')

	{!! Form::model($vunidad, ['route' => ['unidads.update', $vunidad->id], 'method' =>'PUT']) !!}

		@include('fragment.formunidad')

	{!! Form::close() !!}


</div>
@endsection

