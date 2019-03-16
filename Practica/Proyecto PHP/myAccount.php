  <?php if(!isset($_SESSION)){
        session_start();
    }
            include_once 'includes/redirect.php';?>
    <?php   include_once 'includes/header.php';?>
    <?php   include_once 'includes/sidebar.php';?>

    <div id="mainContent">
           
        <h1>Informacion de usuario</h1>

        <form action="updateInformation.php" method="POST">
            <!--NAME-->
            <label for="name">Nombre</label>
            <p><input type="text" name="name"/></p>
            <div id="errorMessages"><?php echo isset($_SESSION['errores']['nombre_valido'])?showError($_SESSION['errores']['nombre_valido'], $_SESSION['errores']['nombre']):'' ?></div>
            <!--LASTNAME-->
            <label for="lastname">Apellido</label>
            <p><input type="text" name="lastname"/></p>
            <div id="errorMessages"><?php echo isset($_SESSION['errores']['apellido_valido'])?showError($_SESSION['errores']['apellido_valido'], $_SESSION['errores']['apellido']):'' ?></div>
            <p><input type="submit" name="submit" value="Update"/></p>
        </form>
            
        
    </div>
        
        
    <!--FOOTER-->
    <?php require_once 'includes/footer.php';?> 


