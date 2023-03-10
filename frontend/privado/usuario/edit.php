<?php
    if(isset($_REQUEST['Id']) AND isset($_REQUEST['edit'])){
        $usuario->Id=$_REQUEST['Id'];
        $resultado=$usuario->read_by_id();
        $usu=$resultado[0];
    
?>

<div class='container my-5'>
    <div class='row'>
        <div class='col-12 col-sm-12 col-md-12 col-lg-12  my-2'>
            <form action='../../../back-end/controladores/usuario_controlador.php' method='post' enctype="multipart/form-data">
                <input type="hidden" name="opcion" value="2">
                <div class='form-row'>
                    <div class='form-group col-md-6'>
                        <label for='Id'>Id</label>
                        <input type='text' class='form-control' id='Id' name='Id' value="<?php echo $usu->Id?>" readonly>
                    </div>
                    <div class='form-group col-md-6'>
                        <label for='Nombre'>Nombre</label>
                        <input type='text' class='form-control' id='Nombre' value="<?php echo $usu->Nombre?>" name='Nombre' >
                    </div>
                    <div class='form-group col-md-6'>
                        <label for='Apellido'>Apellido</label>
                        <input type='text' class='form-control' id='Apellido' name='Apellido' value="<?php echo $usu->Apellido?>">
                    </div>
                    <div class='form-group col-md-6'>
                        <label for='Username'>Nombre de usuario</label>
                        <input type='text' class='form-control' id='Username' name='Username' value="<?php echo $usu->Username?>">
                    </div>
                    <div class='form-group col-md-6'>
                        <label for='Pass'>Contraseña</label>
                        <input type='text' class='form-control' id='Pass' name='Pass' value="<?php echo $usu->Pass?>" maxlength='40' required>
                    </div>
                    <div class='form-group col-md-6'>
                        <label for='Tipo'>Tipo de usuario</label>
                        <input type='text' class='form-control' id='Tipo' name='Tipo' value="<?php echo $usu->Tipo?>" maxlength='40' required>
                    </div>
                    <div class='custom-file col-sm-12 col-md-12 col-lg-12'>
                        <input type='file' class='custom-file-input' id='Imagen' name='Imagen' value="<?php echo $usu->Imagen ?>" accept="image/*">
                        <label class='custom-file-label' for='Imagen'>Elija el archivo</label>
                        <input type='hidden' name='Imagen_Actual' value="<?php echo $usu->Imagen ?>">
                    </div>
                    <div class='row col-md-12 justify-content-center'>
                        <button type='submit' class='btn btn-dark my-4' name='Enviar'>Añadir</button>
                    </div>
            </form>

        </div>
    </div>
</div>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
<?php
    }
?>