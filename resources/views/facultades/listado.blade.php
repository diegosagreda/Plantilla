@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Facultades</h1>


@stop

@section('content')


  <div class="container">
    <h2>Ejemplo de tabla con Bootstrap</h2>
    <a class="btn btn-primary" href="/facultades/create">Nuevo</a>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Opciones</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($facultades as $facultad)
        <tr>
          <td>{{$facultad->codfacultad}}</td>
          <td>{{$facultad->nomfacultad}}</td>
          <td>
            <button class="btn btn-primary">Editar</button>
            <button class="btn btn-danger">Eliminar</button>
          </td>
        </tr>

        @empty
            <p>No hay registros</p>
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
