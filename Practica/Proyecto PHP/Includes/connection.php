<?php
    if(!isset($_SESSION)){
        session_start();
    }

    $server='localhost';
    $userName='root';
    $password='Password';
    $database='Medrano';

    $connection= mysqli_connect($server,$userName,$password, $database);
    $_SESSION['connection']=$connection;
    
    mysqli_query($connection, "SET NAMES 'utf8'");
?>
 
