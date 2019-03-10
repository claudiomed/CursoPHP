<?php
    
    if(!isset($_SESSION)){
        session_start();
    }
    include_once 'Includes/connection.php';
    
    
    //SE CREA LA SESSION EN CASO DE QUE NO SE INICIALICE EN OTROA PAGINA
    if(!isset($_SESSION['usuario'])){
        session_start();
    }
    if(isset($_POST['name'])&& !is_numeric($_POST['name']) && !preg_match("/[0-9]/", $_POST['name'])){
        $_SESSION['categoria']=$_POST['name'];
    }
    if(isset($_POST['submit'])){
        header("Location: create-categories.php");
    }
    
    //FUNCION QUE VERIFICA SI EL NOMBRE INGRESADO YA EXISTE EN LA BASE DE DATOS
    function checkAvailability($nombre){
        $query="SELECT nombre FROM categorias WHERE nombre='$nombre'";
        $sql= mysqli_query($_SESSION['connection'],$query);
        $categoria= mysqli_fetch_assoc($sql);
        return $categoria;
    }
    
    function insertCategoria($nombre){
        if(checkAvailability($nombre)==NULL){
            $query="INSERT INTO categorias VALUES(NULL, '$nombre')";
            $sql= mysqli_query($_SESSION['connection'], $query);
            return true;
        }else{
            return false;
        }
    }
    
?>
