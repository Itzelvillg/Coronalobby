<?php
$clientes = new Clientes();
   $registros=$clientes->read_all();
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
<h2>Datos de clientes</h2>
<div class="table-responsive">
    <table class="table table-bordered table-dark">

      <thead>
        <tr>
          <th >ID</th>
          <th >Nombre</th>
          <th >Apellido</th>
          <th >Email</th>
          <th >Telefono</th>
          <th >Password</th>
          <th></th>
          <th></th>

        </tr>
      </thead>
      <tbody>
      <?php
            foreach ($registros as $clientes) {
            ?>

        <tr>
          <td><?php echo $clientes->id; ?></td>
          <td><?php echo $clientes->nombre; ?></td>
          <td><?php echo $clientes->apellido; ?></td>
         
          <td><?php echo $clientes->email; ?></td>
          <td><?php echo $clientes->telefono; ?></td>
          <td><?php echo $clientes->pass; ?></td>
          <td><a href="index.php?editar&id=<?php echo $clientes->id ?>">Editar</a></td>
          <td><a href="index.php?borrar&id=<?php echo $clientes->id ?>">Borrar</a></td>
        </tr>
        <?php
            }
            ?>
      </tbody>
    </table>
