document.getElementById('form-login').addEventListener('submit', function (e) {
  e.preventDefault();

  // Obtener elementos
  const email = document.getElementById('email');
  const password = document.getElementById('password');
  const errorEmail = document.getElementById('error-email');
  const errorPassword = document.getElementById('error-password');

  // Reset mensajes
  errorEmail.style.display = 'none';
  errorPassword.style.display = 'none';

  let valido = true;

  // Validación de email
  if (!email.value.includes('@') || !email.value.includes('.')) {
    errorEmail.textContent = 'Por favor ingresa un correo válido.';
    errorEmail.style.display = 'block';
    valido = false;
  }

  // Validación de contraseña
  if (password.value.length < 6) {
    errorPassword.textContent = 'La contraseña debe tener al menos 6 caracteres.';
    errorPassword.style.display = 'block';
    valido = false;
  }

  if (valido) {
    alert("Inicio de sesión exitoso (simulado)");
    // Redireccionar o continuar con lógica de sesión
    // window.location.href = "dashboard.html";
  }
});
