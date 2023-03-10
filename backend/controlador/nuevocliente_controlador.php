<?php

require_once "../modelos/cliente.php";


if(isset($_REQUEST['opcion'])){
    $opcion = $_REQUEST['opcion'];
   
    switch($opcion){
        case 1: //create
            if(isset($_REQUEST['id']) && isset($_REQUEST['nombre']) && isset($_REQUEST['apellido']) && isset($_REQUEST['direccion']) && isset($_REQUEST['telefono']) && isset($_FILES['foto']) &&  isset($_REQUEST['email']) && isset($_REQUEST['pass'])){
                $clientes=new Clientes();
                $clientes->id=$_GET['id'];
                $clientes->nombre=$_REQUEST['nombre'];
                $clientes->apellido=$_REQUEST['apellido'];
                $clientes->direccion=$_REQUEST['direccion'];
                $clientes->telefono=$_REQUEST['telefono']; 
                $clientes->foto=$_FILES['foto']['name'];  
                $clientes->email=$_REQUEST['email'];
                $clientes->pass=$_REQUEST['pass'];   

                $resultado=$clientes->create();
                echo  $resultado;

                

                if($resultado == 1){
                    include_once "file_upload.php";
                   header("Location: ../../frontend/privado/sing-in/index.php?estatus=Registrado");

                }else{
                   header("Location: ../../frontend/privado/sing-in/index.php?estatus=No_registrado");

                    
                }
            }else{
                
            }
            break;
        
        case 2: //update

            if((isset($_REQUEST['id']) && isset($_REQUEST['nombre']) && isset($_REQUEST['apellido'])
             && isset($_REQUEST['direccion']) && isset($_REQUEST['telefono'])  &&  isset($_REQUEST['email']) && isset($_REQUEST['pass'])) || isset($_FILES['foto'])){
                $clientes=new Clientes();
                $clientes->id=$_REQUEST['id'];
                $clientes->nombre=$_REQUEST['nombre'];
                $clientes->apellido=$_REQUEST['apellido'];
                $clientes->direccion=$_REQUEST['direccion'];
                $clientes->telefono=$_REQUEST['telefono']; 
                 
                $clientes->email=$_REQUEST['email'];
                $clientes->pass=$_REQUEST['pass'];   

                if($_FILES['foto']['error']==0){
                    $clientes->foto=$_FILES['foto']['name'];    

                }else{
                    $clientes->foto=$_FILES['foto_actual'];    

                }

                $resultado=$clientes->update();
                

                if($resultado==1){
                    include_once "file_upload.php";
                    unlink("../img/clientes/".$_REQUEST['foto_actual']);
                    header("Location: ../../frontend/privado/clientes/admin/index.php?estatus=actualizado");
                }
            }else{
                header("Location: ../../frontend/privado/clientes/admin/index.php?estatus=No_actualizado");
                }  
              break;

    
      
    
        case 3: //delete

            if (isset($_REQUEST['id'])) {
                $clientes = new Clientes();
                $clientes->id=$_REQUEST["id"];

                $resultado=$clientes->delete();

               

                if($resultado == 1){
                    
                    header("Location: ../../frontend/privado/clientes/admin/index.php?estatus=borrado");
                }else{
                   header("Location: ../../frontend/privado/clientes/admin/index.php?estatus=No_borrado");

                }
            }else{
               echo "No viene el id necesario";
            }
    
            break;
    }    
} else {
  
}



?>