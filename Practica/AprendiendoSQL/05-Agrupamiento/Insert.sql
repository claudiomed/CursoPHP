#INSERTS PARA CATEGORIAS#
INSERT INTO categorias VALUES(null, 'Sports');


#INSERTS PARA ENTRADAS#

INSERT INTO entrada VALUES(null, 10, 1, 'Super Bowl LIII', 'Se viene el Super Bowl del 2019', CURDATE());
INSERT INTO entrada VALUES(null, 14, 2, 'Storm coming up', 'Windy weather will come', CURDATE());
INSERT INTO entrada VALUES(null, 15, 3, 'Eminem in Costa Rica', 'First time for the artist in Central America', CURDATE());


INSERT INTO entrada VALUES(null, 10, 1, 'Ureña to LDA', '100 anniversary', CURDATE());
INSERT INTO entrada VALUES(null, 14, 2, 'Sunny days upcoming', 'Summer will get here earlier', CURDATE());
INSERT INTO entrada VALUES(null, 15, 3, 'Bill Burr in Europe', 'Three different tours for the old continent', CURDATE());

INSERT INTO entrada VALUES(null, 10, 1, 'De Jong is blaugrana', 'The Dutch has been confirmed', CURDATE());
INSERT INTO entrada VALUES(null, 14, 2, 'Climate change can still be stopped', 'Trump would not believe Climate change is real', CURDATE());
INSERT INTO entrada VALUES(null, 15, 3, 'Circus Sole in Panama', 'First time in the country', CURDATE());


# ENTRADA DE SPORTS#
INSERT INTO entrada VALUES(null, 15, 1, 'Ruiz a la LDA', 'San Brayan de la LDA', CURDATE());




# SELECCIONAR ENTRADAS QUE TENGAN LA CATEGORIA DE SPORTS ONLY#
SELECT titulo FROM entrada WHERE categoria_id = (SELECT id FROM categorias WHERE id=1);

# MOSTRAR EL NOMBRE DE USUARIO QUE TENGAS MAS ENTRADAS#
SELECT COUNT(usuario_id) AS 'Maxima cantidad de entradas' FROM entrada WHERE usuario_id ORDER BY 2; 