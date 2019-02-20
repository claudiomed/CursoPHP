<?php
    if(!empty($_POST['Name']) && !empty($_POST['LastName']) 
        && !empty($_POST['Age'])&& !is_file('File')){
        echo"The information has been successfully sent <br>";
        
        //Variables
        $name=$_POST['Name'];
        $lastName=$_POST['LastName'];
        $age=$_POST['Age'];
        $files=$_FILES['File'];
        var_dump($files);
        
        //Variables de la imagen
        $imageName=$files['name'];
        $imageType=$files['type'];
        
        //Se guarda la imagen en la carpeta de imagenes
        $images= 'images/';
        if(!is_dir($images)){
            mkdir($images,0777);
        }
        if($imageType!="image/jpeg" && $imageType!="image/png" && $imageType!="image/jpg"){
            echo"The image has to be a JPG one";
            
        }else{
            header("Refresh:3;URL=index.php");
            move_uploaded_file($files['tmp_name'], 'images/'.$imageName);
        }
        
        
    }else{
        
        echo "An error has occurred. Please fill all the fields. "; 
    }
?>

