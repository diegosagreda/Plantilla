@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar facultad Facultades</h1>
@stop

@section('content')
<form method="POST" action="{{route('facultades.update', $facultad->codfacultad)}}" class="col-6">
    @csrf
    @method("PUT")
    <div class="form-group">
      <label for="id">ID:</label>
      <input value="{{$facultad->codfacultad}}" type="text" class="form-control" id="id" placeholder="Ingresa el ID" name="codfacultad">
    </div>
    <div class="form-group">
      <label for="nombre">Nombre:</label>
      <input  value="{{$facultad->nomfacultad}}" type="text" class="form-control" id="nombre" placeholder="Ingresa el nombre" name="nomfacultad">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
