<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mi Carrito - Market Delivery</title>
  <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body class="carrito-body">
  <div class="carrito-container">
    <div class="header-content">
      <img src="{{ asset('Logo.png') }}" alt="Logo" width="85" class="logo-medium" />
    </div>

    <h2>Carrito de compras</h2>
    <table id="tabla-carrito">
      <thead>
        <tr>
          <th>Producto</th>
          <th>Precio</th>
          <th>Cantidad</th>
          <th>Subtotal</th>
          <th>Eliminar</th>
        </tr>
      </thead>
      <tbody id="contenido-carrito">
        <!-- Los productos se cargarán aquí -->
      </tbody>
    </table>

    <div class="carrito-total">
      <p><strong>Total:</strong> $<span id="total-carrito">0</span></p>
      <a href="{{ url('/pagos') }}" class="btn">Ir a pagar</a>
    </div>
  </div>

  <script src="{{ asset('js/carrito.js') }}"></script>
</body>
</html>
