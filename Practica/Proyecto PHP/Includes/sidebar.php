    <?php include_once 'connection.php';?> 
        <!--SIDEBAR-->
        <aside id="sidebar">        
            <?php if(isset($_SESSION['usuario'])):?>
            <div id="usuario-logueado" class="block-aside">
                <?php $nombre=getUserInformation($_SESSION['email']);?>
                <h3><?php echo "Bienvenido, " .$nombre['nombre']." ".$nombre['apellido']?></h3>
                <a class="boton boton-entrada" href="create-entries.php">Crear una entrada</a>
                <a class="boton boton-crear_categoria" href="create-categories.php">Crear categoria</a>
                <a class="boton boton-mi_cuenta" href="myAccount.php">Mi cuenta</a>
                <a class="boton boton-cerrarSesion" href="includes/close_session.php">Cerrar sesion</a>
            </div>
            <?php endif;?>
            <?php if(!isset($_SESSION['usuario'])): ?>
                <div id="login" class="block-aside">
                    <h3>Identificate</h3>
                    <form action="login.php" method="POST">
                        <!--EMAIL-->
                        <label for="email">Email</label>
                        <p><input type="email" name="email"/></p>
                        <!--PASSWORD-->
                        <label for="password">Contraseña</label>
                        <p><input type="text" name="password"/></p>
                        <!--SUBMIT-->
                        <p><input type="submit" name="submit" value="submit"/></p>
                    </form>
                </div>
                <?php if(isset($_SESSION['registro'])):  ?>
                <div id="estadoRegistro" class="block-aside">
                    <?php echo isset($_SESSION['registro'])? $_SESSION['registro']:''?>
                    <?php unset($_SESSION['registro']) ?>
                </div>
                <?php endif;  ?>
                <div id="register" class="block-aside">
                    <h3>Registrate</h3>
                    <form action="registry.php" method="POST">
                        <!--NAME-->
                        <label for="name">Nombre</label>
                        <p><input type="text" name="name"/></p>
                        <div id="errorMessages"><?php echo isset($_SESSION['errores']['nombre_valido'])?showError($_SESSION['errores']['nombre_valido'], $_SESSION['errores']['nombre']):'' ?></div>
                        <!--LASTNAME-->
                        <label for="lastname">Apellido</label>
                        <p><input type="text" name="lastname"/></p>
                        <div id="errorMessages"><?php echo isset($_SESSION['errores']['apellido_valido'])?showError($_SESSION['errores']['apellido_valido'], $_SESSION['errores']['apellido']):'' ?></div>
                        <!--EMAIL-->
                        <label for="email">Email</label>
                        <p><input type="email" name="email"/></p>
                        <div id="errorMessages"><?php echo isset($_SESSION['errores']['email_valido'])?showError($_SESSION['errores']['email_valido'], $_SESSION['errores']['email']):'' ?></div>
                        <!--PASSWORD-->
                        <label for="password">Contraseña</label>
                        <p><input type="password" name="password"/></p>
                        <div id="errorMessages"><?php echo isset($_SESSION['errores']['no_mayusculas_valido'])?showError($_SESSION['errores']['no_mayusculas_valido'], $_SESSION['errores']['password_no_mayusculas']):'' ?></div>
                        <div id="errorMessages"><?php echo isset($_SESSION['errores']['no_numeros_valido'])?showError($_SESSION['errores']['no_numeros_valido'], $_SESSION['errores']['password_no_numeros']):'' ?></div>
                        <div id="errorMessages"><?php echo isset($_SESSION['errores']['numero_caracteres_valido'])?showError($_SESSION['errores']['numero_caracteres_valido'], $_SESSION['errores']['password_numero_caracteres']):'' ?></div>  
                        <!--SUBMIT-->
                        <p><input type="submit" name="submit" value="submit"/></p>
                    </form>
                </div>
            <?php endif; ?>
        </aside>
        
        <?php 
        //SE VALIDA LA INFORMACION PARA MOSTRAR EL ERROR POR CADA CAMPO DEL FORMULARIO DE REGISTRO
        function showError($validacion, $error){
            if($validacion==FALSE){
                return $error;
            }
        }
        
        function cleanErrors(){
            
            
        }
        
        ?>

