@extends('layout')

@section('content')
<div class="col-sm-8">
  <h2>
    Listado de Horarios
    <a href="{{ route('horarios.create') }}" class="btn btn-primary pull-right" >Nuevo</a>
  </h2>
  <table class="table table-hover table-striped">
    <thead>
      <tr class="text-center">
        <th width="20px">ID</th>
        <th>ID-Docente</th>
        <th>ID-Aula</th>
        <th>ID-Materia</th>
        <th>ID-Carrera</th>
        <th>Semestre</th>
        <th>Hora_inicio</th>
        <th>Hora_Fin</th>
        <th colspan="3">&nbsp;</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($horarios as $horario)
          <tr class="text-center">
            <td>{{ $horario->id }}</td>
            <td>{{ $horario->docente_id }}</td>
            <td>{{ $horario->aula_id }}</td>
            <td>{{ $horario->materia_id }}</td>
            <td>{{ $horario->carrera_id }}</td>
            <td>{{ $horario->semestre }}</td>
            <td>{{ $horario->hora_init }}</td>
            <td>{{ $horario->hora_end }}</td>
            <td>ver</td>
            <td>editar</td>
            <td>borrar</td>
          </tr>
      @endforeach
    </tbody>
  </table>
  {!! $horarios->render() !!}
</div>
<div class="col-sm-4">
  mensaje
</div>
@endsection
