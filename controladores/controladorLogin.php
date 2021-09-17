<?php
session_start();

$_SESSION["mensaje"] = " ";

if ($_POST['formulario'] == "index" ) {

    $user = trim($_POST['user_name']);
    $pass = trim($_POST['password']);

    if (empty ($user) or empty ($pass)) {

        if(isset($_SESSION["mensaje"])){
            $_SESSION['mensaje'] = "debe ingresar con usuario y contraseña";
            header('Location:../index-login.php');
        }
            
    } else {
        /*
        $con = mysqli_connect("localhost", 
                            "root", 
                            "", 
                            "myapp03") or die('No es posible conectar con la base de datos');
        */
        $con = mysqli_connect("us-cdbr-east-04.cleardb.com", 
                            "beec63adbbe188", 
                            "d1279371",
                            "heroku_e2bea33817be8ca") or die('No fue posible conectarse a la base de datos'); 
        
        $result = mysqli_query($con, "SELECT * FROM login_user WHERE user_name='".$user."' and pass='".$pass."'");                    
        $row = mysqli_fetch_array($result);

        /*
        //$listBatDia = mysqli_query($con, "SELECT * FROM batidos WHERE diabetico='".'SI'."'");
        //$listBatNoDia = mysqli_query($con, "SELECT * FROM batidos WHERE diabetico='".'NO'."'");

        while($rowana = $listBatNoDia->fetch_array()){
            $rowsNo[] = $rowana;
        }
        $_SESSION["list_no"] = $rowsNo;

        while($rowana = $listBatDia->fetch_array()){
            $rowsSi[] = $rowana;
        }
        $_SESSION["list_si"] = $rowsSi;
        */

        if (is_array($row)) {


            $_SESSION["user_name"] = $row['user_name'];
            $_SESSION["id_session"] = $row['id']."1000";
            $_SESSION["nombre_usuario"] = $row['nombre'];
            $_SESSION["mascota"] = "canario";
            $carrito = array();
            $_SESSION["carrito_de_compras"] = $carrito;
            //$_SESSION["list"] = $rowList;
            //$_SESSION["list_no"] = $rows;

            header("Location:controlador.php");
        } else {

            if(isset($_SESSION["mensaje"])){
                $_SESSION['mensaje'] = "¡usuario o contraseña invalidos!";
                header('Location:../index-login.php');
            }
        }
    }

    



} else if ($_POST['formulario'] == "index-admin" ) {

    $user = trim($_POST['user_name']);
    $pass = trim($_POST['password']);

    if (empty ($user) or empty ($pass)) {

        if(isset($_SESSION["mensaje"])){
            $_SESSION['mensaje'] = "debe ingresar con usuario y contraseña";
            header('Location:../index-login-admin.php');
        }
            
    } else {
        /*
        $con = mysqli_connect("localhost", 
                            "root", 
                            "", 
                            "myapp03") or die('No es posible conectar con la base de datos');
        */
        $con = mysqli_connect("us-cdbr-east-04.cleardb.com", 
                            "beec63adbbe188", 
                            "d1279371",
                            "heroku_e2bea33817be8ca") or die('No fue posible conectarse a la base de datos'); 
        
        $result = mysqli_query($con, "SELECT * FROM login_user WHERE user_name='".$user."' and pass='".$pass."'");                    
        $row = mysqli_fetch_array($result);

        if (is_array($row)) {

            $_SESSION["user_name"] = $row['user_name'];
            $_SESSION["id_session"] = $row['id']."1000";
            $_SESSION["nombre_usuario"] = $row['nombre'];
            $_SESSION["mascota"] = "canario";
            $carrito = array();
            $_SESSION["carrito_de_compras"] = $carrito;

            header("Location:../vistas/menu-principal-admin.php");
        } else {

            if(isset($_SESSION["mensaje"])){
                $_SESSION['mensaje'] = "¡usuario o contraseña invalidos!";
                header('Location:../index-login-admin.php');
            }
        }
    }

}

?>