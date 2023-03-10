<?php
   
if(isset($_REQUEST['id']) && isset($_REQUEST['editar'])){
  $patrocinadores->id=$_REQUEST['id'];
  $resultado=$patrocinadores->read_by_id();
  $patrocinadores=$resultado[0];

?>

<form action="../../../../backend/controlador/patrocinadores_controlador_admin.php" method="POST" enctype="multipart/form-data" name="Patrocinador" class="needs-validation" novalidate>


<h2>Editar</h2>
<input type="hidden" name="opcion"  value="2">

<div class="form-row">
<div class="col-md-4 mb-3">
              <label for="id">Clave del Producto</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend">#</span>
                </div>
                <input type="number" class="form-control" name="id" id="id" value="<?php echo $patrocinadores->id ?>" placeholder="su id" aria-describedby="inputGroupPrepend" readonly>
                <div class="valid-feedback">
                  Se ve bien!
                </div>
                <div class="invalid-feedback">
                  Por favor ingrese su información a este campo.
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="nombre">Nombre del Producto</label>
              <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" value="<?php echo $patrocinadores->nombre ?>" required maxlength="20" required>
              <div class="valid-feedback">
                Se ve bien!
              </div>
              <div class="invalid-feedback">
                Por favor ingrese su información a este campo.
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="id">Precio del Producto</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend">$</span>
                </div>
                <input type="number" class="form-control" name="precio" id="precio" value="<?php echo $patrocinadores->precio ?>" placeholder="Precio" aria-describedby="inputGroupPrepend" >
                <div class="valid-feedback">
                  Se ve bien!
                </div>
                <div class="invalid-feedback">
                  Por favor ingrese su información a este campo.
                </div>
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="validationCustom03">Descripción</label>
              <input type="text" class="form-control" name="descripcion" id="descripcion" value="<?php echo $patrocinadores->descripcion ?>" placeholder="Descripción" required>
              <div class="valid-feedback">
                Se ve bien!
              </div>
              <div class="invalid-feedback">
                Por favor ingrese su información a este campo.
              </div>
            </div>
            

              <div class="col-md-12 mb-2">
                <input type="hidden" name="foto_actual" value="<?php echo $patrocinadores->foto; ?>">
                <img src="../../../../backend/img/patrocinadores/<?php echo $patrocinadores->foto; ?>" alt="<?php echo $patrocinadores->foto ?>" width="100px">
                <label for="foto"> foto de producto</label>
                <input type="file" class="form-control-file" name="foto" accept="image/*" value="<?php echo $patrocinadores->foto ?>" id="foto">
                <div class="valid-feedback">
                  Se ve bien!
                </div>
                <div class="invalid-feedback">
                  Por favor ingrese su información a este campo.
                </div>
              </div>


              <div class="col-md-6 mb-3">
                <label for="inputPassword6">zona</label>
                <input type="text" name="zona" id="zona" value="<?php echo $patrocinadores->zona?>" class="form-control mx-sm-3" aria-describedby="passwordHelpInline" required>
                <small id="zona" class="text-muted">
                  Debe contener de 8 a 20 caracteres.
                </small>
                <div class="valid-feedback">
                  Se ve bien!
                </div>
                <div class="invalid-feedback">
                  Por favor ingrese su información a este campo.
                </div>
              </div>

            </div>
          </div>
         
          <div class="buttons_forms">
                <button type="submit" value="limpiar" class="btn btn-primary" style="float: right;">Enviar para editar</button>
          
            </div> 

</form>
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