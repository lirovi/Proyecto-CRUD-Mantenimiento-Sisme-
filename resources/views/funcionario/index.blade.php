@extends('layout')

@section('content')
<div class="col-sm-8">
  <h2></br>
    Listado de Aulas
    <a href="{{ route('aulas.create') }}" class="btn btn-primary pull-right" >Nuevo</a>
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
      @foreach ($aulas as $aula)
          <tr class="text-center">
            <td>{{ $aula->id }}</td>
            <td>{{ $aula->name }}</td>
            <td>ver</td>
            <td>editar</td>
            <td>borrar</td>
          </tr>
      @endforeach
    </tbody>
  </table>
  {!! $aulas->render() !!}
</div>
<div class="col-sm-4">
  mensaje
</div>
@endsection
