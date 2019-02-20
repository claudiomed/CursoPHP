

CREATE TABLE users(
    id int(255) auto_increment not null,
    nombre varchar(255) not null,
    apellido varchar(255) not null,
    email varchar(255) not null,
    password varchar(255) not null,
    fecha date not null,
    CONSTRAINT pk_users PRIMARY KEY(id)
);

CREATE TABLE categorias(
    id int(255) auto_increment not null,
    nombre varchar(255),
    CONSTRAINT pk_categorias PRIMARY KEY(id)
);

CREATE TABLE entradas(
    id int(255) auto_increment not null, 
    user_id int(255) not null,
    categoria_id int(255) not null,
    titulo varchar(255) not null,
    descripcion MEDIUMTEXT(255), 
    fecha date not null, 
    CONSTRAINT pk_entradas PRIMARY KEY(id),
    CONSTRAINT fk_entradas_users FOREIGN KEY(user_id) REFERENCES users(id),
    CONSTRAINT fk_entradas_categorias FOREIGN KEY(categoria_id) REFERENCES categorias(id)
);

