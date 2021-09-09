<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gestion Wide-System</title>
    <meta charset="UTF-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
</head>
<body>
    <form action="controladores/controladorLogin.php" method="post" align="center">

        <div>
            <?php
            
                if (isset($_SESSION["mensaje"])) {
                    echo '<h2>'.$_SESSION["mensaje"].'</h2>';
                }
            
            ?>
        </div>
        
        <h3>Ingrese los datos del usuario para el login:</h3>

        Nombre de usuario: <input type="text" name="user_name">
        <br>
        Contraseña: <input type="password" name="password">
        <br><br>
        <input type="hidden" name="formulario" value="index"/>
        <input type="submit" name="enviar" value="Enviar"/>
        <input type="reset"/>

    </form>        
</body>
</html>