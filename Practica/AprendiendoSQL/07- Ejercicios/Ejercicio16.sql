#OBTENER LISTA DE CLIENTES ANTENDIDOS POR EL VENDEDOR DAVID LOPEZ#

SELECT cl.nombre AS 'NOMBRE DE CLIENTE', CONCAT(v.nombre, ' ',v.apellidos) AS 'NOMBRE DE VENDEDOR' 
FROM clientes cl
INNER JOIN vendedores v ON cl.vendedor_id=v.id
WHERE CONCAT(v.nombre, ' ' , v.apellidos) LIKE '%DAVID LOPEZ%';
  
