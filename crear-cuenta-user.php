<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" content="text/css" href="css/normaliza.css" />
    <link rel="stylesheet" content="text/css" href="css/estilos.css" />
    <script type="text/javascript" src="js/operaciones.js"></script>
    <title>Clase 10</title>
</head>
<body>

    <!--
        ?php 
        require('db/db.php');

        $db = new Db();

        if($db->con()){
            echo "Conexión exitosa a la db";
        } else {
            echo "Fallo la conexión a la db";
        }    
    ?> 
    -->

    <div class="principal">
        <div class="bloque">
            <h2>Crear Cuenta de Usuario</h2>

            <form method="POST" onsubmit="return ingresarNuevoUsuario()">
                <label for="nombre">Nombre:</label><br>
                <input type="text" id="nombre" name="nombre"><br>

                <label for="nombre">Usuario:</label><br>
                <input type="text" id="usuario" name="usuario"><br>

                <label for="password">Contraseña:</label><br>
                <input type="password" id="password" name="password"><br><br>

                <div><input class="button-pri" type="submit" name="enviar" value="Enviar"></div><br>
                <input class="button-pri" type="reset">
            </form>  
        </div>

        <div class="bloque">
            <h3>Cuentas de Usuarios</h3>
            <table id='tablaUsuarios' border='1'>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Usuario</th>
                        <th>Contraseña</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>

    </div>
   
</body>
</html>