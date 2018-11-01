@extends('layout')

@section('content')
<div class="container">
  <div class="col-sm-8">
    <h4 class="page-header text-center">
      Listado de Unidades
    </h4>

    <table class="table table-hover table-striped table-bordered table-sm">
      <thead>
        <tr class="text-center">
          <th width="20px">ID</th>
          <th width="500px">Nombre</th>
          <th colspan="2"><a href="{{ route('unidads.create') }}" class="btn btn-warning" >Nuevo</a></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($unidads as $unidad)
            <tr class="text-ledt">
              <td>{{ $unidad->id }}</td>
              <td>{{ $unidad->nombre }}</td>
              <td><a href="{{route('unidads.create')}}"class="btn btn-success pull-right">Editar</a></td>
              
              <td><a href="{{route('unidads.create')}}"class="btn btn-danger pull-right">Eliminar</a></td>
            </tr>
        @endforeach
      </tbody>
    </table>
    <ul class="pagination">
            
      </ul>
    {!! $unidads->render() !!}
  </div>
</div>
@endsection
