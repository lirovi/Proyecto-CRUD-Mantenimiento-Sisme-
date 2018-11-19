@extends('app')

@section('content')

<div id="crud" class="row">
  <div class="col-xs-12">
    <nav class="navbar navbar-dark bg-primary">
      <a href="#" class="navbar-brand">Mantenimiento Equipos</a>

    </nav>
    <h4 class="page-header text-center">
      Listado de Cargos
    </h4>
   <div class="col-sm-7">
    <a href="{{ route('cargos.create') }}" class="btn btn-warning btn-sm float-right" >Nuevo</a></th>
    <table class="table table-hover table-striped table-bordered table-sm">
      <thead>
        <tr class="text-center">
          <th >ID</th>
          <th >Descripción</th>
          <th colspan="2" width="100px">&nbsp</th>
        </tr>
      </thead>
      <tbody>
            <tr v-for="descripcion in descripcions">
              <td width="30px">tarea 1</td>
              <td width="500px">descripcicon tarea</td>
              
              <td><a href="#" class="btn btn-outline-success  btn-sm">Editar</a></td>
              
              <td>
                <form action="#" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-outline-danger float-left btn-sm">Borrar</button>
                </form>

                </td>
            </tr>
      </tbody>
    </table>
   <div class="col-sm-5">
     <pre>
      @{{ $data }}
    </pre>
   </div>

  </div>
</div>


@endsection


