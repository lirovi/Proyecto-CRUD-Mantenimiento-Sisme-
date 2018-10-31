@extends('layouts.app')

@section('content')


<form class="from-group" action="/cargos" method="post">
  @csrf
  <div class="form-group">
    <label for="">Descripción</label>
    <input type="text" name="descripcion" class="form-control" >
  </div>
  <button type="submit" name="btn btn-primary">Guardar</button>
</form>
@endsection
