#MOSTRAR LISTADO DE CLIENTES MOSTRANDO EL NUMERO DE CLIENTE Y EL NOMBRE. ADEMAS MOSTRAR EL NUMERO DE VENDEDOR Y SU NOMBRE#

SELECT cl.id AS 'ID CLIENTE', cl.nombre AS 'NOMBRE DE CLIENTE', v.id AS 'ID CLIENTE', CONCAT(v.nombre,' ', v.apellidos) AS 'NOMBRE DE VENDEDOR'
FROM clientes cl
INNER JOIN vendedores v ON cl.vendedor_id=v.id;


