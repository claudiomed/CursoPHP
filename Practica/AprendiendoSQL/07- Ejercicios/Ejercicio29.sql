/* 
 CREAR UNA VISTA LLAMADA VENDEDORES A QUE INCLUIRA TODOS LOS VENDEDORES DEL GRUPO QUE SE LLAME "VENDEDORES A"
 */

CREATE VIEW Vendedores_Grupo_A AS
    SELECT * 
    FROM vendedores 
    WHERE grupo_id=1 OR grupo_id=4 OR grupo_id=7;



CREATE VIEW GRUPO_A AS
SELECT * 
FROM vendedores 
WHERE grupo_id IN
(SELECT id FROM grupos WHERE nombre='vendedores a');
