<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Iniciar Sesión - Market Delivery</title>
  <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body class="login-body">
  <div class="login-container">
    <img src="{{ asset('Logo.png') }}" alt="Logo Market Delivery" width="100" class="logo-medium" />
    <h2>Iniciar Sesión</h2>

    
   <form id="form-login" novalidate> <label for="email">Correo electrónico</label> <input type="email" id="email" name="email" required placeholder="usuario@correo.com" /> <small class="error-message" id="error-email"></small> <label for="password">Contraseña</label> <input type="password" id="password" name="password" required minlength="6" placeholder="*********" /> <small class="error-message" id="error-password"></small> <a href="{{ url('/dashboard') }}" class="btn">Ingresar</a> </form>



    <p class="ayuda">¿No tienes cuenta? 
      <a href="{{ url('/registro') }}">Regístrate aquí</a>
    </p>
  </div>

  <script src="{{ asset('js/login.js') }}"></script>
</body>
</html>
