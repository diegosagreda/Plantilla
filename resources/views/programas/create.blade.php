@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registro programa</h1>
@stop

@section('content')
<form method="POST" action="{{route('programas.store')}}" class="col-6">
    @csrf
    <div class="form-group">
      <label for="id">Codigo:</label>
      <input type="text" class="form-control" id="id" placeholder="Ingresa el ID" name="codprograma">
    </div>
    <div class="form-group">
      <label for="nombre">Nombre:</label>
      <input type="text" class="form-control" id="nombre" placeholder="Ingresa el nombre" name="nomprograma">
    </div>
    <div class="form-group">
        <label for="facultad">Facultad</label>
        <select class="form-control" id="facultad" name="facultad_codfacultad">
          <option value="">Seleccionar</option>
          @foreach ($facultades as $facultad)
          <option value="{{$facultad->codfacultad}}">{{$facultad->nomfacultad}}</option>
          @endforeach
        </select>
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
