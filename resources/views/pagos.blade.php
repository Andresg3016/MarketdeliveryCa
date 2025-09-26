<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Formulario de Pago</title>
  <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body class="pago-body">
  <div class="formulario-container">
    <div class="header-content">
      <img src="{{ asset('Logo.png') }}" alt="Logo Market Deliver" class="logo" />
    </div>

    <h2>Formulario de Pago</h2>
    <form id="form-pago" novalidate>
      <label for="nombre">Nombre completo</label>
      <input type="text" id="nombre" required />
      <small class="error-message" id="error-nombre"></small>

      <label for="email">Correo electrónico</label>
      <input type="email" id="email" required />
      <small class="error-message" id="error-email"></small>

      <label for="tarjeta">Número de tarjeta</label>
      <input type="text" id="tarjeta" maxlength="16" required />
      <small class="error-message" id="error-tarjeta"></small>

      <label for="fecha">Fecha de vencimiento</label>
      <input type="month" id="fecha" required />
      <small class="error-message" id="error-fecha"></small>

      <label for="cvv">CVV</label>
      <input type="text" id="cvv" maxlength="4" required />
      <small class="error-message" id="error-cvv"></small>

      <a href="{{ url('/compra-finalizada') }}" class="btn">Pagar ahora</a>
    </form>
  </div>

  <script src="{{ asset('js/pagos.js') }}"></script>
</body>
</html>
