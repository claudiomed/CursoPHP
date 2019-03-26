<?php
    include_once 'includes/helper.php';
    deleteEntry($_GET['id']);
    var_dump($_GET['id']);
    header("Location:index.php");
?>

