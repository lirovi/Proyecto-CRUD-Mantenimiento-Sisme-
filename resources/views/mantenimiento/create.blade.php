@extends('layouts.app')

@section('content')


<form class="from-group" action="/Horarios" method="post">
  @csrf
  <div class="form-group">
    <label for="">Nombre</label>
    <input type="text" name="name" class="form-control" >
    <label for="">Nombre</label>
    <input type="text" name="name" class="form-control" >
    <label for="">Nombre</label>
    <input type="text" name="name" class="form-control" >
    <label for="">Nombre</label>
    <input type="text" name="name" class="form-control" >
    <label for="">Nombre</label>
    <input type="text" name="name" class="form-control" >
    <label for="">Nombre</label>
    <input type="text" name="name" class="form-control" >
  </div>
  <button type="submit" name="btn btn-primary">Guardar</button>
</form>
@endsection
