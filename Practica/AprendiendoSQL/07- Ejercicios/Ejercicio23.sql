#LISTAR TODOS LOS ENCARGOS REALIZADOS CON LA MARCA DE COCHE Y EL NOMBRE DEL CLIENTE#
SELECT e.id AS 'ORDER ID', co.modelo AS 'MODELO', cl.nombre AS 'NOMBRE DE CLIENTE'
FROM coches co
INNER JOIN encargos e ON co.id=e.coche_id
INNER JOIN clientes cl ON cl.id=e.cliente_id;

