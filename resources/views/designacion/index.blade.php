@extends('layout')

@section('content')
<div class="container">
  <div class="col-sm-8">
    <h4 class="page-header text-center">
      Listado de Designaciones
    </h4>

    <table class="table table-hover table-striped table-bordered table-sm">
      <thead>
        <tr class="text-center">
          <th width="20px">ID</th>
          <th width="500px">Descripción</th>
          <th colspan="2"><a href="{{ route('desgnacions.create') }}" class="btn btn-warning" >Nuevo</a></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($designacions as $designacion)
            <tr class="text-ledt">
              <td>{{ $designacion->id }}</td>
              <td>{{ $designacion->descripcion }}</td>
              <td><a href="{{route('designacions.create')}}"class="btn btn-success pull-right">Editar</a></td>
              
              <td><a href="{{route('designacions.create')}}"class="btn btn-danger pull-right">Eliminar</a></td>
            </tr>
        @endforeach
      </tbody>
    </table>
    <ul class="pagination">
            
      </ul>
    {!! $designacions->render() !!}
  </div>
</div>
@endsection
