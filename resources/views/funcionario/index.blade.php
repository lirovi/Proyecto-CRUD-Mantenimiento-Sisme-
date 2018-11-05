@extends('layout')

@section('content')
<div class="container">
  <div class="col-sm-11">
    <h4 class="page-header text-center">
      Listado de funcionarios
    </h4>
    @include('fragment.info')
    <table class="table table-hover table-striped table-bordered table-sm">
      <thead>
        <tr class="text-center">
          <th width="20px">ID</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th width="250px">Dirección</th>
          <th>Telefono</th>
          <th>Genero</th>
          <th>Fecha Nacimiento</th>
          <th>Profesión</th>
          <th colspan="3" width="100px"><a href="{{ route('funcionarios.create') }}" class="btn btn-warning btn-sm float-right" >Nuevo</a></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($funcionarios as $funcionario)
            <tr class="text-left">
              <td>{{ $funcionario->id }}</td>
              <td>{{ $funcionario->nombre }}</td>
              <td>{{ $funcionario->apellido }}</td>
              <td>{{ $funcionario->direccion}}</td>
              <td>{{ $funcionario->telefono }}</td>
              <td>{{ $funcionario->sexo }}</td>
              <td>{{ $funcionario->fecha_nac }}</td>
              <td>{{ $funcionario->prof_id }}</td>
              <td><a href="{{ route('funcionarios.show',$funcionario->id) }}" class="btn btn-outline-secondary float-right btn-sm">ver</a></td>
              <td><a href="{{ route('funcionarios.edit',$funcionario->id) }}" class="btn btn-outline-success  btn-sm">Editar</a></td>
              
              <td>
                <form action="{{ route('funcionarios.destroy',$funcionario->id) }}" method="POST">
                  {{ csrf_field() }}

                  <input type="hidden" name="_method" value="DELETE">
                  <button class="btn btn-outline-danger float-left btn-sm">Borrar</button>
                </form>

                </td>
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
