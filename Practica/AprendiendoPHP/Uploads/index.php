<!DOCTYPE HTML>
<html lang="es">
    <meta charset="utf-8"/>
    <head>
        <title>Random form</title>
    </head>
    
    <body>
        <!--Titulo-->
        <h1>Form</h1>
        <!--Formulario-->
        <form action="Uploads_Receiver.php" method="POST" enctype="multipart/form-data"/>
        <!--Nombre-->
        <label>Name</label>
        <p><input type="text" name="Name"/></p>
        <!--Apellido-->
        <label>Last Name</label>
        <p><input type="text" name="LastName"/></p>
        <!--Edad-->
        <label>Age</label>
        <p><input type="number" name="Age"/></p>
        <!--Subida de archivo-->
        <label>Upload file</label>
        <p><input type="file" name="File"/></p>
        <!--Enviar-->
        <p><input type="submit" name="Submit"/></p>
        
        <?php
            $folder= opendir('./images');
            if($folder){
                while(($imagen=readdir($folder))!==false){
                    if($imagen!='.' && $imagen!='..'){
                        echo "<img src='images/$imagen' width='200px'/><br>";
                    }
                }
            }
        ?>
    </body>
    
</html>
