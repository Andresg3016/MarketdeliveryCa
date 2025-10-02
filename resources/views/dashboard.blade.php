<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Dashboard - Market Delivery</title>
  <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
</head>
<body class="dashboard-body">

  <header class="dashboard-header">
    <img src="{{ asset('Logo.png') }}" alt="Logo" width="130" class="logo-medium">
    <h1>Bienvenid@</h1>
  </header>

  <main class="dashboard-main">
    <section class="dashboard-grid">
      <div class="card">
        <i class="fa-solid fa-box fa-2x icon"></i>
        <h2>Productos</h2>
        <p>Revisa y gestiona tu inventario personal.</p>
        <a href="{{ url('/productos') }}" class="btn">Ver productos</a>
      </div>

      <div class="card">
        <i class="fa-solid fa-shopping-cart fa-2x icon"></i>
        <h2>Mi Carrito</h2>
        <p>Consulta y edita tus productos agregados.</p>
        <a href="{{ url('/carrito') }}" class="btn">Ir al carrito</a>
      </div>
    
      <div class="card">
        <i class="fa-solid fa-user fa-2x icon"></i>
        <h2>Mi Perfil</h2>
        <p>Actualiza tu información personal.</p>
        <a href="{{ url('/perfil') }}" class="btn">Editar perfil</a>
      </div>

      <div class="card">
        <i class="fa-solid fa-headset fa-2x icon"></i>
        <h2>Soporte</h2>
        <p>¿Tienes dudas o problemas? Estamos aquí para ayudarte.</p>
        <a href="{{ url('/pqr') }}" class="btn">Centro de ayuda</a>
      </div>
    
      <div class="card">
        <i class="fa-solid fa-user-shield fa-2x icon"></i>
        <h2>Datatable</h2>
        <p>Accede al datatable</p>
        <a href="{{ url('/datatable') }}" class="btn">Panel Datatable</a>
        </div>
    </section>
  </main>
  
  <script src="{{ asset('js/dashboard.js') }}"></script>

</body>
</html>
