# VISUALIZAR EL NOMBRE Y APELLIDOS, SU FECHA Y EL DIA DE LA SEMANA QUE SE REGISTRARON#
SELECT CONCAT(nombre,' ',apellidos) AS 'NOMBRE', DAYNAME(fecha_ingreso) AS 'DIA DE LA SEMANA' FROM vendedores; 