@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Estudiantes</h1>
@stop

@section('content')
<form method="POST" action="{{route('estudiantes.store')}}">
    @csrf
    <div class="row">
      <div class="col-6">
        <div class="form-group">
          <label for="codestudiante">Codigo:</label>
          <input type="number" class="form-control" id="codestudiante" placeholder="Ingresa el ID" name="codestudiante">
        </div>
        <div class="form-group">
          <label for="nombre">Nombre:</label>
          <input type="text" class="form-control" id="nombre" placeholder="Ingresa el nombre" name="nomestudiante">
        </div>
        <div class="form-group">
          <label for="edad">Edad:</label>
          <input type="number" class="form-control" id="edad" placeholder="Ingresa la edad" name="edaestudiante">
        </div>
        <div class="form-group">
            <label for="fecha">Fecha:</label>
            <input type="date" class="form-control" id="fecha" placeholder="Ingresa la edad" name="fechestudiante">
          </div>
        <div class="form-group">
          <label for="genero">Género</label>
          <select class="form-control" id="genero" name="sexestudiante">
            <option value="">Seleccionar</option>
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
            <option value="otro">Otro</option>
          </select>
        </div>
      </div>
      <div class="col-6">
        <div class="form-group">
          <label for="ciudad">Ciudad</label>
          <select class="form-control" id="ciudad" name="ciudad_codciudad">
            <option value="">Seleccionar</option>
            @foreach ($ciudades as $ciudad)
            <option value="{{$ciudad->codciudad}}">{{$ciudad->nomciudad}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="barrio">Barrio</label>
          <select class="form-control" id="barrio" name="barrio_codbarrio">
            <option value="">Seleccionar</option>
            @foreach ($barrios as $barrio)
            <option value="{{$barrio->codbarrio}}">{{$barrio->nombarrio}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="programa">Programa</label>
          <select class="form-control" id="programa" name="programa_codprograma">
            <option value="">Seleccionar</option>
            @foreach ($programas as $programa)
            <option value="{{$programa->codprograma}}">{{$programa->nomprograma}}</option>
            @endforeach
          </select>
        </div>
      </div>
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
