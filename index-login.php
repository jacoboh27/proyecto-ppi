<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gestion Wide-System</title>
    <meta charset="UTF-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link rel="stylesheet" content="text/css" href="css/normaliza.css" />
    <link rel="stylesheet" content="text/css" href="css/estilos.css" /> 
</head>
<body>
    <div id="envoltura">
        <header>
            <h1>Software Gesti&oacute;n Papeler&iacute;a <br> Wide-System</h1>                
        </header>
        <div id="main">
            <form action="controladores/controladorLogin.php" method="post" align="center">

                <div>
                    <?php
                    
                        if (isset($_SESSION["mensaje"])) {
                            echo '<h2>'.$_SESSION["mensaje"].'</h2>';
                        }
                    
                    ?>
                </div>
                
                <h3>Ingrese los datos de usuario para iniciar sesión:</h3>

                Usuario: <input type="text" name="user_name">
                <br>
                Contraseña: <input type="password" name="password">
                <br><br>
                <input type="hidden" name="formulario" value="index"/>
                <input class="button-pri" type="submit" name="Iniciar Sesión" value="Iniciar Sesión"/>
                <input class="button-pri" type="reset"/>                
            </form>
            <br>
            <a href="index.php">Volver</a> 
        </div>
    </div>      
</body>
</html>