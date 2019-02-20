<!DOCTYPE HTML>
<html lang="es">
    <title>Contact</title>
        
    <h1>Contacto</h1>
    
    <ul>
        <li> <a href="Index.php" title="Index">Menu principal</a></li>
        
    </ul>
    
    <form method="POST" action="DatosRecibidos.php">
        <!--Campo del nombre-->
        <p>
            <label for="Nombre">Nombre</label>
            <input type="text" name="Nombre"> 
        </p>
        <!--Campo del apellido-->
        <p>
            <label for="Apellido">Apellido</label>
            <input type="text" name="Apellido"> <br>
        </p>
        <!--Campo de la edad-->
        <p>
            <label for="Edad"> Edad</label>
            <input type="text" name="Edad"> 
        </p>
        
        <!--Genero-->
        <input type="radio" name="Genero" value="Hombre" checked>Hombre<br>
        <input type="radio" name="Genero" value="Mujer">Mujer<br>
        <input type="radio" name="Genero" value="Otro">Otro<br>
        <br>
        
        <!--Boton de enviar-->
        <input type="submit" value="Enviar información">
        
        <!--Boton de reset-->
        <input type="reset" value="Reset">
        
    </form> 
    
</html>
