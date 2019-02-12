# Renombrar una tabla#

ALTER TABLE users RENAME TO users_renamed;

# CAMBIAR NOMBRE DE COLUMNA#

ALTER TABLE users_renamed CHANGE apellido apellidos varchar(100);

# Modificar columna sin cambiar nombre#

ALTER TABLE users MODIFY apellido varchar(150) not null;

# AÑADIR COLUMNA #
ALTER TABLE users ADD Edad int(2) null;

# AÑADIR RESTRICCION A COLUMNA #
ALTER TABLE users ADD CONSTRAINT uq_email UNIQUE(email);

# BORRAR COLUMNA#
ALTER TABLE users DROP Edad;

# Como ver los constraint names de una tabla#
SELECT COLUMN_NAME, CONSTRAINT_NAME
FROM information_schema.KEY_COLUMN_USAGE
WHERE TABLE_NAME = 'table to be checked';

# ALTERAR UNA TABLA Y SUI CONSTRAINT#
ALTER TABLE entrada DROP CONSTRAINT fk_entrada_category;


CREATE TABLE users(
    id int(255),
    nombre varchar(255),
    apellido varchar(255),
    email varchar(255),
    password varchar(255),
    fecha date,
    CONSTRAINT pk_users PRIMARY KEY(id), 
    CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDB;



CREATE TABLE categorias(
    id int(255),
    nombre varchar(255),
    CONSTRAINT pk_categorias PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE entrada(
    id int(255), 
    usuario_id int(255),
    categoria_id int(255),
    titulo varchar(100),
    descripcion varchar(255), 
    fecha date, 
    CONSTRAINT pk_entrada PRIMARY KEY(id),
    CONSTRAINT fk_entrada_user FOREIGN KEY(usuario_id) REFERENCES users(id),
    CONSTRAINT fk_entrada_category FOREIGN KEY(categoria_id) REFERENCES categorias(id)
)ENGINE=InnoDB;