#OBTENER LOS VENDEDORES CON DOS O MAS CLIENTES#

SELECT * FROM vendedores WHERE id IN (SELECT vendedor_id FROM clientes GROUP BY(vendedor_id) HAVING COUNT(vendedor_id)>2 );
