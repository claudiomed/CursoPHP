#OBTENER UN LISTADO CON LOS ENCARGOS REALIZADOS POR FRUTERIA ANTONIA INC#

SELECT e.id AS 'ID PEDIDO', cl.nombre AS 'CLIENTE', co.modelo AS 'MODELO DE COCHE', e.cantidad AS 'CANTIDAD DE COCHES', e.fecha AS 'FECHA'
FROM encargos e
INNER JOIN clientes cl ON cl.id=e.cliente_id
INNER JOIN coches co ON co.id=e.coche_id
WHERE cl.nombre LIKE '%fruteria%';