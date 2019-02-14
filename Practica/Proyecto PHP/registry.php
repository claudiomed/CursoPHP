<?php

        session_start();
    
    //RETRIEVE DATA FROM FORM 
        
        $nombre=$_POST['name'];
        $apellido= $_POST['lastname'];
        $email= $_POST['email'];
        $password=$_POST['password'];
        
    //VALIDATE DATA 
        
    
        //SE VALIDA EL NOMBRE INGRESADO
        If(preg_match("/[A-Za-z]/", $nombre) && !preg_match("/[0-9]/", $nombre)){
            $nombre_valido=true;
        }else{
            $errores['nombre']="El nombre contiene caracteres no validos";
            $nombre_valido=false;
        }
        
        //SE VALIDA EL APELLIDO INGRESADO
        If(preg_match("/[A-Za-z]/", $apellido) && !preg_match("/[0-9]/", $apellido)){
            $apellido_valido=true;
        }else{
            $errores['apellido']="El apellido contiene caracteres no validos";
            $apellido_valido=false;
        }
        
        //SE VALIDA EL CORREO ELECTRONICO INGRESADO
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $email_valido=true;
        }else{
            $errores['email']="El email contiene caracteres no validos";
            $email_valido=false;
        }
        
        //SE VALIDA LA CONTRASEÑA INGRESADA
        if(strlen($password)>8 && preg_match("/[A-Z]/", $password) && preg_match("/[0-9]/", $password)){
            $password_valido=true;
        }else{
            if(!preg_match("/[A-Z]/", $password)){
                $errores['password_no_mayusculas']='El password debe contener al menos una mayuscula </br>';
                $no_mayusculas_valido=false;
            }
            if(!preg_match("/[0-9]/", $password)){
                $errores['password_no_numeros']='El password debe contener al menos un numero</br>';
                $no_numeros_valido=false;
            }
            if(strlen($password)<8){
                $errores['password_numero_caracteres']="El password debe contener mas de 8 caracteres </br>";
                $numero_caracteres_valido=false;
            }
                   
        }
        
       
        
        //SE INGRESAN LOS DATOS A LA BASE DE DATOS EN CASO DE NO HABER ERRORES
        if(count($errores)==0){
            
        }else{
            $_SESSION['errores']=$errores;
            header("Location: index.php");
        }        
        
        
        
        
        
        
       
        
        
        
        
       
        
        
     
   
     
   
    
    
    
    
    
    
    
    
    
    
    

