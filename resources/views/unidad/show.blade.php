@extends('layout')

@section('content')
<div class="container">
  <div class="col-sm-8">

      <h4 class="page-header text-center">
        Ver unidad

      </h4>
      <a href="{{ route('unidads.index') }}" class="btn btn-outline-info float-right btn-sm">Volver a lista</a>
      <a href="{{route('unidads.edit',$unidad->id)}}"class="btn btn-outline-success floar-right">Editar</a>
      <p><strong>Nombre      :</strong>{{ $unidad->nombre }}</p>
      <p><strong>Departamento:</strong>{{ $unidad->dpto_id }}</p>
      m
  </div>
</div>
@endsection