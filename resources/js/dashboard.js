

document.addEventListener("DOMContentLoaded", () => {
  // Datos simulados
  const estadisticas = {
    productos: 45,
    pedidos: 120,
    ventas: 7800000,
    usuarios: 320
  };

  // Crear contenedor de métricas
  const main = document.querySelector(".dashboard-main");
  const metricsSection = document.createElement("section");
  metricsSection.classList.add("dashboard-metrics");

  metricsSection.innerHTML = `
    <div class="metric-card">
      <i class="fa-solid fa-box"></i>
      <h3>Productos</h3>
      <p>${estadisticas.productos}</p>
    </div>
    <div class="metric-card">
      <i class="fa-solid fa-shopping-cart"></i>
      <h3>Pedidos</h3>
      <p>${estadisticas.pedidos}</p>
    </div>
    <div class="metric-card">
      <i class="fa-solid fa-dollar-sign"></i>
      <h3>Ventas</h3>
      <p>$${estadisticas.ventas.toLocaleString()}</p>
    </div>
    <div class="metric-card">
      <i class="fa-solid fa-users"></i>
      <h3>Usuarios</h3>
      <p>${estadisticas.usuarios}</p>
    </div>
  `;

  main.prepend(metricsSection);
});

