#SACAR VENDEDORES QUE TIENEN JEFE Y SACAR EL NOMBRE DEL JEFE#

SELECT CONCAT(v1.nombre, ' ', v1.apellidos) AS 'NOMBRE DE VENDEDOR', v2.nombre AS 'JEFE'
FROM vendedores v1 
INNER JOIN vendedores v2 ON v1.jefe=v2.id;
WHERE v1.jefe IS NOT NULL;



SELECT *, v2.nombre AS 'JEFE'
FROM vendedores v1 
INNER JOIN vendedores v2 ON v1.jefe=v2.id;
WHERE v1.jefe IS NOT NULL;


