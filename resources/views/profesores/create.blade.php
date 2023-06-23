@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registro profesor</h1>
@stop

@section('content')
<form method="POST" action="{{route('profesores.store')}}" class="col-6">
    @csrf
    <div class="form-group">
      <label for="id">Codigo:</label>
      <input type="text" class="form-control" id="id" placeholder="Ingresa el ID" name="codprofesor">
    </div>
    <div class="form-group">
      <label for="nombre">Nombre:</label>
      <input type="text" class="form-control" id="nombre" placeholder="Ingresa el nombre" name="nomprofesor">
    </div>
    <div class="form-group">
        <label for="nombre">Catedra:</label>
        <input type="text" class="form-control" id="nombre" placeholder="Ingresa catedra" name="catprofesor">
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
