@extends('layout')

@section('content')
<div class="container">
  <div class="col-sm-8">

      <h4 class="page-header text-center">
        Ver tipo equipo

      </h4>
      <a href="{{ route('tipoequipos.index') }}" class="btn btn-outline-info float-right btn-sm">Volver a lista</a>
      <a href="{{route('tipoequipos.edit',$tipoequipo->id)}}"class="btn btn-outline-success floar-right">Editar</a>
      <p>{{ $tipoequipo->descripcion }}</p>
      
  </div>
</div>
@endsection