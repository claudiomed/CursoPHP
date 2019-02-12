<?php
    
    $server='localhost';
    $userName='root';
    $password='Password';
    $database='Medrano';

    $connection= mysqli_connect($server,$userName,$password, $database);
    
    mysqli_query($connection, "SET NAMES 'utf8'");
    

?>
 
