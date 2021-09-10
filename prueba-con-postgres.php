<?php
$host = "ec2-3-230-61-252.compute-1.amazonaws.com";
$port = "5432";
$user = "icumbpmadpjtml";
$password = "01edd0004b4cfcb90f0ceec64ab2dee0ce101d2b7c9e333ce2c46cbd0c273969";
$dbname = "dea1tf160i0sk";
$con;

try{
    $con = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e) {
    echo "Fallo la conexión a la db: ". $e->getMessage();
}
?>

<?php
if (isset($_POST['add'])) {
    $description = isset($_POST['description']) ? trim($_POST['description']) : null;

    if($description){
        $insert_sql = "INSERT INTO todos(description) VALUES('$description');";
        $con->query($insert_sql);
    }
}

if (isset($_POST['delete'])) {
    $todo_id = isset($_POST['id']) ? trim($_POST['id']) : null;

    if($todo_id){
        $delete_sql = "DELETE FROM todos WHERE id = $todo_id;";
        $con->query($delete_sql);
    }
}
?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <title>prueba conexion postgres</title>
        <meta charset="utf-8">
        <link rel="stylesheet" content="text/css" href="css/normaliza.css" />
        <link rel="stylesheet" content="text/css" href="css/estilos.css" />
    </head>
    <body>
        <div id="envoltura">
            <header>
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
                <h5>adjunte archvios a imprimir en caso de aplicar</h5>
                Archivos: <input type="text" name="description">
                <br><br>
                <input type="submit" name="enviar" value="Enviar">
                <input type="reset">
                </form>
            </div>

        </div>
    </body>
</html>