@extends('layout')

@section('content')
<div class="container">
  <div class="col-sm-8">

      <h4 class="page-header text-center">
        Ver designacion

      </h4>
      <a href="{{ route('designacions.index') }}" class="btn btn-outline-info float-right btn-sm">Volver a lista</a>
      <a href="{{route('designacions.edit',$designacion->id)}}"class="btn btn-outline-success floar-right">Editar</a>
      <p>{{ $designacion->descripcion }}</p>
      <p>{{ $designacion->fun_id }}</p>
      <p>{{ $designacion->cargo_id }}</p>
      <p>{{ $designacion->fechadesigna }}</p>
      <p>{{ $designacion->estado }}</p>
      
  </div>
</div>
@endsection
