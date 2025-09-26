document.addEventListener("DOMContentLoaded", () => {
  const historial = [
    {
      fecha: "2025-06-24",
      orden: "#000123",
      total: 150000,
      estado: "Entregado"
    },
    {
      fecha: "2025-06-10",
      orden: "#000099",
      total: 80000,
      estado: "En camino"
    }
  ];

  const tbody = document.getElementById("historial-pedidos");
  historial.forEach(pedido => {
    const fila = document.createElement("tr");
    fila.innerHTML = `
      <td>${pedido.fecha}</td>
      <td>${pedido.orden}</td>
      <td>$${pedido.total.toLocaleString()}</td>
      <td>${pedido.estado}</td>
    `;
    tbody.appendChild(fila);
  });
});
