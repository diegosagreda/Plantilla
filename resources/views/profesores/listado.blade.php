@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Profesores</h1>


@stop

@section('content')
    <p>Listado de Profesores</p>
    <div class="container">
        <a href="{{ route('profesores.create')}}" class="btn btn-primary">Nuevo</a>
        <table class="table">
          <thead>
            <tr>
              <th>Código</th>
              <th>Nombre</th>
              <th>Cátedra</th>
              <th>Acción</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($profesores as $profesor )

            <tr>
              <td>{{$profesor->codprofesor}}</td>
              <td>{{$profesor->nomprofesor}}</td>
              <td>{{$profesor->catprofesor}}</td>
              <td>
                <form method="POST" action="{{ route('profesores.destroy',$profesor->codprofesor) }}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="Eliminar" />
                </form>
              </td>
            </tr>
            @empty
                <p>No hay profesores registrados</p>
            @endforelse

          </tbody>
        </table>
      </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
