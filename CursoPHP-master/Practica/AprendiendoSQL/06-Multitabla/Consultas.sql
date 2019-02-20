# MOSTRAR NOMBRE DE USUARIO Y NOMBRE DE CATEGORIA#

SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre 
FROM users u, entrada e, categorias c
WHERE e.usuario_id = u.id AND e.categoria_id = c.id;

# MOSTRAR EL NOMBRE DE LAS CATEGORIAS Y AL LADO CUANTAS ENTRADAS TIENEN#
SELECT c.nombre AS 'Categoria', COUNT(e.categoria_id) AS 'Numero de entradas' FROM categorias c, entrada e WHERE c.id=e.categoria_id GROUP BY e.categoria_id;

# MOSTRAR EL EMAIL DE LOS USUARIOS Y AL LADO CUANTAS ENTRADAS TIENEN#

SELECT u.email AS 'EMAIL', COUNT(e.usuario_id) AS 'ENTRADAS' FROM users u, entrada e WHERE u.id=e.usuario_id GROUP BY usuario_id;

