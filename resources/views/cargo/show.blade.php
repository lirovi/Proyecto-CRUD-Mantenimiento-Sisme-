@extends('layout')

@section('content')
<div class="container">
  <div class="col-sm-8">

      <h4 class="page-header text-center">
        Ver Cargo

      </h4>
      <a href="{{ route('cargos.index') }}" class="btn btn-outline-info float-right btn-sm">Volver a lista</a>
      <a href="{{route('cargos.edit',$cargo->id)}}"class="btn btn-outline-success floar-right">Editar</a>
      <p>{{ $cargo->descripcion }}</p>
      
  </div>
</div>
@endsection
