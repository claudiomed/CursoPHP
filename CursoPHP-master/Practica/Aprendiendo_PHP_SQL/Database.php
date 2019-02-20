<?php
    
    $connection= mysqli_connect('localhost','Medrano' , 'Welcome..2019!!', 'php_sql');
    
    if(mysqli_errno($connection)){
        echo"There has been an error: ".mysqli_errno($connection);
    }else{
        echo"Connection successfull";
    }
    
    /*$titulo=$_POST('Titulo');
    $descripcion=$_POST('Descripcion');
    $color=$_POST('Color');
    
    var_dump($titulo);
    var_dump($descripcion);
    var_dump($color);*/
    
    //mysqli_query($connection, "INSERT INTO notas VALUES('$titulo', '$descripcion', '$color')");
    
    $result=mysqli_query($connection, "SELECT * FROM notas");
    $notas= mysqli_fetch_assoc($result);
    
    /*while($nota=mysqli_fetch_assoc($result)){
        var_dump($nota);
    }*/
    
    //INSERTAR EN LA BASE DE DATOS
    
    $insert="INSERT INTO notas VALUES(null, '$titulo', '$descripcion', '$color')";
    $query= mysqli_query($connection, $insert);
    
    
    
?>

