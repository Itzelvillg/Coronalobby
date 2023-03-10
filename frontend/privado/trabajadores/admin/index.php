<?php


include_once "../../../../backend/modelos/trabajador.php";

$trabajadores = new Trabajadores();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Trabajadores DashBoard</title>
<?php include "../../dashboard/head.php" ?>




 
    




<body > 
   <?php include "../../dashboard/admin/navbar_admin.php" ?> 
   <h3>TRABAJADORES</h3>
   <?php include "create.php" ?>
   <?php include "edit.php" ?>
   <?php include "show.php" ?>
   <?php include "data.php" ?>
   <script src="../../../publico/vendor/general/js/dashboard.js"></script>
</body>
</html>
