let carrito = [];

function agregarAlCarrito(nombre, precio) {
  carrito.push({ nombre, precio });
  actualizarCarrito();
}

function actualizarCarrito() {
  const carritoBody = document.getElementById('carrito-body');
  const totalElement = document.getElementById('total');
  let total = 0;

  carritoBody.innerHTML = '';

  carrito.forEach(producto => {
    const row = document.createElement('tr');
    const nombreCell = document.createElement('td');
    const precioCell = document.createElement('td');

    nombreCell.textContent = producto.nombre;
    precioCell.textContent = `$${producto.precio.toFixed(2)}`;

    row.appendChild(nombreCell);
    row.appendChild(precioCell);
    carritoBody.appendChild(row);

    total += producto.precio;
  });

  totalElement.textContent = `$${total.toFixed(2)}`;
}

function realizarPedido() {
  if (carrito.length > 0) {
    // Lógica para realizar el pedido
    alert('Pedido realizado con éxito');
    carrito = [];
    actualizarCarrito();
  } else {
    alert('El carrito está vacío');
  }
}
