#VISUALIZAR LAS UNIDADES TOTALES VENDIDAS DE CADA COCHE A CADA CLIENTE MOSTRANDO EL NOMBRE DEL PRODUCTO, NUMERO DEL CLIENTE Y LA SUMA DE UNIDADES#

SELECT co.modelo AS 'CAR NAME', e.cliente_id AS 'CLIENT ID', cl.nombre AS 'NOMBRE DE CLIENTE',e.cantidad 
FROM encargos e   
INNER JOIN coches co ON e.coche_id=co.id
INNER JOIN clientes cl ON cl.id=e.cliente_id
GROUP BY (e.cliente_id) ORDER BY(e.cantidad) DESC;






