@extends('layout')

@section('content')
<div class="container">
  <div class="col-sm-9">
    <h4 class="page-header text-center">
      Listado de designacions
    </h4>
    @include('fragment.info')
    <table class="table table-hover table-striped table-bordered table-sm">
      <thead>
        <tr class="text-center">
          <th width="20px">ID</th>
          <th >Descripción</th>
          <th >Funcionario</th>
          <th>Cargo</th>
          <th>Fecha Designa</th>
          <th>Estado</th>
          <th colspan="3" width="100px"><a href="{{ route('designacions.create') }}" class="btn btn-warning btn-sm float-right" >Nuevo</a></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($designacions as $designacion)
            <tr class="text-left">
              <td>{{ $designacion->id }}</td>
              <td>{{ $designacion->descripcion }}</td>
              <td>{{ $designacion->fun_id }}</td>
              <td>{{ $designacion->cargo_id }}</td>
              <td>{{ $designacion->fechadesigna }}</td>
              <td>{{ $designacion->estado }}</td>
              <td><a href="{{ route('designacions.show',$designacion->id) }}" class="btn btn-outline-secondary float-right btn-sm">ver</a></td>
              <td><a href="{{ route('designacions.edit',$designacion->id) }}" class="btn btn-outline-success  btn-sm">Editar</a></td>
              
              <td>
                <form action="{{ route('designacions.destroy',$designacion->id) }}" method="POST">
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
    {!! $designacions->render() !!}
  </div>
</div>
@endsection

