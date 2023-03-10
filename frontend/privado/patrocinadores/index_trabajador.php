<?php


include_once "../../../backend/modelos/patrocinador.php";

$patrocinadores = new Patrocinadores();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Patrocinadores DashBoard</title>
<?php include "../dashboard/head.php" ?>




 
    




<body > 
   <?php include "../dashboard/navbar.php" ?> 
   <h3>patrocinadores</h3>
   <?php include "create.php" ?>
   <?php include "edit.php" ?>
   
   <?php include "data.php" ?>
   <script src="../../publico/vendor/general/js/dashboard.js"></script>
</body>
</html>
