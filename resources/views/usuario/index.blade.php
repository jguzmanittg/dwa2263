@extends('sistema.plantilla')
@section('main')
 <table border="1">
  <thead>
   <th>Nombre</th>
   <th>Control</th>
   <th>Correo</th>
   <th>Opciones</th>
  </thead>
  <tbody>
   @forelse($todos as $uno)
   <tr>
    <td>
     <a href="{{route('usuarios.show',$uno->id)}}">{{$uno->nombre}}</a>
    </td>
    <td>
      {{$uno->control}}
    </td>
    <td>
      {{$uno->correo}}
    </td>
    <td>
      <a href="{{route('usuarios.edit',$uno->id)}}">EDITAR</a> -
      <form action="{{route('usuarios.destroy',$uno->id)}}" method="post" style="display:inline">
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
 <a href="{{route('usuarios.create')}}">AGREGAR</a>
@endsection