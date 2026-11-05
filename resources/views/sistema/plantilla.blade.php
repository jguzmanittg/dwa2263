<!DOCTYPE html>
<head>
 <title>SISTEMA</title>
<style>
nav ul {
    display: flex;
    justify-content: space-between;   
  }
nav li {
  display: inline-flex;
}

</style>
</head>

<body>
 <header>
  <nav>
  <ul>
   <li><a href="listar">AULAS</a></li>
   <li><a href="{{route('mesas.index')}}">MESAS</a></li>
   <li><a href="{{route('usuarios.index')}}">Usuarios</a></li>
   <li>
   @guest
    INVITADO 
    @else
      {{Auth::user()->nombre}}
      - <a href="{{route('logout')}}">SALIR</a>
   @endguest
   </li>
  </ul>
  </nav>
 </header>
 <main>
 @yield('main')
 </main>
 <footer>
 </footer>
</body>
</html>