<?php
    require_once 'connection.php';
    require_once 'helper.php';
    
?>

<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>    
        <title>Blog de videojuegos</title>
        <link rel="stylesheet" type="text/css" href="./assets/css/style.css"/>
    </head>
    
    <body>
        <!--HEADER-->
        <header id="header">
            <!--LOGO-->
            <div id="logo"> 
                <a href="index.php">
                    Blog de videojuegos
                </a>
            </div>
            <!--MENU-->
            <nav id="menu">
                <ul>
                    <!--Inicio-->
                    <li>
                        <a href="index.php">Inicio</a>
                    </li>
                    <?php $categorias= getCategories();?>
                    <?php for($cont=0;$cont<count($categorias);$cont++):?>  
                        <li>
                            <a href="index.php"> <?=$categorias[$cont] ?> </a>
                        </li>
                    <?php endfor;?>
                    
                     <!--SOBRE NOSOTROS-->
                    <li>
                        <a href="index.php">Sobre nosotros</a>
                    </li>
                     <!--CONTACTO-->
                    <li>
                        <a href="index.php">Contacto</a>
                    </li>
                </ul>
            </nav>
            
            <div class="clearfix"></div>
        </header>
        
        <div id="container">