    <?php if(!isset($_SESSION)){
        session_start();
    }
            include_once 'includes/redirect.php';?>
    <?php   include_once 'includes/header.php';?>
    <?php   include_once 'includes/sidebar.php';?>

    <div id="mainContent">
           
        <h1>Ultimas entradas</h1>
        <p>
            Ingrese una nueva categoria.
        </p>

        <form action="save_categories.php" method="POST">
            <p><label for="name">Nombre</label></p>
            <input type="text" name="name"/>
            <input type="submit" name="submit" value="submit"/>
        </form>
            
    </div>
        
        
    <!--FOOTER-->
    <?php require_once 'includes/footer.php';?> 

