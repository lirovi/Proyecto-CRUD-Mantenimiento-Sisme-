@extends('layout')

@section('content')
<div class="container">
  <div class="col-sm-9">
    <h4 class="page-header text-center">
      Listado de diagnósticos
    </h4>
    @include('fragment.info')
    <table class="table table-hover table-striped table-bordered table-sm">
      <thead>
        <tr class="text-center">
          <th width="20px">ID</th>
          <th width="600px">Descripción</th>
          <th colspan="3" width="100px"><a href="{{ route('diagnosticos.create') }}" class="btn btn-warning btn-sm float-right" >Nuevo</a></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($diagnosticos as $diagnostico)
            <tr class="text-left">
              <td>{{ $diagnostico->id }}</td>
              <td>{{ $diagnostico->descripcion }}</td>
              <td><a href="{{ route('diagnosticos.show',$diagnostico->id) }}" class="btn btn-outline-secondary float-right btn-sm">ver</a></td>
              <td><a href="{{ route('diagnosticos.edit',$diagnostico->id) }}" class="btn btn-outline-success  btn-sm">Editar</a></td>
              
              <td>
                <form action="{{ route('diagnosticos.destroy',$diagnostico->id) }}" method="POST">
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
    {!! $diagnosticos->render() !!}
  </div>
</div>
@endsection
