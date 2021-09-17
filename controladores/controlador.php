<?php

include '../modelo/batido.php';

session_start();

if(isset($_SESSION["id_session"]) 
and isset($_SESSION["nombre_usuario"])
and $_SESSION["mascota"]) {
    

    if ($_POST['formulario'] == "formulario1") {

        $batido = new batido();

        /*
        switch ($_POST['size']) {
            case 'pequeno':
                $batido->setPrecio(9000);
                break;            
            case 'mediano':
                $batido->setPrecio(12500);
                break;            
            case 'grande':
                $batido->setPrecio(16000);
                break;
        }
        */

        //$batido->setTamano($_POST['size']);
        array_push($_SESSION["carrito_de_compras"],$batido);

        //setcookie('tamano', $_POST['size'], time() + 600, '/');
        header("Location:../vistas/formulario2.php");

    } else if ($_POST['formulario'] == "formulario2") {

        $batido = new batido();
        array_push($_SESSION["carrito_de_compras"],$batido);

        $batido = end($_SESSION["carrito_de_compras"]);
        $batido->setTipoUsuario($_POST["diabetes"]);

        setcookie('diabetes', $_POST['diabetes'], time() + 600, '/');
        
        if ($_POST['diabetes'] == 'diabetico') {
            header("Location:../vistas/formulario3.php");    
        } else{
            header("Location:../vistas/formulario4.php");
        }        

    } else if ($_POST['formulario'] == "formulario3" or
               $_POST['formulario'] == "formulario4") {
                  

            $batido = end($_SESSION["carrito_de_compras"]);
            $batido->setBatido($_POST["batido"]);
            setcookie('batido', $_POST['batido'], time() + 600,'/');

            $nombreBatido = $_POST["batido"];
            foreach($_SESSION["list_si"] as $obj){
                if($nombreBatido == $obj['nombre']){
                    $batido->setPrecio($obj['precio']);
                }
            }
            foreach($_SESSION["list_no"] as $obj){
                if($nombreBatido == $obj['nombre']){
                    $batido->setPrecio($obj['precio']);
                }
            }
            
         
        header("Location:../vistas/ordenfinal.php");

    } else if ($_POST['formulario'] == "terminar") {

        header('Location:../vistas/logout.php');

    } else if ($_POST['formulario'] == "otro"){
        header("Location:../vistas/formulario2.php");

    } else if ($_POST['formulario'] == "inicio"){
        header("Location:../vistas/menu-principal-user.php");

    } else if ($_POST['formulario'] == "cuenta"){
        header("Location:../vistas/cuenta.php");

    } else if ($_POST['formulario'] == "batidos-no-diabetico"){
        header("Location:../vistas/batidosNoDiabeticos.php");

    } else if ($_POST['formulario'] == "batidos-diabetico"){
        header("Location:../vistas/batidosDiabeticos.php");

    } else if ($_POST['formulario'] == "registrar_batido") { //juanes
        $nombre = $_POST['nombre'];
        $diabetico = $_POST['diabetico'];
        $precio = $_POST['precio'];    
        
        /*
        $con = mysqli_connect("localhost", "root", "", "myapp03") or die("error al conectar a la base de datos");
        */
        $con = mysqli_connect("us-cdbr-east-04.cleardb.com", 
                            "beec63adbbe188", 
                            "d1279371",
                            "heroku_e2bea33817be8ca") or die('No fue posible conectarse a la base de datos'); 

        $query = mysqli_query($con, "INSERT INTO batidos
                                    (id, nombre, diabetico, precio)
                                    VALUES
                                    (NULL, '".$nombre."', '".$diabetico."', '".$precio."')");
        
        header("Location:../vistas/menu-principal-user.php");

    }  else if ($_POST['formulario'] == "index-admin") {

        header("Location:../vistas/menu-principal-admin.php");

    } else {
        
        header("Location:../vistas/menu-principal-user.php");
    }
   
} else {
    header("Location:../vistas/pirata.php");
}

?>