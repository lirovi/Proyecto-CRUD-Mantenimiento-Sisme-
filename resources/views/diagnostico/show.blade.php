@extends('layout')

@section('content')
<div class="container">
  <div class="col-sm-8">

      <h4 class="page-header text-center">
        Ver diagnostico

      </h4>
      <a href="{{ route('diagnosticos.index') }}" class="btn btn-outline-info float-right btn-sm">Volver a lista</a>
      <a href="{{route('diagnosticos.edit',$diagnostico->id)}}"class="btn btn-outline-success floar-right">Editar</a>
      <p>{{ $diagnostico->descripcion }}</p>
      
  </div>
</div>
@endsection
