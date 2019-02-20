<?php
    
    
    $operation=$_GET['operation'];
    $num1=$_GET['number1'];
    $num2=$_GET['number2'];
    
    
    function operacion($num1,$num2,$operation){
        if($operation=="+"){
            return $num1+$num2;
        }
        if($operation=='-'){
            return $num1-$num2;
        }
        if($operation=='*'){
            return $num1*$num2;
        }
        if($operation=='/'){
            return $num1/$num2;
        }
        
    }
    
    echo $num1." ".$operation." ".$num2." = ".operacion($num1, $num2, $operation);

?>

