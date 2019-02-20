#LISTAR LOS CLIENTES QUE HAN HECHO ALGUN ENCARGO DE MERCEDES RANCHERA#

SELECT e.id AS 'N° PEDIDO' ,cl.nombre AS 'CLIENTE',co.modelo AS 'MODELO DE COCHE' ,e.cantidad AS 'CANTIDAD'
FROM encargos e 
INNER JOIN clientes cl ON e.cliente_id=cl.id
INNER JOIN coches co ON e.coche_id=co.id
WHERE co.modelo LIKE '%mercedes%';

#CON SUB CONSULTAS#
SELECT * FROM clientes WHERE id IN (SELECT cliente_id FROM encargos WHERE coche_id IN 
(SELECT id FROM coches WHERE modelo LIKE '%mercedes%') );