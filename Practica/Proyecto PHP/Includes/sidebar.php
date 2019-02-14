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
                <form action="registry.php" method="POST">
                    <!--NAME-->
                    <label for="name">Nombre</label>
                    <p><input type="text" name="name"/></p>
                    <?php if($_SESSION['nombre_valido']==false){
                        echo'<strong style="color:red"><font size="2.8">'.$_SESSION['errores']['nombre'] .'</font></strong>';
                    }?>
                    <!--LASTNAME-->
                    <label for="lastname">Apellido</label>
                    <p><input type="text" name="lastname"/></p>
                    <?php if($_SESSION['apellido_valido']==false){
                        echo'<strong style="color:red"><font size="2.8">'.$_SESSION['errores']['apellido'] .'</font></strong>';
                    }?>
                    <!--EMAIL-->
                    <label for="email">Email</label>
                    <p><input type="email" name="email"/></p>
                    <?php if($_SESSION['email_valido']==false){
                        echo'<strong style="color:red"><font size="2.8">'.$_SESSION['errores']['email'] .'</font></strong>';
                    }?>
                    <!--PASSWORD-->
                    <label for="password">Contraseña</label>
                    <p><input type="password" name="password"/></p>
                    <?php
                        if($_SESSION['no_mayusculas_valido']==false){
                            echo'<strong style="color:red"><font size="2.8">'.$_SESSION['errores']['password_no_mayusculas'] .'</font></strong>';
                        }
                        if($_SESSION['numero_caracteres_valido']==false){
                            echo'<strong style="color:red"><font size="2.8">'.$_SESSION['errores']['password_numero_caracteres'] .'</font></strong>';
                        }
                        if($_SESSION['numeros_valido']==false){
                            echo'<strong style="color:red"><font size="2.8">'.$_SESSION['errores']['password_no_numeros'] .'</font></strong>';
                        }
                    ?>
                    <!--SUBMIT-->
                    <p><input type="submit" name="submit" value="submit"/></p>
                </form>
            </div>
        </aside>

