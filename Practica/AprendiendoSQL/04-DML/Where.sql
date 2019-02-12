# Where clauses#   
SELECT * FROM users WHERE YEAR(fecha) OR ISNULL(fecha)= '2019';

# Where the last name contains letter 'A'#
SELECT apellido, email FROM users WHERE apellido LIKE '%a%';

# Where year is odd number#
SELECT * FROM users WHERE YEAR(fecha)%2 = 0;

# Get name which contains more than 5 letters#
SELECT * FROM users WHERE (LENGTH(nombre)>5) AND (YEAR(fecha)!=2019);
