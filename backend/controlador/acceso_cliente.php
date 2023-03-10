<?php

require_once "../modelos/usuario_cliente.php";
print_r($_REQUEST);

if(isset($_REQUEST['email']) && isset($_REQUEST['pass'])){
$clientes= new clientes();
$clientes->email=$_REQUEST['email'];   
$clientes->pass=$_REQUEST['pass'];    
$clientes=$clientes->acceso();  
print_r($clientes);

if(!empty($clientes)){
    
    $clientes=$clientes[0];  
    session_start();
    $_SESSION['id']=$clientes->id;
    $_SESSION['nombre']=$clientes->nombre;
    $_SESSION['apellido']=$clientes->apellido;
    $_SESSION['foto']=$clientes->foto;
    $_SESSION['tipo']=$clientes->tipo;
    
    header("Location: ../../../../../webdulceria/frontend/vistas/privado/dashboard/cliente/index_cliente.php");

}else{
    session_unset();
    session_destroy();
    header("Location: ../../../../../webdulceria/frontend/vistas/privado/sing-in/index.php?mensaje=datos_incorrectos");

}
}

if(isset($_REQUEST['out'])){
    session_unset();
    session_destroy();
    header("Location: ../../../../../webdulceria/frontend/vistas/privado/sing-in/index.php");
}

?>