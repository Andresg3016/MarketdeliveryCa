<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Compra Exitosa - Market Delivery</title>
  <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
  <style>
    .confirmacion-container {
      text-align: center;
      padding: 60px 20px;
    }
    .confirmacion-container h1 {
      font-size: 60px;
      color: #27ae60;
      margin-bottom: 10px;
    }
    .confirmacion-container p {
      font-size: 18px;
      color: #555;
      margin-bottom: 25px;
    }
    .confirmacion-container a {
      text-decoration: none;
      background-color: #3498db;
      color: #fff;
      padding: 12px 24px;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }
    .confirmacion-container a:hover {
      background-color: #2980b9;
    }
    .check-icon {
      font-size: 80px;
      color: #27ae60;
      margin-bottom: 20px;
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
          <li><a href="{{ url('/admin') }}">Admin</a></li>
          <li><a href="{{ url('/mapa') }}">Mapa</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main class="confirmacion-container">
    <div class="check-icon">✅</div>
    <h1>¡Compra realizada con éxito!</h1>
    <p>Gracias por tu pedido. Te enviaremos un correo con los detalles de tu compra.</p>
    <p>Tu pedido está siendo preparado y pronto estará en camino.</p>
    <a href="{{ url('/') }}">Volver al inicio</a>
  </main>

  <footer>
    <p>&copy; 2025 Market Delivery. Todos los derechos reservados.</p>
  </footer>

</body>
</html>
