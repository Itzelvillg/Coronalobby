<?php

require_once "../modelos/patrocinador.php";


if(isset($_REQUEST['opcion'])){
    $opcion = $_REQUEST['opcion'];
   
    switch($opcion){
        case 1: //create
            if(isset($_REQUEST['id']) && isset($_REQUEST['nombre']) && isset($_REQUEST['monto']) && isset($_FILES['foto']) &&  isset($_REQUEST['descripcion']) && isset($_REQUEST['zona'])){
                $patrocinadores=new Patrocinadores();
                $patrocinadores->id=$_REQUEST['id'];
                $patrocinadores->nombre=$_REQUEST['nombre'];
                $patrocinadores->monto=$_REQUEST['monto'];
                $patrocinadores->foto=$_FILES['foto']['name'];  
                $patrocinadores->descripcion=$_REQUEST['descripcion'];
                $patrocinadores->zona=$_REQUEST['zona'];   

                $resultado=$patrocinadores->create();
                echo  $resultado;

                

                if($resultado == 1){
                    include_once "file_upload_patrocinador.php";
                   header("Location: ../../../../../coronalobby.mx/frontend/privado/patrocinadores/admin/index.php?estatus=registrado");

                }else{
                   header("Location: ../../../../../coronalobby.mx/frontend/privado/patrocinadores/admin/index.php?estatus=No_registrado");

                    
                }
            }else{
                
            }
            break;
        
        case 2: //update

            if((isset($_REQUEST['id']) && isset($_REQUEST['nombre']) && isset($_REQUEST['monto'])
               &&  isset($_REQUEST['descripcion']) && isset($_REQUEST['zona'])) || isset($_FILES['foto'])){
                $patrocinadores=new Patrocinadores();
                $patrocinadores->id=$_REQUEST['id'];
                $patrocinadores->nombre=$_REQUEST['nombre'];
                $patrocinadores->monto=$_REQUEST['monto'];
              
                 
                $patrocinadores->descripcion=$_REQUEST['descripcion'];
                $patrocinadores->zona=$_REQUEST['zona'];   

                if($_FILES['foto']['error']==0){
                    $patrocinadores->foto=$_FILES['foto']['name'];    

                }else{
                    $patrocinadores->foto=$_FILES['foto_actual'];    

                }

                $resultado=$patrocinadores->update();
                

                if($resultado==1){
                    include_once "file_upload_patrocinador.php";
                    unlink("../img/patrocinadores/".$_REQUEST['foto_actual']);
                    header("Location: ../../../../../coronalobby.mx/frontend/privado/patrocinadores/admin/index.php?estatus=actualizado");
                }
            }else{
                header("Location: ../../../../../coronalobby.mx/frontend/privado/patrocinadores/admin/index.php?estatus=No_actualizado");
                }  
              break;

              
      
    
        case 3: //delete

            if (isset($_REQUEST['id'])) {
                $patrocinadores = new Patrocinadores();
                $patrocinadores->id=$_REQUEST["id"];

                $resultado=$patrocinadores->delete();

               

                if($resultado == 1){
                    
                    header("Location: ../../../../../coronalobby.mx/frontend/privado/patrocinadores/admin/index.php?estatus=borrado");
                }else{
                   // header("Location: ../../frontend/vistas/clientes/index.php?estatus=NoBorrado");
                   header("Location: ../../../../../coronalobby.mx/frontend/privado/patrocinadores/admin/index.php?estatus=No_borrado");

                }
            }else{
               echo "No viene el id necesario";
            }
    
            break;
    }    
} else {
  
}



?>