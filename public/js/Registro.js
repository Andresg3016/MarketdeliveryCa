document.getElementById('form-registro').addEventListener('submit', function (e) {
  e.preventDefault();

  const nombre = document.getElementById('nombre');
  const correo = document.getElementById('correo');
  const clave = document.getElementById('clave');
  const confirmar = document.getElementById('confirmar');

  const errores = {
    nombre: document.getElementById('error-nombre'),
    correo: document.getElementById('error-correo'),
    clave: document.getElementById('error-clave'),
    confirmar: document.getElementById('error-confirmar')
  };

  Object.values(errores).forEach(e => e.style.display = 'none');

  let valido = true;

  if (nombre.value.trim().length < 3) {
    errores.nombre.textContent = 'Ingresa tu nombre completo.';
    errores.nombre.style.display = 'block';
    valido = false;
  }

  if (!correo.value.includes('@') || !correo.value.includes('.')) {
    errores.correo.textContent = 'Correo electrónico inválido.';
    errores.correo.style.display = 'block';
    valido = false;
  }

  if (clave.value.length < 6) {
    errores.clave.textContent = 'La contraseña debe tener al menos 6 caracteres.';
    errores.clave.style.display = 'block';
    valido = false;
  }

  if (clave.value !== confirmar.value) {
    errores.confirmar.textContent = 'Las contraseñas no coinciden.';
    errores.confirmar.style.display = 'block';
    valido = false;
  }

  if (valido) {
    alert("Registro exitoso. Puedes iniciar sesión.");
    //datos al backend o localStorage
    
  }
});
