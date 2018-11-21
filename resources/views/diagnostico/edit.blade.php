@extends('app')

@section('content')
<div id="crud" class="row">
	<div class="col-sm-9">
			<h4 class="page-header text-center">
				Editar diagnóstico

			</h4>
			<a href="{{ route('diagnosticos.index') }}" class="btn btn-outline-info float-right btn-sm">Volver a lista</a>
			
	</div>
</div>

	@include('fragment.error')

	{!! Form::model($vdiagnostico, ['route' => ['diagnosticos.update', $vdiagnostico->id], 'method' =>'PUT']) !!}

		@include('fragment.formdiag')

	{!! Form::close() !!}


@endsection

