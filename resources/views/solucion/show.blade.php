@extends('layout')

@section('content')
<div class="container">
  <div class="col-sm-8">

      <h4 class="page-header text-center">
        Ver solucion

      </h4>
      <a href="{{ route('solucions.index') }}" class="btn btn-outline-info float-right btn-sm">Volver a lista</a>
      <a href="{{route('solucions.edit',$solucion->id)}}"class="btn btn-outline-success floar-right">Editar</a>
      <p>{{ $solucion->descripcion }}</p>
      
  </div>
</div>
@endsection
