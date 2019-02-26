<?php
    
    session_start();
    if(isset($_SESSION['usuario'])){
        header("refresh:3; url=../index.php");
        session_destroy();
    }

?>
