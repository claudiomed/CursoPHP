#MOSTRAR EL NOMBRE Y EL SALARIO DE LOS VENDEDORES CON CARGO DE AYUDANTE DE TIENDA#

SELECT CONCAT(nombre, ' ',apellido) AS 'NOMBRE COMPLETO', salario FROM vendedores WHERE cargo LIKE '%Ayudante%';