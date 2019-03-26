<?php

include_once 'includes/helper.php';
?>
       <h1>Informacion de usuario</h1>

        <form action="test.php" method="POST" enctype="multipart/form-data">
            <label for="photo">Foto</label>
            <p><input type="file" name="photo"/></p>
            <p><input type="submit" name="submit" value="submit"/></p>
        </form>
    </div>
    
    <?php
        if(isset($_POST['submit'])){
            $foto= addslashes(file_get_contents($_FILES['photo']['tmp_name']));
            $nombre=$_FILES['photo']['name'];
            insertPhoto($foto, 20);
            echo showImage(20);
            unset($_POST);
        }
    ?>
     

