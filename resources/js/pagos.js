document.getElementById('form-pago').addEventListener('submit', function (e) {
  e.preventDefault();

  const nombre = document.getElementById('nombre');
  const email = document.getElementById('email');
  const tarjeta = document.getElementById('tarjeta');
  const fecha = document.getElementById('fecha');
  const cvv = document.getElementById('cvv');

  const errores = {
    nombre: document.getElementById('error-nombre'),
    email: document.getElementById('error-email'),
    tarjeta: document.getElementById('error-tarjeta'),
    fecha: document.getElementById('error-fecha'),
    cvv: document.getElementById('error-cvv')
  };

  // Limpiar errores
  Object.values(errores).forEach(e => e.style.display = 'none');

  let valido = true;

  if (nombre.value.trim().length < 3) {
    errores.nombre.textContent = "Ingresa tu nombre completo.";
    errores.nombre.style.display = "block";
    valido = false;
  }

  if (!email.value.includes("@") || !email.value.includes(".")) {
    errores.email.textContent = "Correo electrónico no válido.";
    errores.email.style.display = "block";
    valido = false;
  }

  if (!/^\d{16}$/.test(tarjeta.value)) {
    errores.tarjeta.textContent = "La tarjeta debe tener 16 dígitos.";
    errores.tarjeta.style.display = "block";
    valido = false;
  }

  if (!fecha.value) {
    errores.fecha.textContent = "Selecciona una fecha válida.";
    errores.fecha.style.display = "block";
    valido = false;
  }

  if (!/^\d{3,4}$/.test(cvv.value)) {
    errores.cvv.textContent = "CVV inválido.";
    errores.cvv.style.display = "block";
    valido = false;
  }

  if (valido) {
    alert("Pago procesado exitosamente.");
    
    
  }
});
