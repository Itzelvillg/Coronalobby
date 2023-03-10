<?php
$trabajadores = new Trabajadores();
   $registros=$trabajadores->read_all();
   //print_r($registros);
   if(isset($_GET['estatus'])){
?>
      <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <strong> <?php  echo $_GET['estatus'];   ?> </strong> 
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
<h2>Datos de trabajadores</h2>
<div class="table-responsive">
    <table class="table table-bordered table-dark">

      <thead>
        <tr>
          <th >ID</th>
          <th >Nombre</th>
          <th >Apellido</th>
          <th >Ocupación</th>
          <th >Email</th>
          <th >Foto</th>
          <th >Password</th>
          <th></th>
          <th></th>

        </tr>
      </thead>
      <tbody>
      <?php
            foreach ($registros as $trabajadores) {
            ?>

        <tr>
          <td><?php echo $trabajadores->id; ?></td>
          <td><?php echo $trabajadores->nombre; ?></td>
          <td><?php echo $trabajadores->apellido; ?></td>
          <td><?php echo $trabajadores->ocupacion; ?></td>
          <td><?php echo $trabajadores->email; ?></td>
        
          <td><img src="../../../../backend/img/trabajadores/<?php echo $trabajadores->foto; ?>" alt="<?php echo $trabajadores->foto; ?>" width="100px"></td>
          <td><?php echo $trabajadores->pass; ?></td>
          <td><a href="index.php?editar&id=<?php echo $trabajadores->id ?>">Editar</a></td>
          <td><a href="index.php?borrar&id=<?php echo $trabajadores->id ?>">Borrar</a></td>
        </tr>
        <?php
            }
            ?>
      </tbody>
    </table>
</section>

 


