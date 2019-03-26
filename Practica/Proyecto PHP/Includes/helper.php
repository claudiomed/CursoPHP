<?php
    if(!isset($_SESSION)){
        session_start();
    }

    include_once 'connection.php';
    //FUNCION QUE DEVUELVE TODOS LOS NOMBRES DE LAS CATEGORIAS

    //INSERTA UN USUARIO EN LA BASE DE DATOS
    function insertUserInformation($nombre, $apellido, $email, $password){
        $secure_password = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);
        $sql="INSERT INTO users VALUES(NULL, '$nombre', '$apellido', '$email', '$secure_password', CURDATE(), NULL)";
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
        $query="SELECT e.*, c.nombre as 'Nombre de categoria', u.nombre as 'Nombre', u.apellido as 'Apellido' FROM entrada e INNER JOIN categorias c ON e.categoria_id=c.id INNER JOIN users u ON e.usuario_id=u.id ORDER BY fecha desc";
        if($limit){
            $query.=" LIMIT 4";
        }
        return $sqlQuery= mysqli_query($_SESSION['connection'], $query);
    }
    
    //SE SACAN LAS ENTRADAS POR ID DE SU RESPECTIVA CATEGORIA. EL PARAMETRO ES EL 'ID' DE LA CATEGORIA DESEADA
    function getEntradasPorCategoria($id){
        $sqlEntrada=array();
        $query="SELECT e.*, c.id as 'Categoria ID', c.nombre as 'Nombre de categoria', u.nombre as 'Nombre', u.apellido as 'Apellido' FROM entrada e 
                            INNER JOIN users u ON u.id=e.usuario_id
                            INNER JOIN categorias c ON e.categoria_id=c.id HAVING c.id=$id";
        return $sqlQuery= mysqli_query($_SESSION['connection'], $query);
    }
    
    //SE OBTIENE UNA SOLA ENTRADA CON TODOS LOS DETALLES DE LA MISMA
    function getEntrada($id){
        $query="SELECT e.*, c.nombre as 'Nombre de categoria', u.nombre as 'Usuario nombre', u.apellido as 'Usuario apellido', u.id as 'Usuario_id' FROM entrada e INNER JOIN categorias c ON e.categoria_id=c.id INNER JOIN users u ON u.id=e.usuario_id HAVING e.id=$id";
        $sql= mysqli_query($_SESSION['connection'], $query);
        return mysqli_fetch_assoc($sql);
    }
    
    function insertPhoto($photo,$user_id){
        $query="UPDATE users SET imagenes='$photo' WHERE id=$user_id";
        mysqli_query($_SESSION['connection'], $query);
    }
    
    //FUNCION PARA MOSTRAR LA IMAGEN GUARDADA
    function showImage($user_id){
        $query="SELECT * FROM users WHERE id=$user_id";
        $sql= mysqli_query($_SESSION['connection'], $query);
        $images= mysqli_fetch_assoc($sql);
        $image= $images['imagenes'];
        return '<img src="data:image/jpeg;base64,'.base64_encode($image).'" style="width:200px;height:200px"/>';
    }
    
    //SE ELIMINAR UNA ENTRADA
    function deleteEntry($id){
        $query="DELETE FROM entrada WHERE id=$id";
        mysqli_query($_SESSION['connection'], $query);
    }
    
    //METODO PARA REALIZAR LA BUSQUEDA CON UN KEYWORD
    function search($keyword){
        $query="SELECT e.*, u.nombre as 'Nombre', u.apellido as 'Apellido', c.nombre as 'Nombre de categoria' FROM entrada e 
            INNER JOIN  users u ON e.usuario_id=u.id
            INNER JOIN categorias c ON c.id=e.categoria_id
            HAVING e.titulo LIKE '%$keyword%' OR e.descripcion LIKE '%$keyword%'";
        return $sql= mysqli_query($_SESSION['connection'], $query);
    }
       
?>

