<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <p>
  @if (\Session::has('mensaje'))
   <div>{!! \Session::get('mensaje') !!}</div>
  @endif
 </p>
 <form action="{{route('agregar')}}" method="post">
 <label for='nombre'>nombre</label>
 <input type='text' name='nombre' id='nombre' value="{{old('nombre')}}"><br>
 <label for='control'>control</label>
 <input type='text' name='control' id='control' value="{{old('control')}}"><br>
 <label for='clave'>clave</label>
 <input type='text' name='clave' id='clave' value="{{old('clave')}}"><br>
 <label for='correo'>correo</label>
 <input type='text' name='correo' id='correo'><br>
 <input type="submit" value="Registrar">
 @csrf
 </form>
</body>
</html>