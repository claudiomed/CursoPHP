<?php
    
    require 'autoload.php';

    $usuario=new Usuario('Andres', 'Medrano', 'cmed@gmail.com', 'Password');
    echo '<h1>'.$usuario->getNombre().'<br> '.$usuario->getApellido().'<br>'.$usuario->getEmail().'<br>'.$usuario->getPassword().'</h1>';

?>

