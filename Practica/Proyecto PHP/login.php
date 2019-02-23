<?php
    include_once 'includes/connection.php';
    
    //SE COMPRUEBA SI LLEGA LA INFORMACION INGRESADA
    if(isset($_POST['submit'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
    }
    
    
    //SE BUSCA EL NOMBRE EL EMAIL Y LA CONTRASENA EN LA BASE DE DATOS
    function verifyAccount($email, $password){
        $queryPassword="SELECT password FROM users WHERE email='$email'";
        $queryEmail="SELECT email FROM users WHERE email='$email'";
        $sqlP=mysqli_query($_SESSION['connection'], $queryPassword);
        $sqlE=mysqli_query($_SESSION['connection'], $queryEmail);
        //SE SACA EL PASSWORD DE LA BASE DE DATOS
        $TemPass= mysqli_fetch_assoc($sqlP);
        //SE SACA EL CORREO DE LA BASE DE DATOS
        $tempEmail= mysqli_fetch_assoc($sqlE);
        
        if($email==$tempEmail['email']){
            if(password_verify($password, $TemPass['password'])){
                return true;
            }else{
                return false;
            }
        }else{
            return NULL;
        }
  
    }
    
    
    function unset_variables(){
        unset($_POST);
    }
    
    
    
    //VERIFICACION DE CUENTA PARA EL LOGIN
    if(isset($_POST['submit'])){
        if(verifyAccount($email, $password)===NULL){
            echo"The account does not exist";
            unset($_POST);
        }else if(verifyAccount($email, $password)){
            echo"Login successfull";
            unset($_POST);
        }else{
            echo"Login failed";
            unset($_POST);
        }
        
    }
    
    
    
?>

