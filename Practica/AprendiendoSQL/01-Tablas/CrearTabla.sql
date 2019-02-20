/* 
    Tipos de datos 

    int (num de caracteres)     Entero
    integer (num de caracteres) Entero
    varchar (num de caracteres) String/Alfanumerico 
    char (num de caracteres)    String/Alfanumerico
    float (num caracteres, num decimales)      float
    date, time, timestamp

    TEXT
    MEDIUMTEXT
    LONGTEXT    
    
 */


/*
    CREAR TABLA

 */

CREATE TABLE users(
    id          int(11)  auto_increment not null,
    nombre      varchar(100) not null,
    apellido    varchar(255) default 'Medrano',
    email       varchar(100) not null,
    password    varchar(100) null,
    CONSTRAINT pk_users PRIMARY KEY (id)
);
