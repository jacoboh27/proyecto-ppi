<?php
    $nombre = trim($_POST['nombre']);
    $usuario = trim($_POST['usuario']);
    $pass = trim($_POST['pass']);
    $confpass = trim($_POST['confpass']);

    if ($pass == $confpass) {
        /*
        $con = mysqli_connect("localhost", 
                            "root", 
                            "", 
                            "myapp03") or die('No fue posible conectarse a la base de datos');  
        */
        $con = mysqli_connect("us-cdbr-east-04.cleardb.com", 
                            "beec63adbbe188", 
                            "d1279371",
                            "heroku_e2bea33817be8ca") or die('No fue posible conectarse a la base de datos'); 

        $query = mysqli_query($con, "INSERT INTO `login_user` 
                                    (`id`, `nombre`, `user_name`, `pass`)
                                    VALUES
                                    (NULL, '".$nombre."', '".$usuario."', '".$pass."');"); 
        echo "se registró el usuario exitosamente";
        header("Location:../index.php");   
    } else {
        echo "no coinciden usuario o contraseña";
    }

    
?>