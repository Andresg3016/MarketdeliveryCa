<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registro - Market Delivery</title>
  <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body class="registro-body">

  <div class="formulario-container">
    <h2>Crear cuenta</h2>
    <form id="form-registro" novalidate>
      <label for="nombre">Nombre completo</label>
      <input type="text" id="nombre" required />
      <small class="error-message" id="error-nombre"></small>

      <label for="correo">Correo electrónico</label>
      <input type="email" id="correo" required />
      <small class="error-message" id="error-correo"></small>

      <label for="clave">Contraseña</label>
      <input type="password" id="clave" required />
      <small class="error-message" id="error-clave"></small>

      <label for="confirmar">Confirmar contraseña</label>
      <input type="password" id="confirmar" required />
      <small class="error-message" id="error-confirmar"></small>

      <button type="submit" class="btn">Registrarme</button>
    </form>

    <p>¿Ya tienes cuenta? 
      <a href="{{ url('/login') }}">Inicia sesión</a>
    </p>
  </div>

  <script src="{{ asset('js/registro.js') }}"></script>
</body>
</html>
