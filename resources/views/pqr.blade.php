<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Formulario de PQR - Market Delivery</title>
  <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body class="pqr-body">
  <div class="formulario-container">
    <h2>Formulario de PQR</h2>
    <form id="form-pqr" novalidate>
      <label for="nombre">Nombre completo</label>
      <input type="text" id="nombre" required />
      <small class="error-message" id="error-nombre"></small>

      <label for="correo">Correo electrónico</label>
      <input type="email" id="correo" required />
      <small class="error-message" id="error-correo"></small>

      <label for="tipo">Tipo de solicitud</label>
      <select id="tipo" required>
        <option value="">Selecciona una opción</option>
        <option value="peticion">Petición</option>
        <option value="queja">Queja</option>
        <option value="reclamo">Reclamo</option>
      </select>
      <small class="error-message" id="error-tipo"></small>

      <label for="mensaje">Mensaje</label>
      <textarea id="mensaje" rows="5" required></textarea>
      <small class="error-message" id="error-mensaje"></small>

      <button type="submit" class="btn">Enviar</button>
    </form>
  </div>

  <script src="{{ asset('js/pqr.js') }}"></script>
</body>
</html>
