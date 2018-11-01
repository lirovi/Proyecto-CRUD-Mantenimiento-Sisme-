@extends('layout')

@section('content')
<div class="container">
  <div class="col-sm-8">
    <h4 class="page-header text-center">
      Listado de funcionarios
    </h4>

    <table class="table table-hover table-striped table-bordered table-sm">
      <thead>
        <tr class="text-center">
          <th width="20px">ID</th>
          <th width="100px">Nombre</th>
          <th width="100px">Apellido</th>
          <th width="250px">Dirección</th>
          <th width="100px">Telefono</th>
          <th colspan="2"><a href="{{ route('funcionarios.create') }}" class="btn btn-warning" >Nuevo</a></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($funcionarios as $funcionario)
            <tr class="text-ledt">
              <td>{{ $funcionario->id }}</td>
              <td>{{ $funcionario->nombre }}</td>
              <td>{{ $funcionario->apellido }}</td>
              <td>{{ $funcionario->direccion}}</td>
              <td>{{ $funcionario->telefono }}</td>
              <td><a href="{{route('funcionarios.create')}}"class="btn btn-success pull-right">Editar</a></td>
              
              <td><a href="{{route('funcionarios.create')}}"class="btn btn-danger pull-right">Eliminar</a></td>
            </tr>
        @endforeach
      </tbody>
    </table>
    <ul class="pagination">
            
      </ul>
    {!! $funcionarios->render() !!}
  </div>
</div>
@endsection
