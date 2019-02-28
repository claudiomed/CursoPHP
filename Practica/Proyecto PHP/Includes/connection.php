<?php
    $server='localhost';
    $userName='root';
    $password='Password';
    $database='medrano';

    $connection= mysqli_connect($server,$userName,$password, $database);
    $_SESSION['connection']=$connection;
    
    mysqli_query($connection, "SET NAMES 'utf8'");
    

?>
 
