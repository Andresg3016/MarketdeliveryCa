<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Comprobante de Compra - Market Delivery</title>
  <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body class="ticket-body">
  <div class="ticket-container">
    <img src="{{ asset('Logo.png') }}" alt="Logo Market Delivery" class="logo-ticket" />
    <h2>Comprobante de Compra</h2>

    <p><strong>Orden #:</strong> <span id="orden-id">#000123</span></p>
    <p><strong>Cliente:</strong> <span id="cliente-nombre">Juan Pérez</span></p>
    <p><strong>Fecha:</strong> <span id="fecha-compra">2025-06-25</span></p>

    <h3>Productos comprados</h3>
    <ul id="lista-productos">
      <li>Mouse Inalámbrico - $60.000</li>
      <li>Auriculares Bluetooth - $90.000</li>
    </ul>

    <p><strong>Total pagado:</strong> <span id="total">$150.000</span></p>

    <button onclick="window.print()" class="btn">Imprimir / Guardar PDF</button>
  </div>

  <script src="{{ asset('js/ticket.js') }}"></script>
</body>
</html>
