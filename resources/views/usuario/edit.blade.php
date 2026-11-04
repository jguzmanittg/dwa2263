@extends('sistema.plantilla')
@section('main')
 <form action="{{route('usuarios.update',$usuario->id)}}" method="post">
  @method('put')
  <label for='nombre'>nombre</label>
  <input type='text' name='nombre' id='nombre' value="{{$usuario->nombre}}"><br>
  <label for='control'>control</label>
  <input type='text' name='control' id='control' value="{{$usuario->control}}"><br>
  <label for='clave'>clave</label>
  <input type='text' name='clave' id='clave' value="{{$usuario->clave}}"><br>
  <label for='correo'>correo</label>
  <input type='text' name='correo' id='correo' value="{{$usuario->correo}}"><br>
  @csrf
  <input type="submit" value="ENVIAR">
 </form>
@endsection