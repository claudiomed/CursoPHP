<?php

    $server='localhost';
    $userName='Medrano';
    $password='Password';
    $database='masterphp';

    $connection= mysqli_connect($server,$userName,$password, $database);
    $_SESSION['connection']=$connection;
    
    mysqli_query($connection, "SET NAMES 'utf8'");
?>
 
