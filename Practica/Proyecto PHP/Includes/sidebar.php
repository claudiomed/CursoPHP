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
                    <!--LASTNAME-->
                    <label for="lastname">Apellido</label>
                    <p><input type="text" name="lastname"/></p>
                    
                    <!--EMAIL-->
                    <label for="email">Email</label>
                    <p><input type="email" name="email"/></p>
                    <!--PASSWORD-->
                    <label for="password">Contraseña</label>
                    <p><input type="password" name="password"/></p>
                    <!--SUBMIT-->
                    <p><input type="submit" name="submit" value="submit"/></p>
                </form>
            </div>
        </aside>

