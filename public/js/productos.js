document.addEventListener('DOMContentLoaded', () => {
  const contenedor = document.getElementById('contenedor-productos');
  const inputBusqueda = document.getElementById('busqueda');
  const selectCategoria = document.getElementById('categoria');

  if (!contenedor || !inputBusqueda || !selectCategoria) {
    return; // no ejecutes nada si no es la página de productos
  }

  const productos = [
    { id: 1, nombre: "Auriculares Bluetooth", categoria: "tecnologia", precio: 90000, imagen: "https://static.vecteezy.com/system/resources/thumbnails/024/558/883/small_2x/black-wireless-headphones-isolated-on-transparent-background-ai-generated-png.png" },
    { id: 2, nombre: "Mouse Inalámbrico", categoria: "tecnologia", precio: 60000, imagen: "https://png.pngtree.com/png-clipart/20240811/original/pngtree-black-wireless-computer-mouse-png-image_15750761.png" },
    { id: 4, nombre: "Smartwatch Deportivo", categoria: "tecnologia", precio: 150000, imagen: "https://png.pngtree.com/png-vector/20240914/ourmid/pngtree-smart-sports-watch-with-iwatch-png-image_12910658.png" },
    { id: 5, nombre: "Cargador USB-C Rápido", categoria: "tecnologia", precio: 35000, imagen: "https://png.pngtree.com/png-vector/20240718/ourmid/pngtree-mobile-charging-cable-usb-png-image_13141467.png" },
    { id: 6, nombre: "Lámpara LED", categoria: "hogar", precio: 35000, imagen: "https://png.pngtree.com/png-vector/20230903/ourmid/pngtree-led-light-bulb-png-image_9951654.png" },
    { id: 7, nombre: "Olla a presión", categoria: "hogar", precio: 80000, imagen: "https://www.corbeta.com.co/media/catalog/product/7/7/7702073030511.png" },
    { id: 8, nombre: "Termo de acero", categoria: "hogar", precio: 28000, imagen: "https://png.pngtree.com/png-clipart/20250108/original/pngtree-a-stainless-steel-thermos-with-matte-finish-png-image_20108897.png" },
    { id: 9, nombre: "Set de vasos", categoria: "hogar", precio: 18000, imagen: "https://www.cesiro.com/cdn/shop/files/Set-6-pahare-de-sticla-transparente-model-buline-maroportocaliu-200-ml-1.png?v=1729591179" },
    { id: 10, nombre: "Almohada ortopédica", categoria: "hogar", precio: 45000, imagen: "https://tmecol.com/wp-content/uploads/2025/05/ALMOHADA-MEMORY-FOAM-CERVICAL-ESPUMA-INTELIGENTE-1.png" },
    { id: 11, nombre: "Camiseta Negra", categoria: "ropa", precio: 25000, imagen: "https://png.pngtree.com/png-vector/20241102/ourmid/pngtree-premium-black-t-shirt-mockup-png-image_14226805.png" },
    { id: 12, nombre: "Zapatillas Deportivas", categoria: "ropa", precio: 120000, imagen: "https://vader-prod.s3.amazonaws.com/1729256369-on-cloudswift-3-ad-67125b91bd799.png" },
    { id: 13, nombre: "Jeans Clásicos", categoria: "ropa", precio: 90000, imagen: "https://png.pngtree.com/png-clipart/20250207/original/pngtree-classic-blue-denim-jeans-with-a-straight-fit-and-rugged-texture-png-image_20377208.png" },
    { id: 14, nombre: "Chaqueta Liviana", categoria: "ropa", precio: 150000, imagen: "https://png.pngtree.com/png-vector/20240728/ourmid/pngtree-leather-mens-jacket-fashion-slim-fit-png-image_13261011.png" },
    { id: 15, nombre: "Gorra Casual", categoria: "ropa", precio: 20000, imagen: "https://png.pngtree.com/png-clipart/20250109/original/pngtree-plain-red-cap-for-casual-wear-png-image_18971483.png" },
    { id: 16, nombre: "Leche Entera x1L", categoria: "comestibles", precio: 4000, imagen: "https://supermercadolaestacion.com/31698-large_default/leche-alpina-x-1000ml-uht-entera.jpg" },
    { id: 17, nombre: "Pan Artesanal", categoria: "comestibles", precio: 2500, imagen: "https://png.pngtree.com/png-clipart/20240723/original/pngtree-aromatic-artisan-loaf--irresistible-bakery-creation-png-image_15618585.png" },
    { id: 18, nombre: "Banano x Kilo", categoria: "comestibles", precio: 3000, imagen: "https://png.pngtree.com/png-vector/20250227/ourmid/pngtree-bananas-organic-bright-yellow-in-bundle-png-image_15563427.png" },
    { id: 19, nombre: "Arroz x 1Kg", categoria: "comestibles", precio: 5000, imagen: "https://media.surtiplaza.co/dimen/7709990356311.png" },
    { id: 20, nombre: "Huevos (12 unidades)", categoria: "comestibles", precio: 8500, imagen: "https://tiendasisimo.com/wp-content/uploads/2023/10/212-huevos-aa-12-und-2.png" }
  ];

  function mostrarProductos(lista) {
    contenedor.innerHTML = '';

    if (lista.length === 0) {
      contenedor.innerHTML = '<p>No se encontraron productos.</p>';
      return;
    }

    lista.forEach(prod => {
      const div = document.createElement('div');
      div.classList.add('producto');
      div.innerHTML = `
        <img src="${prod.imagen}" alt="${prod.nombre}" class="producto-img">
        <h3>${prod.nombre}</h3>
        <p>Categoría: ${prod.categoria}</p>
        <p>Precio: $${prod.precio.toLocaleString()}</p>
        <button class="btn-agregar" data-id="${prod.id}">Agregar al carrito</button>
      `;
      contenedor.appendChild(div);
    });

    agregarEventosAgregar();
  }

  function filtrarProductos() {
    const texto = inputBusqueda.value.toLowerCase();
    const cat = selectCategoria.value;

    const filtrados = productos.filter(p => {
      const coincideTexto = p.nombre.toLowerCase().includes(texto);
      const coincideCategoria = cat === "todos" || p.categoria === cat;
      return coincideTexto && coincideCategoria;
    });

    mostrarProductos(filtrados);
  }

  function agregarEventosAgregar() {
    const botones = document.querySelectorAll('.btn-agregar');
    botones.forEach(boton => {
      boton.addEventListener('click', () => {
        const id = parseInt(boton.dataset.id);
        const producto = productos.find(p => p.id === id);
        agregarAlCarrito(producto);
        alert(`${producto.nombre} agregado al carrito`);
      });
    });
  }

  function agregarAlCarrito(producto) {
    let carrito = JSON.parse(localStorage.getItem('carrito')) || [];

    const existe = carrito.find(p => p.id === producto.id);

    if (existe) {
      existe.cantidad += 1;
    } else {
      carrito.push({ ...producto, cantidad: 1 });
    }

    localStorage.setItem('carrito', JSON.stringify(carrito));
  }

  // Eventos de búsqueda y filtros
  inputBusqueda.addEventListener('input', filtrarProductos);
  selectCategoria.addEventListener('change', filtrarProductos);

  // Mostrar todos al inicio
  mostrarProductos(productos);
});
