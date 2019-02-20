#SACAR LA MEDIA DE SUELDOS ENTRE TODOS LOS VENDEDORES POR GRUPO#

SELECT grupo_id ,AVG(sueldo) AS 'AVERAGE SALARY' FROM vendedores GROUP BY(grupo_id);

#SUBQUERY#
(SELECT nombre, id FROM grupos WHERE id=(SELECT id FROM grupos));


SELECT AVG(sueldo) AS 'AVERAGE SALARY', g.nombre AS 'GROUP NAME', g.ciudad AS 'CITY' 
FROM vendedores v 
INNER JOIN grupos g 
ON g.id=v.grupo_id 
GROUP BY(grupo_id) ORDER BY(AVG(sueldo)) DESC;
