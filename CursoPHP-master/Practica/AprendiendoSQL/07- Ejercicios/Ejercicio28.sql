/*LISTAR LOS VENDEDORES Y EL NUMERO DE CLIENTES QUE TIENEN*/

SELECT CONCAT(v.nombre, ' ', v.apellidos) AS 'VENDEDOR', COUNT(cl.vendedor_id) AS 'NUMERO DE CLIENTES'
FROM vendedores v
LEFT JOIN clientes cl ON cl.vendedor_id=v.id
GROUP BY(v.id);


SELECT CONCAT(v.nombre, ' ', v.apellidos) AS 'VENDEDOR', COUNT(cl.vendedor_id) AS 'NUMERO DE CLIENTES'
FROM vendedores v
INNER JOIN clientes cl ON cl.vendedor_id=v.id
GROUP BY(v.id);