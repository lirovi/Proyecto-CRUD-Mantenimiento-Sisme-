@extends('layout')

@section('content')
<div class="container">
  <div class="col-sm-12">
    <h4 class="page-header text-center">
      Listado de equipos
    </h4>
    @include('fragment.info')
    <table class="table table-hover table-striped table-bordered table-sm">
      <thead>
        <tr class="text-center">
          <th width="20px">ID</th>
          <th width="400px">Descripcion</th>
          <th>Tipo Equipo</th>
          <th>Código Activo</th>       
          <th>Serie</th> 
          <th>Fecha Ingreso</th>
          <th colspan="3" width="100px"><a href="{{ route('equipos.create') }}" class="btn btn-warning btn-sm float-right" >Nuevo</a></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($equipos as $equipo)
            <tr class="text-left">
              <td>{{ $equipo->id }}</td>
              <td>{{ $equipo->descripcion }}</td>
              <td>{{ $equipo->tequipo_id }}</td>
              <td>{{ $equipo->cod_af }}</td>
              <td>{{ $equipo->serie }}</td>
              <td>{{ $equipo->fecha_ing }}</td>
              <td><a href="{{ route('equipos.show',$equipo->id) }}" class="btn btn-outline-secondary float-right btn-sm">ver</a></td>
              <td><a href="{{ route('equipos.edit',$equipo->id) }}" class="btn btn-outline-success  btn-sm">Editar</a></td>
              
              <td>
                <form action="{{ route('equipos.destroy',$equipo->id) }}" method="POST">
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
    {!! $equipos->render() !!}
  </div>
</div>
@endsection

