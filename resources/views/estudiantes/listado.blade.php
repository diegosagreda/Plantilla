@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Estudiantes</h1>


@stop

@section('content')
    <p>Listado de Estudiantes</p>
    <a class="btn btn-primary" href="{{ route('estudiantes.create')}}">Nuevo</a>
    <table class="table table-striped">
        <thead>
          <tr>
            <th>Código</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Fecha de Nacimiento</th>
            <th>Género</th>
            <th>Ciudad</th>
            <th>Barrio</th>
            <th>Programa</th>
            <th>Acción</th>
          </tr>
        </thead>
        <tbody>
          <!-- Aquí puedes agregar filas dinámicamente con los datos -->
          @forelse ($estudiantes as $estudiante)
            <tr>
                <td>{{$estudiante->codestudiante}}</td>
                <td>{{$estudiante->nomestudiante}}</td>
                <td>{{$estudiante->edaestudiante}}</td>
                <td>{{$estudiante->fechestudiante}}</td>
                <td>{{$estudiante->sexestudiante}}</td>
                <td>{{$estudiante->ciudad->nomciudad}}</td>
                <td>{{$estudiante->barrio->nombarrio}}</td>
                <td>{{$estudiante->programa->nomprograma}}</td>
                <td>

                    <form method="POST" action="{{ route('estudiantes.destroy',$estudiante->codestudiante) }}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="Eliminar" />
                    </form>
                </td>
            </tr>
          @empty
              <p>No hay registros</p>
          @endforelse
        </tbody>
      </table>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
