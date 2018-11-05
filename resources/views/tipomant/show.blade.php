@extends('layout')

@section('content')
<div class="container">
  <div class="col-sm-8">

      <h4 class="page-header text-center">
        Ver tipo mantenimiento

      </h4>
      <a href="{{ route('tipomants.index') }}" class="btn btn-outline-info float-right btn-sm">Volver a lista</a>
      <a href="{{route('tipomants.edit',$tipomant->id)}}"class="btn btn-outline-success floar-right">Editar</a>
      <p>{{ $tipomant->descripcion }}</p>
      
  </div>
</div>
@endsection
