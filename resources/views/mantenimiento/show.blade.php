@extends('layout')

@section('content')
<div class="container">
  <div class="col-sm-8">

      <h4 class="page-header text-center">
        Ver mantenimiento

      </h4>
      <a href="{{ route('mantenimientos.index') }}" class="btn btn-outline-info float-right btn-sm">Volver a lista</a>
      <a href="{{route('mantenimientos.edit',$mantenimiento->id)}}"class="btn btn-outline-success floar-right">Editar</a>
      <p>{{ $mantenimiento->equipo_id }} </p>
             <p>{{ $mantenimiento->fun_id }}</p>
             <p>{{ $mantenimiento->tecnico_id }}</p>
             <p>{{ $mantenimiento->tipoman_id }}</p>
             <p>{{ $mantenimiento->diag_id }}</p>
             <p>{{ $mantenimiento->fechadiag }}</p>
             <p>{{ $mantenimiento->solucion_id }}</p>
             <p>{{ $mantenimiento->fechasol }}</p>
      
  </div>
</div>
@endsection
