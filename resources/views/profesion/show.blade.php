@extends('layout')

@section('content')
<div class="container">
  <div class="col-sm-8">

      <h4 class="page-header text-center">
        Ver profesión

      </h4>
      <a href="{{ route('profesions.index') }}" class="btn btn-outline-info float-right btn-sm">Volver a lista</a>
      <a href="{{route('profesions.edit',$profesion->id)}}"class="btn btn-outline-success floar-right">Editar</a>
      <p>{{ $profesion->descripcion }}</p>
      
  </div>
</div>
@endsection
