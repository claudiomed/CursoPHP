#OBTENER UNA LISTA DE LOS NOMBRES DE LOS CLIENTES CON EL IMPORTE DE SUS ENCARGOS ACUMULADO#

SELECT cl.id AS 'ID CLIENTE', cl.nombre AS 'NOMBRE CLIENTE', (e.cantidad*co.precio) AS 'TOTAL DE COMPRA'
FROM clientes cl
INNER JOIN encargos e ON cl.id=e.cliente_id
INNER JOIN coches co ON co.id=e.coche_id
ORDER BY (e.cantidad*co.precio) ASC;