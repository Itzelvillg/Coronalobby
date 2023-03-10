<?php

require_once "../modelos/usuario.php";
print_r($_REQUEST);

if(isset($_REQUEST['email']) && isset($_REQUEST['pass'])){
$usuarios= new usuarios();
$usuarios->email=$_REQUEST['email'];   
$usuarios->pass=$_REQUEST['pass'];    
$usuarios=$usuarios->acceso();  
print_r($usuarios);

if(!empty($usuarios)){
    
    $usuarios=$usuarios[0];  
    session_start();
    $_SESSION['id']=$usuarios->id;
    $_SESSION['nombre']=$usuarios->nombre;
    $_SESSION['apellido']=$usuarios->apellido;
    $_SESSION['foto']=$usuarios->foto;
    $_SESSION['tipo']=$usuarios->tipo;
    
    header("Location: ../../../../../coronalobby.mx/frontend/privado/dashboard/index_trabajador.php");
   
}else{
    session_unset();
    session_destroy();
    header("Location: ../../../../../coronalobby.mx/frontend/privado/sing-in/index.php?mensaje=datos_incorrectos");

}
}

if(isset($_REQUEST['out'])){
    session_unset();
    session_destroy();
    header("Location: ../../../../../coronalobby.mx/frontend/privado/sing-in/index.php");
}

?>