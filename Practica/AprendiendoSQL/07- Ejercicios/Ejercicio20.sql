#SELECCIONAR EL GRUPO EN EL QUE TRABAJA EL VENDEDOR CON MAYOR SALARIO Y MONSTRAR EL NOMBRE DEL GRUPO#

SELECT * FROM grupos WHERE id IN (SELECT grupo_id FROM vendedores WHERE sueldo= (SELECT MIN(sueldo) FROM vendedores));
