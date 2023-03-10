<div class='container my-5'>
    <div class='row'>
        <div class='col-12 col-sm-12 col-md-12 col-lg-12  my-2'>
            <form action='../../../backend/controladores/usuario_controlador.php' method='post' enctype="multipart/form-data">
                <input type="hidden" name="opcion" value="1">
                <div class='form-row'>
                    <div class='form-group col-md-6'>
                        <label for='Nombre'>Nombre</label>
                        <input type='text' class='form-control' id='Nombre' name='Nombre' <?php if(ISSET($_REQUEST['update']) or ISSET($_REQUEST['delete'])){ ?> value = "<?php echo $usuario->Nombre?>"  <?php } ?> <?php if(ISSET($_REQUEST['delete'])){ ?> readonly  <?php } ?> required>
                    </div>
                    <div class='form-group col-md-6'>
                        <label for='Apellido'>Apellido</label>
                        <input type='text' class='form-control' id='Apellido' name='Apellido' <?php if(ISSET($_REQUEST['update']) or ISSET($_REQUEST['delete'])){ ?> value = "<?php echo $usuario->Apellido?>"  <?php } ?> <?php if(ISSET($_REQUEST['delete'])){ ?> readonly  <?php } ?> required>
                    </div>
                    <div class='form-group col-md-6'>
                        <label for='correo'>Correo</label>
                        <input type='text' class='form-control' id='correo' name='correo' <?php if(ISSET($_REQUEST['update']) or ISSET($_REQUEST['delete'])){ ?> value = "<?php echo $usuario->Correo?>"  <?php } ?> <?php if(ISSET($_REQUEST['delete'])){ ?> readonly  <?php } ?> required>
                    </div>
                    <div class='form-group col-md-6'>
                        <label for='Pass'>Contraseña</label>
                        <input type='text' class='form-control' id='Pass' name='Pass' <?php if(ISSET($_REQUEST['update']) or ISSET($_REQUEST['delete'])){ ?> value = "<?php echo $usuario->Pass?>"  <?php } ?> <?php if(ISSET($_REQUEST['delete'])){ ?> readonly  <?php } ?> required>
                    </div>
                    <div class='row col-md-12 justify-content-center'>
                        <button type='submit' class='btn btn-dark my-4' name='Enviar'>Registrarse</button>
                    </div>
            </form>

        </div>
    </div>
</div>