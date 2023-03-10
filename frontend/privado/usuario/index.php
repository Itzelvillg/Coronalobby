<?php
include "../../../back-end/modelos/usuario.php";
$usuario = new usuario();
$registros=$usuario->read_all();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include "../dashboard/dashboard/head.php";
    ?>
</head>
<body>
    <?php
        include "../dashboard/dashboard/header.php";        
        include "../dashboard/dashboard/nav.php"; 
        include "data.php";   
        
        if(isset($_REQUEST['edit'])){
            include "edit.php";
        }elseif(isset($_REQUEST['delete'])){
            include "delete.php";
        }
        else{
            include "create.php";
        }
        
    ?>
</body>
</html>