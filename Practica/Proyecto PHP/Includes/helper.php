<?php

    include_once 'connection.php';
    //FUNCION QUE DEVUELVE TODOS LOS NOMBRES DE LAS CATEGORIAS
    function getCategoriesNames(){
        $query="SELECT * FROM categorias ORDER BY id asc";
        $sql= mysqli_query($_SESSION['connection'], $query);
        $categories=array();
        while($rows= mysqli_fetch_assoc($sql)){
            $categories[]=$rows['nombre'];
        }
        return $categories;
    }
    
    
    //FUNCION QUE DEVUELVE EL ID DE LA CATEGORIA
    function getCategoryID($name){
        $query="SELECT id FROM categorias WHERE nombre='$name'";
        $sql= mysqli_query($_SESSION['connection'], $query);
        $categoryID= mysqli_fetch_assoc($sql);
        return $categoryID['id'];
    }
    
    function getUserInformation($email){
        $query= mysqli_query($_SESSION['connection'], "SELECT nombre, apellido, id FROM users WHERE email='$email'");
        $names= mysqli_fetch_assoc($query);
        return $names;
    }
    
    function getEntradas(){
        $sqlEntrada=array();
        $query="SELECT e.*, c.nombre as 'Nombre de categoria' FROM entrada e INNER JOIN categorias c ON e.categoria_id=c.id ORDER BY fecha desc LIMIT 4;";
        return $sqlQuery= mysqli_query($_SESSION['connection'], $query);
    }
?>

