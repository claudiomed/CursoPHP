        <?php session_start()?>

        <?php require_once 'includes/header.php';?>

        <!--SIDEBAR-->    
        <?php require_once 'includes/sidebar.php';?>    
        <?php require_once 'includes/helper.php';?>    
        
        <!--MAIN CONTENT-->
                     
        <div id="mainContent">
            <h1>Ultimas entradas</h1>
            <article class="entrada">
                <?php $entradas= getEntradas(true);
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
            
            <!--VER TODAS LAS ENTRADAS-->
            <div id="view-all">
                <a href="entradas.php">Ver todas las entradas</a>
            </div>           
            
        </div>
        
        
        <!--FOOTER-->
        <?php require_once 'includes/footer.php';?> 
        

