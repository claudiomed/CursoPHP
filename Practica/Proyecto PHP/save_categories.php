<?php
    //SE CREA LA SESSION EN CASO DE QUE NO SE INICIALICE EN OTROA PAGINA
    if(!isset($_SESSION['usuario'])){
        session_start();
    }

    if(isset($_POST['submit'])){
        $nueva_categoria=$_POST['name'];
    }
    
    
    
    
?>
