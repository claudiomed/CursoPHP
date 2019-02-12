<?php
$name=$_POST['Nombre'];
$lastName=$_POST['Apellido'];
$age=$_POST['Edad'];
$gender=$_POST['Genero'];

if(isset($lastName)==true){
    if($name=='Claudio' && $lastName=='Medrano' && $age==28 && $gender=='Hombre'){
        echo 'You are Claudio';
    }else{
        echo 'You are NOT Claudio, get out.';
    }
    
}else{
    echo"Fild 'Edad' esta vacio";
}
echo"<br>";
var_dump($name);
echo"<br>";
var_dump($lastName);
echo"<br>";
var_dump($age);
?>

