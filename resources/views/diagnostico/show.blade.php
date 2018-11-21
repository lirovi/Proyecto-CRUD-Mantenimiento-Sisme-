@extends('app')

@section('content')

      <h4 class="page-header text-center">
        Ver diagnostico

      </h4>
      <a href="{{ route('diagnosticos.index') }}" class="btn btn-outline-info float-right btn-sm">Volver a lista</a>
      <a href="{{route('diagnosticos.edit',$diagnostico->id)}}"class="btn btn-outline-success floar-right">Editar</a>
      <p>{{ $diagnostico->descripcion }}</p>
      
@endsection
