<?php
        include_once 'includes/connection.php';

        session_start();
    
    //RETRIEVE DATA FROM FORM 
        
        $nombre=$_POST['name'];
        $apellido= $_POST['lastname'];
        $email= $_POST['email'];
        $password=$_POST['password'];
        
    //VALIDATE DATA 
        if(isset($_POST['submit'])){
            //SE VALIDA EL NOMBRE INGRESADO
            If(preg_match("/[A-Za-z]/", $nombre) && !preg_match("/[0-9]/", $nombre)){
                //$nombre_valido=true;
                $_SESSION['nombre_valido']=null;
            }else{
                $errores['nombre']="El nombre contiene caracteres no validos";
                //$nombre_valido=false;
                $_SESSION['nombre_valido']=false;
            }

            //SE VALIDA EL APELLIDO INGRESADO
            If(preg_match("/[A-Za-z]/", $apellido) && !preg_match("/[0-9]/", $apellido)){
                $_SESSION['apellido_valido']=null;
            }else{
                $errores['apellido']="El apellido contiene caracteres no validos";
                $_SESSION['apellido_valido']=false;
            }

            //SE VALIDA EL CORREO ELECTRONICO INGRESADO
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                $_SESSION['email_valido']=null;
            }else{
                $errores['email']="El email contiene caracteres no validos";
                $_SESSION['email_valido']=false;
            }

            //SE VALIDA LA CONTRASEÑA INGRESADA
                if(!preg_match("/[A-Z]/", $password)){
                    $errores['password_no_mayusculas']='El password debe contener al menos una mayuscula </br>';
                    $_SESSION['no_mayusculas_valido']=false;
                }else{
                    $_SESSION['no_mayusculas_valido']=null;
                }
                
                if(!preg_match("/[0-9]/", $password)){
                    $errores['password_no_numeros']='El password debe contener al menos un numero</br>';
                    $_SESSION['no_numeros_valido']=false;
                }else{
                    $_SESSION['no_numeros_valido']=null;
                }
                if(strlen($password)<8){
                    $errores['password_numero_caracteres']="El password debe contener mas de 8 caracteres </br>";
                    $_SESSION['numero_caracteres_valido']=false;
                }else{
                     $_SESSION['numero_caracteres_valido']=null;
                }
            
            
        }
        
        //SE INGRESAN LOS DATOS A LA BASE DE DATOS EN CASO DE NO HABER ERRORES
            if(!isset($errores)||count($errores)==0){
                echo"Data sent successfully";
                $secure_password = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);
                $sql="INSERT INTO users VALUES(NULL, '$nombre', '$apellido', '$email', '$secure_password', CURDATE())";
                mysqli_query($connection, $sql);
                //CONFIRMACION DE QUE EL REGISTRO SE COMPLETO CON EXITO
                $_SESSION['registration_successfull']="El registro se ha completado exitosamente";
                header("Location: index.php");
                //unset($_SESSION['registration_successfull']);
                
            }else{
                $_SESSION['errores']=$errores;
                header("Location: index.php");
            }
        
        
       ?>
        
        
        
        
       
        
        
     
   
     
   
    
    
    
    
    
    
    
    
    
    
    

