    <?php include_once 'connection.php';?> 
    <?php include_once 'login.php';?>
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
                    <p><input type="submit" name="submit"/></p>
                </form>
            </div>
            
            <div id="estadoRegistro" class="block-aside">
                <?php echo isset($_SESSION['registro'])? $_SESSION['registro']:''?>
            </div>
            
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
                    <?php var_dump(mysqli_error($connection));?>
                    
                    
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
        
        function cleanErrors(){
            
            
        }
        
        ?>

