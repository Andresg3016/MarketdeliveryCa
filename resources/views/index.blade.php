<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Market Delivery</title>
  <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>

    <header>
      <div class="header-content">
        <img src="{{ asset('Logo.png') }}" alt="Logo" width="130" class="logo-medium" />
        <h1>Market Delivery</h1>
        <nav>
          <ul>
            <li><a href="{{ url('login') }}">Inicio de sesión</a></li>
            <li><a href="{{ url('productos') }}">Productos</a></li>
            <li><a href="{{ url('carrito') }}">Carrito</a></li>
            <li><a href="{{ url('perfil') }}">Perfil</a></li>
            <li><a href="{{ url('dashboard') }}">Dashboard</a></li>
            <li><a href="{{ url('error404') }}">Admin</a></li>
            <li><a href="{{ url('error500') }}">Mapa</a></li>
          </ul>
        </nav>
      </div>
    </header>


  <main>
    <section id="busqueda" class="busqueda-principal">
      <h2>¿Qué estás buscando hoy?</h2>
      <div class="buscador-form">
        <input type="text" id="input-busqueda" placeholder="Buscar producto..." />
        <button class="btn">Buscar</button>
      </div>
    </section>

    <section id="destacados">
      <h2>Productos Destacados</h2>
      <div class="productos" id="productos-destacados">
        <!-- Productos destacados se insertarán dinámicamente con JS -->
      </div>
    </section>
  </main>

  <footer>
    <p>&copy; 2025 Market Delivery. Todos los derechos reservados.</p>
  </footer>

  <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
