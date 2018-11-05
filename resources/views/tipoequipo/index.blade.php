@extends('layout')

@section('content')
<div class="container">
  <div class="col-sm-9">
    <h4 class="page-header text-center">
      Listado de tipo equipos
    </h4>
    @include('fragment.info')
    <table class="table table-hover table-striped table-bordered table-sm">
      <thead>
        <tr class="text-center">
          <th width="20px">ID</th>
          <th width="600px">Descripción</th>
          <th colspan="3" width="100px"><a href="{{ route('tipoequipos.create') }}" class="btn btn-warning btn-sm float-right" >Nuevo</a></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($tipoequipos as $tipoequipo)
            <tr class="text-left">
              <td>{{ $tipoequipo->id }}</td>
              <td>{{ $tipoequipo->descripcion }}</td>
              <td><a href="{{ route('tipoequipos.show',$tipoequipo->id) }}" class="btn btn-outline-secondary float-right btn-sm">ver</a></td>
              <td><a href="{{ route('tipoequipos.edit',$tipoequipo->id) }}" class="btn btn-outline-success  btn-sm">Editar</a></td>
              
              <td>
                <form action="{{ route('tipoequipos.destroy',$tipoequipo->id) }}" method="POST">
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
    {!! $tipoequipos->render() !!}
  </div>
</div>
@endsection
