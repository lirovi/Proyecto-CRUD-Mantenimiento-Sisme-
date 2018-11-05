@extends('layout')

@section('content')
<div class="container">
<div class="">
  <h4 class="page-header text-center">
    Adicionar tipo mantenimiento

  </h4>
  <a href="{{ route('tipomants.index') }}" class="btn btn-outline-info float-right btn-sm">Volver a lista</a>
</div>

  @include('fragment.error')
  
  {!! Form::open(['route' => 'tipomants.store']) !!}

    @include('fragment.formtipomant')

  {!! Form::close() !!}

</div>
@endsection
