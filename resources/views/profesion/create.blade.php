@extends('layout')

@section('content')
<div class="container">
<div class="">
	<h4 class="page-header text-center">
		Adicionar profesión

	</h4>
	<a href="{{ route('profesions.index') }}" class="btn btn-outline-info float-right btn-sm">Volver a lista</a>
</div>

	@include('fragment.error')
	
	{!! Form::open(['route' => 'profesions.store']) !!}

		@include('fragment.formprofesion')

	{!! Form::close() !!}

</div>
@endsection

