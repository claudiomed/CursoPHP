    <?php if(isset($_SESSION)):?>
    <?php session_start();?>
    <?php endif;?>

    <?php require_once 'includes/header.php';?>

    <!--SIDEBAR-->    
    <?php require_once 'includes/sidebar.php';?>    
    <?php require_once 'includes/helper.php';?>    

    <!--MAIN CONTENT-->
    <?php $categoria_actual= getCategory($_GET['id']) ?>  

    <div id="mainContent">
        <h1>Entradas de <?= $categoria_actual['nombre']?></h1>
        <article class="entrada">
            <?php $entradas= getEntradasPorCategoria($_GET['id']);
                while($resultados= mysqli_fetch_assoc($entradas)):
            ?>           
            <a href="entradaCompleta.php?id=<?=$resultados['id']?>">
                 <h2><?= $resultados['titulo'];?></h2>
                 <span class="informacion_entrada"><?=$resultados['Nombre de categoria']." | ".$resultados['fecha']?></span>
                 <br>
                 <span class="informacion_entrada">Autor: <?=$resultados['Nombre']." ".$resultados['Apellido']?></span>
                    <p>
                        <?=$resultados['descripcion'];?>
                    </p>                    
            </a>
            <?php endwhile;?>
        </article>         

    </div>


    <!--FOOTER-->
    <?php require_once 'includes/footer.php';?> 

