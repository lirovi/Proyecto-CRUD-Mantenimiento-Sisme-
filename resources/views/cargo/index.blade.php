@extends('layouts.app')

@section('content')
<div class="col-sm-8">
  <h2></br>
    Listado de Cargos
    <a href="{{ route('cargos.create') }}" class="btn btn-primary pull-right" >Nuevo</a>
  </h2>
  <table class="table table-hover table-striped">
    <thead>
      <tr class="text-center">
        <th width="20px">ID</th>
        <th>Descripción</th>
        <th colspan="3">&nbsp;</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($cargos as $cargo)
          <tr class="text-center">
            <td>{{ $cargo->id }}</td>
            <td>{{ $cargo->descripcion }}</td>
            <td>ver</td>
            <td>editar</td>
            <td>borrar</td>
          </tr>
      @endforeach
    </tbody>
  </table>
  {!! $cargos->render() !!}
</div>

@endsection
