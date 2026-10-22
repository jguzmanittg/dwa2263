@extends('sistema.plantilla')
@section('main')
 MOSTRAR TODAS LAS AULAS
<table border = "1">
 <thead>
  <th>id</th>
  <th>nombre</th>
  <th>acciones</th>
 </thead>
 <tbody>

@forelse($aulas as $aula )
 <tr>
   <td>{{$aula->id}}</td>
   <td>{{$aula->nombre}}</td>
  <td> 
    <a href="{{route('aulas.actualizar',  $aula->id )}}">ACTUALIZAR</a>
           - 
    <form action="{{route('aulas.borrar',  $aula->id )}}" method="post">
     <input type="submit" value="BORRAR">
     @csrf
     @method('DELETE')
    </form>
           
   </td>
 </tr> 
@empty
 <tr>
<td colspan="3">VACIO</td>
 </tr> 


@endforelse
 </tbody>
</table>

<HR>
<a href="preagregar">AGREGAR</a>

@endsection