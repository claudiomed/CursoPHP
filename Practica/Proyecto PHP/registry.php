<?php
        include_once 'includes/connection.php';

        //session_start();
    
    //RETRIEVE DATA FROM FORM 
        
        $nombre=$_POST['name'];
        $apellido= $_POST['lastname'];
        $email= $_POST['email'];
        $password=$_POST['password'];
        
    //VALIDATE DATA 
        if(isset($_POST['submit'])){
            //SE VALIDA EL NOMBRE INGRESADO
            if(!preg_match("/[A-Za-z]/", $nombre) || preg_match("/[0-9]/", $nombre)){
                $errores['nombre']="El nombre contiene caracteres no validos";
                $errores['nombre_valido']=false;
            }

            //SE VALIDA EL APELLIDO INGRESADO
            If(!preg_match("/[A-Za-z]/", $apellido) || preg_match("/[0-9]/", $apellido)){
                $errores['apellido']="El apellido contiene caracteres no validos";
                $errores['apellido_valido']=false;
            }

            //SE VALIDA EL CORREO ELECTRONICO INGRESADO
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errores['email']="El email contiene caracteres no validos";
                $errores['email_valido']=false;
            }

            //SE VALIDA LA CONTRASEÑA INGRESADA
                if(!preg_match("/[A-Z]/", $password)){
                    $errores['password_no_mayusculas']='El password debe contener al menos una mayuscula </br>';
                    $errores['no_mayusculas_valido']=false;
                }
                
                if(!preg_match("/[0-9]/", $password)){
                    $errores['password_no_numeros']='El password debe contener al menos un numero</br>';
                    $errores['no_numeros_valido']=false;
                }
                if(strlen($password)<8){
                    $errores['password_numero_caracteres']="El password debe contener mas de 8 caracteres </br>";
                    $errores['numero_caracteres_valido']=false;
                }
                
                $_SESSION['errores']=$errores;
            
        
        }
        
        //SE INGRESAN LOS DATOS A LA BASE DE DATOS EN CASO DE NO HABER ERRORES
        if($_SESSION['errores']==NULL && isset($_POST['submit'])){
            session_start();
            header("Location: index.php");
            $secure_password = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);
            $sql="INSERT INTO users VALUES(NULL, '$nombre', '$apellido', '$email', '$secure_password', CURDATE())";
            mysqli_query($connection, $sql);
            $_SESSION['registro']="Registro exitoso";
        }else{
            session_start();
            $_SESSION['errores']=$errores;
            header("Location: index.php");
            echo mysqli_error($connection);
            mysqli_errno($connection);
            $_SESSION['registro']="El registro ha fallado";
        }
        
        
       ?>
        
        
        
        
       
        
        
     
   
     
   
    
    
    
    
    
    
    
    
    
    
    

