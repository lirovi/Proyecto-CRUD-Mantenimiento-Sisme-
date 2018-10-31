@extends('layout')

@section('content')
<div class="col-sm-8">
  <h2></br>
    Listado de Carreras
    <a href="{{ route('carreras.create') }}" class="btn btn-primary pull-right" >Nuevo</a>
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
      @foreach ($carreras as $carrera)
          <tr class="text-center">
            <td>{{ $carrera->id }}</td>
            <td>{{ $carrera->name }}</td>
            <td>ver</td>
            <td>editar</td>
            <td>borrar</td>
          </tr>
      @endforeach
    </tbody>
  </table>
  {!! $carreras->render() !!}
</div>
<div class="col-sm-4">
  mensaje
</div>
@endsection
