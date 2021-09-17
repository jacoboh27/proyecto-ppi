<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Gestionar Solicitud</title>
        <meta charset="utf-8">
        <link rel="stylesheet" content="text/css" href="../css/normaliza.css" />
        <link rel="stylesheet" content="text/css" href="../css/estilos.css" />
    </head>
    <body>
        <div id="envoltura" style="width: 85%;">
            <header style="margin-top: 0px;">
                <h1>Lista de Productos</h1>                
            </header>
            
            <div id="main">            
    
            <h2>Estos son los productos que puede comprar</h2>
            <table id='tablaUsuarios' border='1'>
                <thead>
                    <tr>
                        <th>Nombre Producto</th>
                        <th>Marca</th>
                        <th>descripción</th>
                        <th>Imagen</th>
                        <th>Precio</th>
                        <th>Disponibilidad</th>
                        
                    </tr>
                    <tr>
                        <th>Colores x15</th>
                        <th>Norma</th>
                        <th>Caja de 15 Colores ¡Gratis sacapuntas!</th>
                        <th> <img style="width: 40%;" src="../assets/img/coloresnormax15.jpg"> </th>
                        <th>13.500</th>
                        <th><img style="width: 20%;" src="../assets/img/anadir-al-carrito.png"></th>
                        
                    </tr>
                    <tr>
                        <th>Resma Papel Blanco</th>
                        <th>Reprograf</th>
                        <th>Resma de Papel Blanco de 500 hojas</th>
                        <th> <img style="width: 40%;" src="../assets/img/resmareprografx500.jpg"> </th>
                        <th>15.900</th>
                        <th><img style="width: 20%;" src="../assets/img/anadir-al-carrito.png"></th>
                        
                    </tr>
                </thead>
                <tbody></tbody>               
            </table>
            <br><br>
                <form name="formUser" method="POST" action="" align="center">              
                <input class="button-pri" type="submit" name="enviar" value="Aceptar">
                </form>
                <br>
                <a href="menu-principal-user.php">Volver</a> 
            </div>

        </div>
    </body>
</html>