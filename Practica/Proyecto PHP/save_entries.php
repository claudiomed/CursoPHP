<?php
    include_once 'includes/helper.php';

    if(!isset($_SESSION)){
        session_start();
    }    
    
        if(isset($_POST['submit'])){
            $title= isset($_POST['title']) ? $_POST['title']:'';
            $category=isset($_POST['category']) ? $_POST['category']: '';
            $description=isset($_POST['description']) ? $_POST['description']: '';
            $categoryID= getCategoryID($category);
            $ID= getUserInformation($_SESSION['email']);
            $userID=$ID['id'];
            $query="INSERT INTO entrada VALUES(NULL, '$userID', '$categoryID', '$title', '$description', CURDATE())";
            mysqli_query($_SESSION['connection'], $query);   
            header("refresh:3; url=create-entries.php");
        }
        
        if(isset($_POST['editar'])){
            $title= isset($_POST['title']) ? $_POST['title']:'';
            $category=isset($_POST['category']) ? $_POST['category']: '';
            $description=isset($_POST['description']) ? $_POST['description']: '';
            $categoryID= getCategoryID($category);
            $ID= getUserInformation($_SESSION['email']); 
            $userID=$ID['id'];
            $query="UPDATE entrada SET titulo='$title', descripcion='$description', categoria_id=$categoryID WHERE id={$_GET['entradaID']}";
            mysqli_query($_SESSION['connection'], $query);
            header("Location: index.php");
        }
        
        
        
       
 
        
    
?>

