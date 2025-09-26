document.getElementById('form-pqr').addEventListener('submit', function (e) {
  e.preventDefault();

  const nombre = document.getElementById('nombre');
  const correo = document.getElementById('correo');
  const tipo = document.getElementById('tipo');
  const mensaje = document.getElementById('mensaje');

  const errores = {
    nombre: document.getElementById('error-nombre'),
    correo: document.getElementById('error-correo'),
    tipo: document.getElementById('error-tipo'),
    mensaje: document.getElementById('error-mensaje')
  };

  Object.values(errores).forEach(e => e.style.display = 'none');

  let valido = true;

  if (nombre.value.trim().length < 3) {
    errores.nombre.textContent = 'Por favor ingresa tu nombre.';
    errores.nombre.style.display = 'block';
    valido = false;
  }

  if (!correo.value.includes('@') || !correo.value.includes('.')) {
    errores.correo.textContent = 'Correo electrónico inválido.';
    errores.correo.style.display = 'block';
    valido = false;
  }

  if (tipo.value === '') {
    errores.tipo.textContent = 'Selecciona el tipo de solicitud.';
    errores.tipo.style.display = 'block';
    valido = false;
  }

  if (mensaje.value.trim().length < 10) {
    errores.mensaje.textContent = 'El mensaje debe tener al menos 10 caracteres.';
    errores.mensaje.style.display = 'block';
    valido = false;
  }

  if (valido) {
    alert("Tu solicitud ha sido enviada. Gracias por contactarnos.");
    // Aquí podrías enviar datos a un servidor o limpiar el formulario
    // this.reset();
  }
});
