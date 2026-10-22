@extends('sistema.plantilla')
@section('main')
 <form action="{{route('mesas.store')}}" method="post">
  <label for='inventario'>Numero de inventario:</label>
  <input type='text' name='inventario' id='inventario'><br>
 <label for='aula_id'>AULA:</label>
  <select name="aula_id" id="">
   @foreach($aulas as $aula)
    <option value="{{$aula->id}}">{{$aula->nombre}}</option>
   @endforeach
  
  </select>

<br>



  @csrf
  <input type="submit" value="ENVIAR">

 </form>
@endsection