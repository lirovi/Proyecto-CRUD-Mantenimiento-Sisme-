@extends('layout')

@section('content')
<div class="container">
<div class="">
  <h4 class="page-header text-center">
    Adicionar mantenimiento

  </h4>
  <a href="{{ route('mantenimientos.index') }}" class="btn btn-outline-info float-right btn-sm">Volver a lista</a>
</div>

  @include('fragment.error')
  
  {!! Form::open(['route' => 'mantenimientos.store']) !!}

    @include('fragment.formmante')

  {!! Form::close() !!}

</div>
@endsection