<?php
    
    //RETRIEVE DATA FROM FORM 
        
        $nombre=$_POST['name'];
        $apellido= $_POST['lastname'];
        $email= $_POST['email'];
        $password=$_POST['password'];
        
    //VALIDATE DATA 
        
    
        
        If(preg_match("/[A-Za-z]/", $nombre) && !preg_match("/[0-9]/", $nombre)){
            echo"Right name";
        }else{
            echo"Wrong name!";
        }
        
        If(preg_match("/[A-Za-z]/", $apellido) && !preg_match("/[0-9]/", $apellido)){
            echo"Right last name";
        }else{
            echo"Wrong last name!";
        }
        
        
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
           echo"Email entered correctly"; 
        }else{
            echo"Incorrect email";
        }
       
        
        
        
        
       
        
        
     
   
     
   
    
    
    
    
    
    
    
    
    
    
    

