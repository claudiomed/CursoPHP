<?php
    include_once 'includes/helper.php';
    
    if(!isset($_SESSION)){
        session_start();
    }
    
    $nombre=$_POST['name'];
    $apellido=$_POST['lastname'];
    $email=$_POST['email'];
    
    if(isset($_POST['submit'])){
        
            if(!preg_match("/[A-Za-z]/", $nombre) || preg_match("/[0-9]/", $nombre)){
                $errores['nombre']="El nombre contiene caracteres no validos";
                $errores['nombre_valido']=false;
                $_SESSION['errores']=$errores;
            }

            //SE VALIDA EL APELLIDO INGRESADO 
            If(!preg_match("/[A-Za-z]/", $apellido) || preg_match("/[0-9]/", $apellido)){
                $errores['apellido']="El apellido contiene caracteres no validos";
                $errores['apellido_valido']=false;
                $_SESSION['errores']=$errores;
            }

            //SE VALIDA EL CORREO ELECTRONICO INGRESADO
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errores['email']="El email contiene caracteres no validos";
                $errores['email_valido']=false;
                $_SESSION['errores']=$errores;
            }
            
            if(!isset($_SESSION['errores'])){
                $_SESSION['email']=$email;
                updateUser($nombre, $apellido, $email, $_SESSION['usuario']['id']);
            }
    }
?>

