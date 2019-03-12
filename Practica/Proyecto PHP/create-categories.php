    <?php if(!isset($_SESSION)){
        session_start();
    }
            include_once 'includes/redirect.php';?>
    <?php   include_once 'includes/header.php';?>
    <?php   include_once 'includes/sidebar.php';?>
    <?php   include_once 'save_categories.php';?>
    <?php   include_once 'includes/helper.php';?>

    <div id="mainContent">
           
        <h1>Ultimas entradas</h1>
        <p>
            Ingrese una nueva categoria.
        </p>

        <form action="save_categories.php" method="POST">
            <p><label for="name">Nombre</label></p>
            <input type="text" name="name"/>
            <input type="submit" name="submit" value="submit"/>
            <?php if(isset($_SESSION['categoria'])):?>
                <?php $_SESSION['available']= insertCategoria($_SESSION['categoria']);?>
                <?php if($_SESSION['available']):?>
                    <?php $exitoso=true;?>            
                <?php else: $exitoso=false; ?>            
                <?php endif;?>
                <?php unset($_SESSION['categoria']);?>
            <?php endif;?>
        </form>
             <?php if(isset($exitoso)):?>
                 <?php if($exitoso):?>
                    <div id="estadoRegistro" class="block-aside">
                    <h3>La categoria ha sido exitosamente creada</h3>
                    </div>
                <?php endif; ?>   
                <?php if(!$exitoso):?>
                    <div id="estadoRegistro" class="block-aside">
                        <h3>La categoria ya existe</h3>
                    </div>
                <?php endif; ?> 
            <?php   endif;?>
            
    </div>
        
        
    <!--FOOTER-->
    <?php require_once 'includes/footer.php';?> 

