@extends('layout')

@section('content')
<div class="container">
<div class="">
	<h4 class="page-header text-center">
		Editar profesión

	</h4>
	<a href="{{ route('profesions.index') }}" class="btn btn-outline-info float-right btn-sm">Volver a lista</a>
	
</div>

	@include('fragment.error')

	{!! Form::model($vprofesion, ['route' => ['profesions.update', $vprofesion->id], 'method' =>'PUT']) !!}

		@include('fragment.formprofesion')

	{!! Form::close() !!}

	</form>
</div>
@endsection

