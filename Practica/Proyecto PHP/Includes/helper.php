<?php

    include_once 'connection.php';
    
    function getCategories(){
        $query="SELECT * FROM categorias ORDER BY id asc";
        $sql= mysqli_query($_SESSION['connection'], $query);
        $categories=array();
        while($rows= mysqli_fetch_assoc($sql)){
            $categories[]=$rows['nombre'];
        }
        return $categories;
    }
    
    function getEntradas(){
        $sqlEntrada=array();
        $query="SELECT e.*, c.nombre as 'Nombre de categoria' FROM entrada e INNER JOIN categorias c ON e.categoria_id=c.id ORDER BY fecha desc LIMIT 4;";
        return $sqlQuery= mysqli_query($_SESSION['connection'], $query);
    }
    
    
    
?>

