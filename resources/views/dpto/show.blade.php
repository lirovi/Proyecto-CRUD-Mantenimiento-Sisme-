@extends('layout')

@section('content')
<div class="container">
  <div class="col-sm-8">

      <h4 class="page-header text-center">
        Ver departamento

      </h4>
      <a href="{{ route('dptos.index') }}" class="btn btn-outline-info float-right btn-sm">Volver a lista</a>
      <a href="{{route('dptos.edit',$dpto->id)}}"class="btn btn-outline-success floar-right">Editar</a>
      <p>{{ $dpto->nombre }}</p>
      
  </div>
</div>
@endsection
