# DISEÑAR Y CREAR LA BASE DE DATOS DE UN CONCESIONARIO#

#CREACION DE TABLAS#

    
CREATE TABLE coches(
    id int(225) not null auto_increment,
    modelo varchar(225) not null, 
    marca varchar(225) not null,
    precio float(225, 2) not null, 
    stock int(225) not null, 
    CONSTRAINT pk_coches_id PRIMARY KEY(id)
)ENGINE=innoDB;


CREATE TABLE grupos(
    id int(225) not null auto_increment, 
    nombre varchar(225) not null, 
    ciudad varchar(225) not null, 
    CONSTRAINT pk_grupos_id PRIMARY KEY(id)
)ENGINE=InnoDB;


CREATE TABLE vendedores(
    id int(225) not null auto_increment, 
    grupo_id int(225) not null, 
    jefe int(225),
    nombre varchar(225) not null, 
    apellidos varchar(225) not null, 
    cargo varchar(225) not null, 
    fecha_ingreso date not null, 
    sueldo float(225, 2) not null, 
    comision float(225, 2),  
    CONSTRAINT pk_vendedores_id PRIMARY KEY(id),
    CONSTRAINT fk_grupo_id FOREIGN KEY(id) REFERENCES grupos(id)
)ENGINE=innoDB;


CREATE TABLE clientes(
    id int(225) not null auto_increment, 
    vendedor_id int(225), 
    nombre varchar(225) not null, 
    ciudad varchar(225), 
    gastado float(225, 2), 
    CONSTRAINT pk_clientes_id PRIMARY KEY(id), 
    CONSTRAINT fk_vendedores_id FOREIGN KEY(vendedor_id) REFERENCES vendedores(id)
)ENGINE=innoDB;

CREATE TABLE encargos(
    id int(225) not null auto_increment, 
    cliente_id int(225) not null,
    coche_id int(225) not null, 
    fecha date not null, 
    cantidad int(225) not null, 
    CONSTRAINT pk_encargos_id PRIMARY KEY(id), 
    CONSTRAINT fk_cliente_id FOREIGN KEY(cliente_id) REFERENCES clientes(id), 
    CONSTRAINT fk_coche_id FOREIGN KEY(coche_id) REFERENCES coches(id) 
)ENGINE=innoDB;



#RELLENAR LA BASE DE DATOS CON INFORMACION#

#COCHES#
INSERT INTO coches VALUES(null, 'Sentra', 'Nissan', 14000.00, 20);
INSERT INTO coches VALUES(null, 'Corolla', 'Toyota', 16000.00, 20);
INSERT INTO coches VALUES(null, 'X5', 'BMW', 30000.00, 20);
INSERT INTO coches VALUES(null, 'Cayenne', 'Porsche', 63000.00, 7);
INSERT INTO coches VALUES(null, 'Aveo', 'Chevrolet', 12000.00, 22);
INSERT INTO coches VALUES(null, 'Discovery', 'Ford', 35000.00, 9);

#GRUPOS#
INSERT INTO grupos VALUES(null, 'Vendedores A', 'San Jose');
INSERT INTO grupos VALUES(null, 'Vendedores B', 'San Jose');
INSERT INTO grupos VALUES(null, 'Directores Mecanicos', 'San Jose');

INSERT INTO grupos VALUES(null, 'Vendedores A', 'Heredia');
INSERT INTO grupos VALUES(null, 'Vendedores B', 'Heredia');
INSERT INTO grupos VALUES(null, 'Vendedores C', 'Cartago');

INSERT INTO grupos VALUES(null, 'Vendedores A', 'Alajuela');
INSERT INTO grupos VALUES(null, 'Vendedores B', 'Limon');
INSERT INTO grupos VALUES(null, 'Vendedores C', 'Puntarenas');

#VENDEDORES#
INSERT INTO vendedores VALUES(NULL, 1,'David', 'Lopez', 'Reponsable de tienda', CURDATE(), 30000, 4, null);
INSERT INTO vendedores VALUES(NULL, 1,'Fran', 'Martinez', 'Ayudante en tienda', CURDATE(), 23000, 2. 1);
INSERT INTO vendedores VALUES(NULL, 2,'Nelson', 'Sanchez', 'Reponsable de tienda', CURDATE(), 38000, 5, null);
INSERT INTO vendedores VALUES(NULL, 2,'Jesus', 'Lopez', 'Ayudante en tienda', CURDATE(), 12000, 6, 3);
INSERT INTO vendedores VALUES(NULL, 3,'Victor', 'Lopez', 'Mecanico jefe', CURDATE(), 50000, 2, null);
INSERT INTO vendedores VALUES(NULL, 4,'Antonio', 'Lopez', 'Vendedor de recambios', CURDATE(), 13000, 8, null);
INSERT INTO vendedores VALUES(NULL, 5,'Salvador', 'Lopez', 'Vendedor experto', CURDATE(), 60000, 2, null);
INSERT INTO vendedores VALUES(NULL, 6,'Joaquin', 'Lopez', 'Ejecutivo de cuentas', CURDATE(), 80000, 1, null);
INSERT INTO vendedores VALUES(NULL, 6,'Luis', 'Lopez', 'Ayudante en tienda', CURDATE(), 10000, 10, 8);