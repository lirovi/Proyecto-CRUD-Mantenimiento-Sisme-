@extends('layout')

@section('content')
<div class="container">
  <div class="col-sm-9">
    <h4 class="page-header text-center">
      Listado de mantenimientos
    </h4>
    @include('fragment.info')
    <table class="table table-hover table-striped table-bordered table-sm">
      <thead>
        <tr class="text-center">
          <th width="20px">ID</th>
          <th >Equipo</th>
          <th >Funcionario</th>
          <th >Tecnico</th>
          <th >Tipo Mantenimiento</th>
          <th >Diagnostico</th>
          <th >Fecha Diagnostico</th>
          <th >Solucion</th>
          <th >Fecha  Solucion</th>
          <th colspan="3" width="100px"><a href="{{ route('mantenimientos.create') }}" class="btn btn-warning btn-sm float-right" >Nuevo</a></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($mantenimientos as $mantenimiento)
            <tr class="text-left">
              <td>{{ $mantenimiento->id }}</td>
              <td>{{ $mantenimiento->equipo_id }}</td>
              <td>{{ $mantenimiento->fun_id }}</td>
              <td>{{ $mantenimiento->tecnico_id }}</td>
              <td>{{ $mantenimiento->tipoman_id }}</td>
              <td>{{ $mantenimiento->diag_id }}</td>
              <td>{{ $mantenimiento->fechadiag }}</td>
              <td>{{ $mantenimiento->solucion_id }}</td>
              <td>{{ $mantenimiento->fechasol }}</td>
              <td><a href="{{ route('mantenimientos.show',$mantenimiento->id) }}" class="btn btn-outline-secondary float-right btn-sm">ver</a></td>
              <td><a href="{{ route('mantenimientos.edit',$mantenimiento->id) }}" class="btn btn-outline-success  btn-sm">Editar</a></td>
              
              <td>
                <form action="{{ route('mantenimientos.destroy',$mantenimiento->id) }}" method="POST">
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
    {!! $mantenimientos->render() !!}
  </div>
</div>
@endsection
