        <?php session_start()?>

        <?php require_once 'includes/header.php';?>

        <!--SIDEBAR-->    
        <?php require_once 'includes/sidebar.php';?>    
        <?php require_once 'includes/helper.php';?>    
        
        <!--MAIN CONTENT-->
                     
        <div id="mainContent">
            <h1>Ultimas entradas</h1>
            <article class="entrada">
                <?php $entradas= getEntradas();
                    while($resultados= mysqli_fetch_assoc($entradas)):
                ?>           
                <a href="">
                     <h2><?= $resultados['titulo'];?></h2>
                     <span class="informacion_entrada"><?=$resultados['Nombre de categoria']." | ".$resultados['fecha']?></span>
                        <p>
                            <?=$resultados['descripcion'];?>
                        </p>                    
                </a>    
                <?php endwhile;?>
            </article>
            
            <!--VER TODAS LAS ENTRADAS-->
            <div id="view-all">
                <a href="">Ver todas las entradas</a>
            </div>           
            
        </div>
        
        
        <!--FOOTER-->
        <?php require_once 'includes/footer.php';?> 
        

