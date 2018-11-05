@extends('layout')

@section('content')
<div class="container">
  <div class="col-sm-9">
    <h4 class="page-header text-center">
      Listado de unidades
    </h4>
    @include('fragment.info')
    <table class="table table-hover table-striped table-bordered table-sm">
      <thead>
        <tr class="text-center">
          <th width="20px">ID</th>
          <th width="500px">Nombre</th>
          <th width="200px">Departamento</th>
          <th colspan="3" width="100px"><a href="{{ route('unidads.create') }}" class="btn btn-warning btn-sm float-right" >Nuevo</a></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($unidads as $unidad)
            <tr class="text-left">
              <td>{{ $unidad->id }}</td>
              <td>{{ $unidad->nombre }}</td>
              <td>{{ $unidad->dpto_id }}</td>
              <td><a href="{{ route('unidads.show',$unidad->id) }}" class="btn btn-outline-secondary float-right btn-sm">ver</a></td>
              <td><a href="{{ route('unidads.edit',$unidad->id) }}" class="btn btn-outline-success  btn-sm">Editar</a></td>
              
              <td>
                <form action="{{ route('unidads.destroy',$unidad->id) }}" method="POST">
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
    {!! $unidads->render() !!}
  </div>
</div>
@endsection
