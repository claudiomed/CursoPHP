  <?php if(!isset($_SESSION)){
        session_start();
    }
            include_once 'includes/redirect.php';?>
    <?php   include_once 'includes/header.php';?>
    <?php   include_once 'includes/sidebar.php';?>

    <div id="mainContent">
           
        <h1>Informacion de usuario</h1>

        <form action="updateInformation.php" method="POST" enctype="multipart/form-data">
            <!--NAME-->
            <label for="name">Nombre</label>
            <?php $user= getUserInformation($_SESSION['email']);?>
            <p><input type="text" name="name" value="<?= $user['nombre']?>"/></p>
            <div id="errorMessages"><?php echo isset($_SESSION['errores']['nombre_valido'])?showError($_SESSION['errores']['nombre_valido'], $_SESSION['errores']['nombre']):'' ?></div>
            <!--LASTNAME-->
             <p><input type="text" name="lastname" value="<?=$user['apellido']?>"/></p>
            <div id="errorMessages"><?php echo isset($_SESSION['errores']['apellido_valido'])?showError($_SESSION['errores']['apellido_valido'], $_SESSION['errores']['apellido']):'' ?></div>
            <!--EMAIL-->
            <label for="lastname">Email</label>
            <p><input type="email" name="email" value="<?= $user['email']?>"/></p>
            <div id="errorMessages"><?php echo isset($_SESSION['errores']['email_valido'])?showError($_SESSION['errores']['email_valido'], $_SESSION['errores']['email']):'' ?></div>
            <label for="photo">Foto</label>
            <p><input type="file" name="photo"/></p>
            <p><input type="submit" name="submit" value="Update"/></p>
        </form>
        <?php unset($_SESSION['errores']); ?>
    </div>
    <!--FOOTER-->
    <?php require_once 'includes/footer.php';?> 


