@extends('layout')

@section('content')
<div class="container">
  <div class="col-sm-8">

      <h4 class="page-header text-center">
        Ver equipo

      </h4>
      <a href="{{ route('equipos.index') }}" class="btn btn-outline-info float-right btn-sm">Volver a lista</a>
      <a href="{{route('equipos.edit',$equipo->id)}}"class="btn btn-outline-success floar-right">Editar</a>
      <p><strong>Descripcion  :</strong>{{ $equipo->descripcion }}</p>
      <p><strong>Tipo Equipo  :</strong>{{ $equipo->tequipo_id }}</p>
      <p><strong>Código Activo:</strong>{{ $equipo->cod_af }}</p>
      <p><strong>Serie        :</strong>{{ $equipo->serie }}</p>
      <p><strong>Fecha Ingreso:</strong>{{ $equipo->tequipo_id }}</p>

  </div>
</div>
@endsection