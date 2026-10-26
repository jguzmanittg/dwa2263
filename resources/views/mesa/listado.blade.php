@extends('sistema.plantilla')
@section('main')
 <table border="1">
  <thead>
   <th>Numero de Inventario</th>
   <th>En que aula esta</th>
   <th>Opciones</th>
  </thead>
  <tbody>
   @forelse($mesas as $mesa)
   <tr>
    <td>
     <a href="{{route('mesas.show',$mesa->id)}}">{{$mesa->inventario}}</a>
    </td>
    <td>

    {{$mesa->aula->nombre}}
    </td>
    <td>
      <a href="{{route('mesas.edit',$mesa->id)}}">EDITAR</a> -
      <form action="{{route('mesas.destroy',$mesa->id)}}" method="post" style="display:inline">
      @csrf
      @method('delete')
      <input type="submit" value="BORRAR">
      </form>
    </td>
   </tr>
   @empty

   @endforelse
  </tbody>
 </table>
 <a href="{{route('mesas.create')}}">AGREGAR</a>
@endsection