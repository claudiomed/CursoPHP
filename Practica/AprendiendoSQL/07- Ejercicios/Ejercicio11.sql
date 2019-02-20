#VISUALIZAR TODOS LOS CARGOS Y EL NUMERO DE VENDEDORES QUE HAY EN CADA CARGO#
SELECT cargo AS 'Puesto', COUNT(cargo) AS 'Numero de vendedores por cargo' FROM vendedores GROUP BY cargo ORDER BY COUNT(cargo) DESC;

