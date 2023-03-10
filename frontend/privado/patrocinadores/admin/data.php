<?php
$patrocinadores = new Patrocinadores();
   $registros=$patrocinadores->read_all();
   //print_r($registros);
   if(isset($_GET['estado'])){
?>
      <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <strong> <?php  echo $_GET['estado'];   ?> </strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
<?php
      
   }
?>
<br>
<br>
<section class="col-10 " style="float:right ;">
<h2>Datos de patrocinadores</h2>
<div class="table-responsive">
    <table class="table table-bordered table-dark">

      <thead>
        <tr>
          <th >ID</th>
          <th >Nombre del Producto</th>
          <th >Zonto</th>
          <th >Descripcion</th>
          <th >Foto</th>
          <th >Zona</th>
          <th></th>
          <th></th>

        </tr>
      </thead>
      <tbody>
      <?php
            foreach ($registros as $patrocinadores) {
            ?>

        <tr>
          <td><?php echo $patrocinadores->id; ?></td>
          <td><?php echo $patrocinadores->nombre; ?></td>
          <td><?php echo $patrocinadores->monto; ?></td>
         
          <td><?php echo $patrocinadores->descripcion; ?></td>
        
          <td> <img src="../../../../backend/img/patrocinadores/<?php echo $patrocinadores->foto; ?>" alt="<?php echo $patrocinadores->foto; ?>" width="100px"></td>
          <td><?php echo $patrocinadores->zona; ?></td>
          <td><a href="index.php?editar&id=<?php echo $patrocinadores->id ?>">Editar</a></td>
          <td><a href="index.php?borrar&id=<?php echo $patrocinadores->id ?>">Borrar</a></td>
        </tr>
        <?php
            }
            ?>
      </tbody>
    </table>
</section>

 


