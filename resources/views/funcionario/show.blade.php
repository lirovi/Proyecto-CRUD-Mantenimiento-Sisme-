@extends('layout')

@section('content')
<div class="container">
  <div class="col-sm-8">

      <h4 class="page-header text-center">
        Ver funcionario

      </h4>
      <a href="{{ route('funcionarios.index') }}" class="btn btn-outline-info float-right btn-sm">Volver a lista</a>
      <a href="{{route('funcionarios.edit',$funcionario->id)}}"class="btn btn-outline-success floar-right">Editar</a>
            
            <p><strong>Nombre   : </strong>{{ $funcionario->nombre }}</p>
            <p><strong>Apellido : </strong>{{ $funcionario->apellido }}</p>
            <p><strong>Dirección:</strong>{{ $funcionario->direccion }}</p>
            <p><strong>Teléfono :</strong>{{ $funcionario->telefono }}</p>
            <p><strong>Género   :</strong>{{ $funcionario->sexo }}</p>
            <p><strong>Fecha Nac:</strong>{{ $funcionario->fecha_nac }}</p>
            <p><strong>Profesión:</strong>{{ $funcionario->prof_id }}</p>
      
  </div>
</div>
@endsection