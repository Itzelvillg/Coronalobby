<?php

require_once "../modelos/usuario.php";



if (isset($_REQUEST['opcion'])) {
    $opcion = $_REQUEST['opcion'];

    switch ($opcion) {
        case 1: //create

            if (
                isset($_REQUEST['Nombre']) and isset($_REQUEST['Apellido']) and isset($_REQUEST['Correo'])
                and isset($_REQUEST['Pass'])
            ) {
                $usuario = new Usuario();

                $usuario->Nombre = $_REQUEST["Nombre"];
                $usuario->Apellido = $_REQUEST["Apellido"];
                $usuario->Correo = $_REQUEST["Correo"];
                $usuario->Pass = $_REQUEST["Pass"];


                $usuario->create();

                echo $resultado;

                header("Location: ../../frontend/publico/acceso.php");
            }
            break;

        case 2: //update
            if (
                isset($_REQUEST['Id']) and isset($_REQUEST['Nombre']) and isset($_REQUEST['Apellido']) and isset($_REQUEST['Correo'])
                and isset($_REQUEST['Pass'])
            ) {
                $usuario = new Usuario();

                $usuario->Id = $_REQUEST["Id"];
                $usuario->Nombre = $_REQUEST["Nombre"];
                $usuario->Apellido = $_REQUEST["Apellido"];
                $usuario->Correo = $_REQUEST["Correo"];
                $usuario->Pass = $_REQUEST["Pass"];


                $usuario->update();

                echo $resultado;

                header("Location: ../../frontend/publico/.php");
            }


            break;

        case 3: //delete

            if (
                isset($_REQUEST['Id']) and isset($_REQUEST['Nombre']) and isset($_REQUEST['Apellido']) and isset($_REQUEST['Correo'])
                and isset($_REQUEST['Pass'])
            ) {
                $usuario = new Usuario();

                $usuario->Id = $_REQUEST["Id"];
                $usuario->Nombre = $_REQUEST["Nombre"];
                $usuario->Apellido = $_REQUEST["Apellido"];
                $usuario->Correo = $_REQUEST["Correo"];
                $usuario->Pass = $_REQUEST["Pass"];


                $usuario->delete();

                echo $resultado;

                header("Location: ../../frontend/publico/index.php");
            }


            break;
    }
}
