@extends('app')

@section('content')
<div class="container">
	 <div class="col-sm-9">
	    <nav class="navbar navbar-dark bg-primary">
	      <a href="#" class="navbar-brand">Mantenimiento Equipos</a>

	    </nav>
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

