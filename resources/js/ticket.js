document.addEventListener('DOMContentLoaded', () => {
  // Dato reales localStorage o backend (Cuando nos enseñen)
  document.getElementById('orden-id').textContent = "#000456";
  document.getElementById('cliente-nombre').textContent = "Ana Martínez";
  document.getElementById('fecha-compra').textContent = new Date().toLocaleDateString();

  const lista = document.getElementById('lista-productos');
  lista.innerHTML = `
    <li>Smartwatch - $120.000</li>
    <li>Cargador USB-C - $30.000</li>
  `;

  document.getElementById('total').textContent = "$150.000";
});
