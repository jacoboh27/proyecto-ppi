<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Gestionar Solicitud</title>
        <meta charset="utf-8">
        <link rel="stylesheet" content="text/css" href="../css/normaliza.css" />
        <link rel="stylesheet" content="text/css" href="../css/estilos.css" />
    </head>
    <body>
        <div id="envoltura" style="width: 75%;">
            <header style="margin-top: 0px;">
                <h1>Gestionar Solicitudes</h1>                
            </header>
            
            <div id="main">            
    
            <h2>Lista de Solicitudes</h2>
            <table id='tablaUsuarios' border='1'>
                <thead>
                    <tr>
                        <th>Usuario</th>
                        <th>Nombre Cliente</th>
                        <th>Tipo de Solicitud</th>
                        <th>Detalles</th>
                        <th>Archivos</th>
                        <th>Lista Productos</th>
                        <th>Estado</th>
                    </tr>
                    <tr>
                        <th>jacode</th>
                        <th>Jacobo Isaza</th>
                        <th>Imprimir Archivos</th>
                        <th>Por favor imprimir esto para medio dia</th>
                        <th>hojadevida.pdf</th>
                        <th>No Aplica</th>
                        <th>Activo</th>
                    </tr>
                    <tr>
                        <th>maria34</th>
                        <th>Maria Villa</th>
                        <th>Separar Productos</th>
                        <th>Paso por ellos el dia martes</th>
                        <th>No Aplica</th>
                        <th>Ver</th>
                        <th>Activo</th>
                    </tr>
                </thead>
                <tbody></tbody>               
            </table>
            <br><br>
                <form name="formUser" method="POST" action="" align="center">              
                <input class="button-pri" type="submit" name="enviar" value="Aceptar">
                </form>
                <br>
                <a href="menu-principal-admin.php">Volver</a> 
            </div>

        </div>
    </body>
</html>