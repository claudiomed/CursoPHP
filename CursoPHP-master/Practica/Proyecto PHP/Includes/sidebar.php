    <?php include_once 'connection.php';?> 
        <!--SIDEBAR-->
        <aside id="sidebar">
            
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
            
            <div id="register" class="block-aside">
                <h3>Registrate</h3>
                <?php echo isset($_SESSION['registration_successfull'])? $_SESSION['registration_successfull']: 'El registro ha fallado'?>
                <form action="registry.php" method="POST">
                    <!--NAME-->
                    <label for="name">Nombre</label>
                    <p><input type="text" name="name"/></p>
                    <?php echo isset($_SESSION['nombre_valido'])?showError($_SESSION['nombre_valido'], $_SESSION['errores']['nombre']):'' ?>
                    <!--LASTNAME-->
                    <label for="lastname">Apellido</label>
                    <p><input type="text" name="lastname"/></p>
                    <?php echo isset($_SESSION['apellido_valido'])?showError($_SESSION['apellido_valido'], $_SESSION['errores']['apellido']):'' ?>
                    <!--EMAIL-->
                    <label for="email">Email</label>
                    <p><input type="email" name="email"/></p>
                    <?php echo isset($_SESSION['email_valido'])?showError($_SESSION['email_valido'], $_SESSION['errores']['email']):'' ?>
                    <!--PASSWORD-->
                    <label for="password">Contraseña</label>
                    <p><input type="password" name="password"/></p>
                    <?php echo isset($_SESSION['no_mayusculas_valido'])?showError($_SESSION['no_mayusculas_valido'], $_SESSION['errores']['password_no_mayusculas']):'' ?>
                    <?php echo isset($_SESSION['no_numeros_valido'])?showError($_SESSION['no_numeros_valido'], $_SESSION['errores']['password_no_numeros']):'' ?>
                    <?php echo isset($_SESSION['numero_caracteres_valido'])?showError($_SESSION['numero_caracteres_valido'], $_SESSION['errores']['password_numero_caracteres']):'' ?>                    
                    <!--SUBMIT-->
                    <p><input type="submit" name="submit" value="submit"/></p>
                </form>
            </div>
        </aside>
        
        <?php 
        //SE VALIDA LA INFORMACION PARA MOSTRAR EL ERROR POR CADA CAMPO DEL FORMULARIO DE REGISTRO
        function showError($validacion, $error){
            if($validacion==FALSE){
                return $error;
            }
        }
        
        ?>

