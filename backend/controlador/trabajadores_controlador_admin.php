<?php

require_once "../modelos/trabajador.php";


if(isset($_REQUEST['opcion'])){
    $opcion = $_REQUEST['opcion'];
   
    switch($opcion){
        case 1: //create
            if(isset($_REQUEST['id']) && isset($_REQUEST['nombre']) && isset($_REQUEST['apellido']) && isset($_REQUEST['ocupacion']) && isset($_FILES['foto']) &&  isset($_REQUEST['email']) && isset($_REQUEST['pass'])){
                $trabajadores=new Trabajadores();
                $trabajadores->id=$_REQUEST['id'];
                $trabajadores->nombre=$_REQUEST['nombre'];
                $trabajadores->apellido=$_REQUEST['apellido'];
                $trabajadores->ocupacion=$_REQUEST['ocupacion'];
                $trabajadores->foto=$_FILES['foto']['name'];  
                $trabajadores->email=$_REQUEST['email'];
                $trabajadores->pass=$_REQUEST['pass'];   

                $resultado=$trabajadores->create();
                echo  $resultado;

                

                if($resultado == 1){
                include_once "file_upload_trabajador.php";
                   header("Location: ../../../../../coronalobby.mx/frontend/privado/trabajadores/admin/index.php?estatus=registrado");

                }else{
                   header("Location: ../../../../../coronalobby.mx/frontend/privado/trabajadores/admin/index.php?estatus=No_registrado");

                    
                }
            }else{
                
            }
            break;
        
        case 2: //update

            if((isset($_REQUEST['id']) && isset($_REQUEST['nombre']) && isset($_REQUEST['apellido']) && isset($_REQUEST['ocupacion'])
               &&  isset($_REQUEST['email']) && isset($_REQUEST['pass'])) || isset($_FILES['foto'])){
                $trabajadores=new Trabajadores();
                $trabajadores->id=$_REQUEST['id'];
                $trabajadores->nombre=$_REQUEST['nombre'];
                $trabajadores->apellido=$_REQUEST['apellido'];
                $trabajadores->ocupacion=$_REQUEST['ocupacion'];

                 
                $trabajadores->email=$_REQUEST['email'];
                $trabajadores->pass=$_REQUEST['pass'];   

                if($_FILES['foto']['error']==0){
                    $trabajadores->foto=$_FILES['foto']['name'];    

                }else{
                    $trabajadores->foto=$_FILES['foto_actual'];    

                }

                $resultado=$trabajadores->update();
                

                if($resultado==1){
                    include_once "file_upload_trabajador.php";
                    unlink("../img/trabajadores/".$_REQUEST['foto_actual']);
                    header("Location: ../../../../../coronalobby.mx/frontend/privado/trabajadores/admin/index.php?estatus=actualizado");
                }
            }else{
                header("Location: ../../../../../coronalobby.mx/frontend/privado/trabajadores/admin/index.php?estatus=No_actualizado");
                }  
              break;

              
      
    
        case 3: //delete

            if (isset($_REQUEST['id'])) {
                $trabajadores = new Trabajadores();
                $trabajadores->id=$_REQUEST["id"];

                $resultado=$trabajadores->delete();

               

                if($resultado == 1){
                    
                    header("Location: ../../../../../coronalobby.mx/frontend/privado/trabajadores/admin/index.php?estatus=borrado");
                }else{
                   header("Location: ../../../../../coronalobby.mx/frontend/privado/trabajadores/admin/index.php?estatus=No_borrado");

                }
            }else{
               echo "No viene el id necesario";
            }
    
            break;
    }    
} else {
  
}



?>