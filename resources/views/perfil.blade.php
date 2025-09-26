<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mi Cuenta - Market Delivery</title>
  <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>

<body class="cuenta-body">
  
  <div class="cuenta-container">
    <div class="header-content">
      <img src="{{ asset('Logo.png') }}" alt="Logo Market Delivery" class="logo" />
    </div>

    <h2>Mi Perfil</h2>

    <div class="perfil-box">
      <p><strong>Nombre:</strong> <span id="nombre-usuario">Anderson Seren</span></p>
      <p><strong>Correo:</strong> <span id="correo-usuario">AndersonSeren@ejemplo.co</span></p>
      <p><strong>Dirección:</strong> <span id="direccion-usuario">Calle 34 # 34-34</span></p>
    </div>

    <h3>Historial de pedidos</h3>
    <table class="tabla-historial">
      <thead>
        <tr>
          <th>Fecha</th>
          <th>Orden</th>
          <th>Total</th>
          <th>Estado</th>
        </tr>
      </thead>
      <tbody id="historial-pedidos">
        <!-- Se cargan desde JS -->
      </tbody>
    </table>
  </div>

  <script src="{{ asset('js/perfil.js') }}"></script>
</body>
</html>
