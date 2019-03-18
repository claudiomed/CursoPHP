<?php

    include_once 'connection.php';
    //FUNCION QUE DEVUELVE TODOS LOS NOMBRES DE LAS CATEGORIAS

    //INSERTA UN USUARIO EN LA BASE DE DATOS
    function insertUserInformation($nombre, $apellido, $email, $password){
        $secure_password = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);
        $sql="INSERT INTO users VALUES(NULL, '$nombre', '$apellido', '$email', '$secure_password', CURDATE())";
        mysqli_query($_SESSION['connection'], $sql);
    }
    
    //ACTUALIZA UN USUARIO EN LA BASE DE DATOS 
    function updateUser($nombre, $apellido, $email, $id){
        $query="UPDATE users SET nombre='$nombre', apellido='$apellido', email='$email' WHERE id='$id';";
        mysqli_query($_SESSION['connection'], $query);
    }
    
    
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
        $query= mysqli_query($_SESSION['connection'], "SELECT nombre, apellido, id, email FROM users WHERE email='$email'");
        $userInfo= mysqli_fetch_assoc($query);
        return $userInfo;
    }
    
    function getCategory($id){
        $query="SELECT * FROM categorias WHERE id=$id";
        $categoria= mysqli_query($_SESSION['connection'], $query);
        return mysqli_fetch_assoc($categoria);
    }
    
    function getEntradas($limit){
        $sqlEntrada=array();
        $query="SELECT e.*, c.nombre as 'Nombre de categoria' FROM entrada e INNER JOIN categorias c ON e.categoria_id=c.id ORDER BY fecha desc";
        if($limit){
            $query.=" LIMIT 4";
        }
        return $sqlQuery= mysqli_query($_SESSION['connection'], $query);
    }
    
    //SE SACAN LAS ENTRADAS POR ID DE SU RESPECTIVA CATEGORIA. EL PARAMETRO ES EL 'ID' DE LA CATEGORIA DESEADA
    function getEntradasPorCategoria($id){
        $sqlEntrada=array();
        $query="SELECT e.*, c.id, c.nombre FROM entrada e INNER JOIN categorias c ON e.categoria_id=c.id HAVING c.id=$id";
        return $sqlQuery= mysqli_query($_SESSION['connection'], $query);
    }
?>

