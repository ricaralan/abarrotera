CREATE DATABASE abarrotera;
use abarrotera;

CREATE TABLE usuario(
id_usuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
usu_nombres VARCHAR(30),
usu_apellidos VARCHAR(30),
usu_usuario VARCHAR(30),
usu_contrasena VARCHAR(30),
usu_rol VARCHAR(15)
);

CREATE TABLE proveedor(
id_proveedor INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
prv_nombre VARCHAR(30),
prv_tel VARCHAR(30),
prv_email VARCHAR(40),
prv_direccion VARCHAR(40)
);

CREATE TABLE producto(
id_producto INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
pro_id_proveedor INT NOT NULL,
pro_nombre VARCHAR(30),
pro_costo_unidad double,
pro_precio_venta double,
pro_descripcion VARCHAR(200),
FOREIGN KEY(pro_id_proveedor) REFERENCES proveedor(id_proveedor)
);

CREATE TABLE inventario(
id_inventario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
inv_id_producto INT NOT NULL,
inv_existencia INT,
FOREIGN KEY(inv_id_producto) REFERENCES producto(id_producto)
);

CREATE TABLE venta(
id_venta INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
ven_monto double
);

CREATE TABLE producto_vendido(
prov_id_producto INT NOT NULL,
prov_id_venta INT NOT NULL,
prov_cantidad INT NOT NULL,
PRIMARY KEY(prov_id_producto, prov_id_venta),
FOREIGN KEY(prov_id_producto) REFERENCES producto(id_producto),
FOREIGN KEY(prov_id_venta) REFERENCES venta(id_venta)
);
