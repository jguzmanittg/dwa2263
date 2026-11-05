<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Login</title>
</head>
<body>
@if (\Session::has('mensaje'))
            <div>{!! \Session::get('mensaje') !!}</div>
@endif
 <form action="{{route('login2')}}" method="post">
  <label for='control'>control</label>
  <input type='text' name='control' id='control' value="{{old('control')}}"><br>
  <label for='clave'>clave</label>
  <input type='text' name='clave' id='clave'><br>
  @csrf
  <input type="submit" value="Enviar">
 </form>
</body>
</html>