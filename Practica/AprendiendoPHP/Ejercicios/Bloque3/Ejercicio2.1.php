<?php
    
    $email=$_GET['Email'];

    function validateEmail($email){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            return true;
        }else{
            return false;
        }
        
    }
    
    if(validateEmail($email)){
        echo"Access allowed";
    }else{
        echo"Access denied";
    }

?>

