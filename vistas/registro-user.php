<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" content="text/css" href="../css/normaliza.css" />
    <link rel="stylesheet" content="text/css" href="../css/estilos.css" /> 
    <title>registro de usuario</title>
</head>
<body>
    <div id="envoltura">
        <header>
            <h1>Software Gesti&oacute;n Papeler&iacute;a <br> Wide-System</h1>                
        </header>
        <div id="main">
            <h2>Registrarte como nuevo usuario</h2>
            <form action="../controladores/controladorRegistro.php" method="POST" align="center">
                <label for="nombre">Nombre</label>
                <input id="nombre" name="nombre" type="text" required><br>
                <label for="usuario">Usuario</label>
                <input id="usuario" name="usuario" type="text" required><br>
                <label for="pass">Contraseña</label>
                <input id="pass" name="pass" type="password" required><br>
                <label for="cpass">Confirmar Contraseña</label>
                <input id="cpass" name="confpass" type="password" required><br><br>  
                <input class="button-pri" type="submit" value="Registrarte">            
            </form>
            <br>
            <a href="../index.php">Volver</a>
        </div>
    </div>    
</body>
</html>
<?php

?>