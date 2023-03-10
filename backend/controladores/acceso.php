<?php
session_start();

require_once "../modelos/usuario.php";

if(isset($_REQUEST['correo']) && isset($_REQUEST['Pass'])){
    echo 'si';
    $usuario = new Usuario();

    $usuario->correo = $_REQUEST['correo'];
    $usuario->Pass = $_REQUEST['Pass'];

    $resultado = $usuario->login();

    $usuario=$resultado[0];

    $_SESSION['Id']=$usuario->Id;
    $_SESSION['correo']=$usuario->oorreo;
    $_SESSION['Nombre']=$usuario->Nombre;
    $_SESSION['Apellido']=$usuario->Apellido;
    $_SESSION['Pass']=$usuario->Pass;
 


    header("Location: ../../frontend/publico/index.php");
    
}

if(isset($_REQUEST['cerrar'])){
    session_unset();
    session_destroy();

    header("Location: ../../frontend/publico/index.php");
}

if(isset($_REQUEST['Actualizar_U'])){

    $usuario = new Usuario();

    $usuario->correo = $_REQUEST['correo'];
    $usuario->Pass = $_REQUEST['Pass'];

    $resultado = $usuario->login();

    $usuario=$resultado[0];

    $_SESSION['Id']=$usuario->Id;
    $_SESSION['Id']=$usuario->Id;
    $_SESSION['correo']=$usuario->correo;
    $_SESSION['Nombre']=$usuario->Nombre;
    $_SESSION['Apellido']=$usuario->Apellido;
    $_SESSION['Pass']=$usuario->Pass;

    header("Location: ../../publico/acceso.php");


}

?>