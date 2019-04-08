<?php
    require 'autoload.php';
    
    echo "Test";
    
    
    
    $user=new modelos\Usuario('Claudio', 'Medrano', 'cmedrano1490@gmail.com', 'Password');
    $categoria=new modelos\Categoria(1, 'Deportes');
    $entrada=new modelos\Entrada(1, 1, 1, 'Barcelona campeon', 'Texto generico', '03/31/2019');
    
    
    
    $principal= new Principal($usuario, $categoria, $entrada);
    
    echo "test2";
    

?>

