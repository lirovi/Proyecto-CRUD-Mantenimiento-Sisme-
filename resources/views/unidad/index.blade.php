@extends('layout')

@section('content')
<div class="col-sm-8">
  <h2></br>
    Listado de Materias
    <a href="{{ route('materias.create') }}" class="btn btn-primary pull-right" >Nuevo</a>
  </h2>
  <table class="table table-hover table-striped">
    <thead>
      <tr class="text-center">
        <th width="20px">ID</th>
        <th>Nombre</th>
        <th colspan="3">&nbsp;</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($materias as $materia)
          <tr class="text-center">
            <td>{{ $materia->id }}</td>
            <td>{{ $materia->name }}</td>
            <td>ver</td>
            <td>editar</td>
            <td>borrar</td>
          </tr>
      @endforeach
    </tbody>
  </table>
  {!! $materias->render() !!}
</div>

@endsection
