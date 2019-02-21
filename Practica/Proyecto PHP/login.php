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
        $sqlP=mysqli_query($connection, $queryPassword);
        $sqlE=mysqli_query($connection, $queryEmail);
        //SE SACA EL PASSWORD DE LA BASE DE DATOS
        $TemPass= mysqli_fetch_assoc($sql);
        //SE SACA EL CORREO DE LA BASE DE DATOS
        $tempEmail= mysqli_fetch_assoc($sqlE);
        
        if($email==mysqli_query($connection, $queryEmail)){
            $encryptedPassword=mysqli_query($connection, $queryPassword);
            if(password_verify($password, $encryptedPassword)){
                return true;
            }else{
                return false;
            }
        }else{
            return NULL;
        }
  
    }
    
?>

