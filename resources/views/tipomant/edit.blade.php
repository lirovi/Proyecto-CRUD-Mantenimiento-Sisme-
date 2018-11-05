@extends('layout')

@section('content')
<div class="container">
<div class="">
	<h4 class="page-header text-center">
		Editar tipomant

	</h4>
	<a href="{{ route('tipomants.index') }}" class="btn btn-outline-info float-right btn-sm">Volver a lista</a>
	
</div>

	@include('fragment.error')

	{!! Form::model($vtipoman, ['route' => ['tipomants.update', $vtipoman->id], 'method' =>'PUT']) !!}

		@include('fragment.formtipomant')

	{!! Form::close() !!}

</div>
@endsection

