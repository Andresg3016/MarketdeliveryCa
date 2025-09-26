document.addEventListener("DOMContentLoaded", () => {
  const cuerpo = document.getElementById("contenido-carrito");
  const totalSpan = document.getElementById("total-carrito");

  function cargarCarrito() {
    const carrito = JSON.parse(localStorage.getItem("carrito")) || [];
    cuerpo.innerHTML = "";
    let total = 0;

    carrito.forEach((item, index) => {
      const subtotal = item.precio * item.cantidad;
      total += subtotal;

      const fila = document.createElement("tr");
      fila.innerHTML = `
        <td>${item.nombre}</td>
        <td>$${item.precio.toLocaleString()}</td>
        <td>${item.cantidad}</td>
        <td>$${subtotal.toLocaleString()}</td>
        <td><button class="btn-eliminar" data-index="${index}">🗑️</button></td>
      `;
      cuerpo.appendChild(fila);
    });

    totalSpan.textContent = total.toLocaleString();
    asignarEventosEliminar();
  }

  function asignarEventosEliminar() {
    const botones = document.querySelectorAll(".btn-eliminar");
    let carrito = JSON.parse(localStorage.getItem("carrito")) || [];

    botones.forEach(btn => {
      btn.addEventListener("click", e => {
        const index = e.target.getAttribute("data-index");
        carrito.splice(index, 1);
        localStorage.setItem("carrito", JSON.stringify(carrito));
        cargarCarrito();
      });
    });
  }

  cargarCarrito();
});
