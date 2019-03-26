<?php if(isset($_SESSION)):?>
 <?php session_start();?>
 <?php endif;?>

 <?php require_once 'includes/header.php';?>

 <!--SIDEBAR-->    
 <?php require_once 'includes/sidebar.php';?>    
 <?php require_once 'includes/helper.php';?>    

 <!--MAIN CONTENT-->
 <?php $entrada_actual= getEntrada($_GET['id']) ?>  

 <div id="mainContent_detalleEntrada">
    <h1><?= $entrada_actual['titulo']?></h1>
    <article class="entrada">
            <span class="informacion_entrada"><?=$entrada_actual['Nombre de categoria']." | ".$entrada_actual['fecha']?></span>
            <br>
            <span class="informacion_entrada">Autor: <?=$entrada_actual['Usuario nombre']." ".$entrada_actual['Usuario apellido']?></span>
            <p>
                <?=$entrada_actual['descripcion'];?>
            </p>                    
    </article>
    <?php// var_dump($_SESSION['usuario']); ?>
    <?php if(isset($_SESSION['usuario'])): ?>
        <?php if($entrada_actual['usuario_id']==$_SESSION['usuario']['id']):?>
            <a class="boton boton-editarEntrada" href="edit-entries.php?editar=<?=$entrada_actual['id']?>">Editar</a>
            <a class="boton boton-eliminarEntrada" href="delete-entry.php?id=<?=$entrada_actual['id']?>">Eliminar entrada</a>
        <?php endif; ?>
    <?php endif; ?>

 </div>

 <!--FOOTER-->
 <?php require_once 'includes/footer.php';?> 

