@extends('app')

@section('content')

<div id="crud" class="row">
    <h4 class="page-header text-center">
     	Listado de Cargos
    </h4>
   <div class="col-sm-7">
     <a href="#" class="btn btn-primary pull-right" data-toggle="modal" data-target="#create">
    Nuevo Cargo
    </a>
    <table class="table table-hover table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Cargo</th>
          <th colspan="2">
            &nbsp;
          </th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="descripcion in descripcions">
          <td width="10px">@{{ descripcion.id }}</td>
          <td>@{{ descripcion.descripcion }}</td>
          <td width="10px">
            <a href="#" class="btn btn-warning btn-sm" v-on:click.prevent="editdescripcion(descripcion)">Editar</a>
          </td>
          <td width="10px">
            <a href="#" class="btn btn-danger btn-sm" v-on:click.prevent="deletedescripcion(descripcion)">Eliminar</a>
          </td>
        </tr>
      </tbody>
    </table>
    
    <nav>
      <ul class="pagination">
        <li v-if="pagination.current_page > 1">
          <a href="#" @click.prevent="changePage(pagination.current_page - 1)">
            <span>Atras</span>
          </a>
        </li>

        <li v-for="page in pagesNumber" v-bind:class="[ page == isActived ? 'active' : '']">
          <a href="#" @click.prevent="changePage(page)">
            @{{ page }}
          </a>
        </li>

        <li v-if="pagination.current_page < pagination.last_page">
          <a href="#" @click.prevent="changePage(pagination.current_page + 1)">
            <span>Siguiente</span>
          </a>
        </li>
      </ul>
    </nav>

    @include('create')
    @include('edit')
  </div>
  <div class="col-sm-5">
    <pre>
      @{{ $data }}
    </pre>
  </div>
</div>

@endsection

