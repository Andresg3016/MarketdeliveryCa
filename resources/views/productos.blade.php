<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Productos - Market Delivery</title>
  <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>

  <header>
    <div class="header-content">
      <img src="{{ asset('Logo.png') }}" alt="Logo" width="130" class="logo-medium" />
      <h1>Market Delivery</h1>
      <nav>
        <ul>
          <li><a href="{{ url('/index') }}">Inicio</a></li>
          <li><a href="{{ url('/productos') }}">Productos</a></li>
          <li><a href="{{ url('/carrito') }}">Carrito</a></li>
          <li><a href="{{ url('/perfil') }}">Perfil</a></li>
          <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
          <li><a href="{{ url('/admin') }}">Admin</a></li>
          <li><a href="{{ url('/mapa') }}">Mapa</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main>
    <section id="filtros">
      <input type="text" id="busqueda" placeholder="Buscar producto..." />
      <select id="categoria">
        <option value="todos">Catálogo de productos</option>
        <option value="tecnologia">Tecnología</option>
        <option value="hogar">Hogar</option>
        <option value="ropa">Ropa</option>
        <option value="comestibles">Comestibles</option>
      </select>
    </section>

    <section id="listado-productos">
      <h2>Resultados</h2>
      <div class="productos" id="contenedor-productos">
        <!-- Aquí se insertan los productos con imagen vía JS -->
      </div>
    </section>
  </main>

  <footer>
    <p>&copy; 2025 Market Delivery. Todos los derechos reservados.</p>
  </footer>

  <script src="{{ asset('js/productos.js') }}"></script>
  <script src="{{ asset('js/carrito.js') }}"></script>
</body>
</html>
