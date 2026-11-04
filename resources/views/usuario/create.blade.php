@extends('sistema.plantilla')
@section('main')
 <form action="{{route('usuarios.store')}}" method="post">
    <label for='nombre'>nombre</label>
    <input type='text' name='nombre' id='nombre'><br>
    <label for='control'>control</label>
    <input type='text' name='control' id='control'><br>
    <label for='clave'>clave</label>
    <input type='text' name='clave' id='clave'><br>
    <label for='correo'>correo</label>
    <input type='text' name='correo' id='correo'><br>
    @csrf
    <input type="submit" value="ENVIAR">
  </form>
@endsection