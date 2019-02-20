<?php
    
    session_start();
    
    if(!isset($_SESSION['number'])){
        $_SESSION['numero']=0;
        
    }
    
    if($_GET['counter']==1){
        $_SESSION['number']++;
    }else{
        $_SESSION['number']--;
    }
?>

<a href="Ejercicio1.php?counter=1">Aumentar numero</a><br>
<a href="Ejercicio1.php?counter=0">Disminuir numero</a>
<h1>El numero de la sesion es <?=$_SESSION['number']?></h1>
    