@extends('sistema.plantilla')
@section('main')
 <form action="{{route('mesas.update',$mesa->id)}}" method="post">
 @method('put')
  <label for='inventario'>Numero de inventario:</label>
  <input type='text' name='inventario' id='inventario' value="{{$mesa->inventario}}"><br>
  @csrf
  <input type="submit" value="ENVIAR">

 </form>
@endsection