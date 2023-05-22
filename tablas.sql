-- Tabla de Categorías
CREATE TABLE Categorias (
  id_categoria INT PRIMARY KEY,
  nombre VARCHAR(50)
);

-- Tabla de Zapatos para Niño
CREATE TABLE zapatos_ninio (
  id_zapato INT PRIMARY KEY,
  id_categoria INT,
  nombre VARCHAR(100),
  descripcion TEXT,
  precio DECIMAL(10, 2),
  talla_id INT,
  FOREIGN KEY (id_categoria) REFERENCES Categorias(id_categoria),
  FOREIGN KEY (talla_id) REFERENCES talla_zapatos(id_talla)
);

-- Tabla de Zapatos para Adulto
CREATE TABLE zapatos_adulto (
  id_zapato INT PRIMARY KEY,
  id_categoria INT,
  nombre VARCHAR(100),
  precio DECIMAL(10, 2),
  talla_id INT,
  cantidad INT,
  FOREIGN KEY (id_categoria) REFERENCES Categorias(id_categoria),
  FOREIGN KEY (talla_id) REFERENCES talla_zapatos(id_talla)
);

-- Tabla de Tallas de Zapatos
CREATE TABLE talla_zapatos (
  id_talla INT PRIMARY KEY,
  talla VARCHAR(10)
);

-- Tabla de Clientes
CREATE TABLE clientes (
  id_cliente INT PRIMARY KEY,
  nombre VARCHAR(50),
  apellidos VARCHAR(50),
  direccion VARCHAR(100),
  departamento VARCHAR(50),
  nit VARCHAR(15),
  correo VARCHAR(50),
  telefono VARCHAR(20)
);

-- Tabla de Factura
CREATE TABLE factura (
  id_factura INT PRIMARY KEY,
  id_cliente INT,
  fecha_factura DATE,
  total DECIMAL(10, 2),
  FOREIGN KEY (id_cliente) REFERENCES clientes(id_cliente)
);

-- Tabla de Pedidos
CREATE TABLE pedido (
  id_pedido INT PRIMARY KEY,
  id_cliente INT,
  fecha_pedido DATE,
  FOREIGN KEY (id_cliente) REFERENCES clientes(id_cliente)
);

-- Tabla de Detalle de Pedido
CREATE TABLE detalle_pedido (
  id_detalle INT PRIMARY KEY,
  id_pedido INT,
  id_zapato INT,
  cantidad INT,
  precio_unitario DECIMAL(10, 2),
  FOREIGN KEY (id_pedido) REFERENCES pedido(id_pedido),
  FOREIGN KEY (id_zapato) REFERENCES zapatos_ninio(id_zapato),
  FOREIGN KEY (id_zapato) REFERENCES zapatos_adulto(id_zapato)
);
