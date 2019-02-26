<?php
    include_once 'includes/connection.php';
    
    //SE COMPRUEBA SI LLEGA LA INFORMACION INGRESADA
    if(isset($_POST['submit'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
    }
    
    
    //SE BUSCA EL NOMBRE EL EMAIL Y LA CONTRASENA EN LA BASE DE DATOS
    function verifyAccount($email, $password){
        $query="SELECT * FROM users WHERE email='$email'";
        $sql=mysqli_query($_SESSION['connection'], $query);
        //SE SACA EL PASSWORD DE LA BASE DE DATOS
        $temp= mysqli_fetch_assoc($sql);
        if($email==$temp['email']){
            if(password_verify($password, $temp['password'])){
                return true;
            }else{
                return false;
            }
        }else{
            return NULL;
        }
  
    }
    
    //SE EXTRAE LA INFORMACION DEL USUARIO PARA MOSTRARLO CUANDO SE HACE EL LOGIN   
    function getUserInformation($email){
        $query= mysqli_query($_SESSION['connection'], "SELECT nombre, apellido FROM users WHERE email='$email'");
        $names= mysqli_fetch_assoc($query);
        return $names;
    }
    
    //VERIFICACION DE CUENTA PARA EL LOGIN
    if(isset($_POST['submit'])){
        if(verifyAccount($email, $password)===NULL){
            session_start();
            echo"The account does not exist";
            unset($_POST);
            $_SESSION['usuario']=true;
        }else if(verifyAccount($email, $password)){
            session_start();
            echo"Login successfull";
            $_SESSION['usuario']=true;
            $_SESSION['email']=$email;
            header("refresh:3; url=index.php"); 
        }else{
            session_start();
            echo"Login failed";
            unset($_POST);
            $_SESSION['usuario']=NULL;
        }
    }
    
    
    
?>

