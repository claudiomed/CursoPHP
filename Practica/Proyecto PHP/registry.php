<?php
    
    //RETRIEVE DATA FROM FORM 
        
        $nombre=$_POST['name'];
        $apellido= $_POST['lastname'];
        $email= $_POST['email'];
        $password=$_POST['password'];
        
    //VALIDATE DATA 
        
    var_dump(preg_match("/[a-zA-Z]/", $name));
        
    
        If(ctype_alpha($nombre) ){
            echo"Correct name";
        }else{
            echo"Wrong!";
        }
        
        
     
   
     
   
    
    
    
    
    
    
    
    
    
    
    

