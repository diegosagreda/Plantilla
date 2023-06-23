@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Programas</h1>


@stop

@section('content')
    <p>Listado de Programas</p>
    <div class="container">
        <a href="{{ route('programas.create')}}" class="btn btn-primary">Nuevo</a>
        <table class="table">
          <thead>
            <tr>
              <th>Codigo</th>
              <th>Nombre</th>
              <th>Facultad</th>
              <th>Acción</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($programas as $programa)
                <tr>
                <td>{{$programa->codprograma}}</td>
                <td>{{$programa->nomprograma}}</td>
                <td>{{$programa->facultad->nomfacultad}}</td>
                <td>

                    <form method="POST" action="{{ route('programas.destroy',$programa->codprograma) }}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="Eliminar" />
                    </form>
                </td>
                </tr>
            @empty
                <p>No hay programas</p>
            @endforelse
            <!-- Puedes agregar más filas según sea necesario -->
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
