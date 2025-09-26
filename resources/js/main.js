document.addEventListener("DOMContentLoaded", () => {
  const contenedor = document.getElementById("productos-destacados");

  if (contenedor) {  // ✅ Solo corre si existe
    const productos = [
      {
        id: 1,
        nombre: "Auriculares Bluetooth",
        precio: 90000,
        imagen: "https://png.pngtree.com/png-vector/20250321/ourmid/pngtree-wireless-headphone-png-image_15830312.png" 
      },
      {
        id: 2,
        nombre: "Olla a presión",
        precio: 80000,
        imagen: "https://www.corbeta.com.co/media/catalog/product/7/7/7702073030511.png"
      },
      {
        id: 3,
        nombre: "Smartwatch Deportivo",
        precio: 150000,
        imagen: "https://png.pngtree.com/png-vector/20240731/ourmid/pngtree-digital-display-equipped-smartwatch-on-no-background-png-image_13162750.png"
      },
      {
        id: 4,
        nombre: "Zapatillas Deportivas",
        precio: 120000,
        imagen: "https://vader-prod.s3.amazonaws.com/1729256369-on-cloudswift-3-ad-67125b91bd799.png"
      }
    ];

    productos.forEach(prod => {
      const div = document.createElement("div");
      div.classList.add("producto");
      div.innerHTML = `
        <img src="${prod.imagen}" alt="${prod.nombre}">
        <h3>${prod.nombre}</h3>
        <p>Precio: $${prod.precio.toLocaleString()}</p>
        <button class="btn-agregar btn" data-id="${prod.id}">Agregar al carrito</button>
      `;
      contenedor.appendChild(div);
    });

    // Delegación de eventos
    contenedor.addEventListener("click", e => {
      if (e.target.classList.contains("btn-agregar")) {
        const id = parseInt(e.target.getAttribute("data-id"));
        const producto = productos.find(p => p.id === id);
        agregarAlCarrito(producto);
      }
    });

    function agregarAlCarrito(producto) {
      let carrito = JSON.parse(localStorage.getItem("carrito")) || [];

      const existente = carrito.find(item => item.id === producto.id);
      if (existente) {
        existente.cantidad += 1;
      } else {
        carrito.push({ ...producto, cantidad: 1 });
      }

      localStorage.setItem("carrito", JSON.stringify(carrito));
      alert(`${producto.nombre} se agregó al carrito`);
    }
  }

  // Menú hamburguesa (esto sí puede ser global)
  const toggleBtn = document.querySelector(".menu-toggle");
  const navList = document.querySelector(".nav-list");

  if (toggleBtn && navList) {
    toggleBtn.addEventListener("click", () => {
      navList.classList.toggle("activo");
    });
  }
});
