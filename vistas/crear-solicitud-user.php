<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Crear Solicitud</title>
        <meta charset="utf-8">
        <link rel="stylesheet" content="text/css" href="../css/normaliza.css" />
        <link rel="stylesheet" content="text/css" href="../css/estilos.css" />
    </head>
    <body>
        <div id="envoltura">
            <header style="margin-top: 0px;">
                <h1>Solicitudes</h1>                
            </header>
            <div id="main">
                <form name="formUser" method="POST" action="" align="center">

                <h2>Ingrese la nueva solicitud</h2>
                <h5>Aquí puede agregar solictudes como separar material o mandar archivos imprimibles, 
                    para recoger en sitio más tarde.</h5>

                Tipo de solicitud: <input type="text" name="description">
                <br><br>
                <p>Aquí puedes detallar tu orden</p>
                descripcion: <input type="text" name="description">
                <br><br>
                <h5>Seleccione los productos que necesites, en caso de aplicar</h5>
                <a class="button-pri" href="productos-user.php">Pedir Productos</a>
                <br><br> 
                <h5>adjunte archvios a imprimir, en caso de aplicar</h5>
                Archivos: <input type="text" name="description">
                <br><br>
                <input class="button-pri" type="submit" name="enviar" value="Enviar">
                <input class="button-pri" type="reset">
                </form>
                <br>
                <a href="menu-principal-user.php">Volver</a> 
            </div>

        </div>
    </body>
</html>