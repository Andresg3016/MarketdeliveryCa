<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Error 404 - Página no encontrada</title>
  <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
  <style>
    .error-container {
      text-align: center;
      padding: 60px 20px;
    }
    .error-container h1 {
      font-size: 100px;
      color: #e74c3c;
      margin-bottom: 10px;
    }
    .error-container h2 {
      font-size: 28px;
      margin-bottom: 20px;
    }
    .error-container p {
      font-size: 18px;
      color: #555;
      margin-bottom: 30px;
    }
    .error-container a {
      text-decoration: none;
      background-color: #f5bd27;
      color: #fff;
      padding: 12px 24px;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }
    .error-container a:hover {
      background-color: #eed9a1;
    }
  </style>
</head>
<body>

  <header>
    <div class="header-content">
      <img src="{{ asset('Logo.png') }}" alt="Logo Market Delivery" class="logo" />
      <h1>Market Delivery</h1>
      <nav>
        <ul>
          <li><a href="{{ url('/') }}">Inicio</a></li>
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

  <main class="error-container">
    <h1>404</h1>
    <h2>Página no encontrada</h2>
    <p>Lo sentimos, la página que estás buscando no existe o fue movida.</p>
    <a href="{{ url('/') }}">Volver al inicio</a>
  </main>

  <footer>
    <p>&copy; 2025 Market Delivery. Todos los derechos reservados.</p>
  </footer>

</body>
</html>
