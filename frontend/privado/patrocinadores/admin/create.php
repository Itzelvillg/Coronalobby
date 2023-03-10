<?php
if(!isset($_REQUEST['editar']) && !isset($_REQUEST['borrar'])){
?>

<form action="../../../../backend/controlador/patrocinadores_controlador_admin.php" method="POST" enctype="multipart/form-data" name="Patrocinadores" class="needs-validation" novalidate>



<input type="hidden" name="opcion"  value="1">

   <div class="form-row">
<div class="col-md-4 mb-3">
              <label for="id">Clave de Producto</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend">#</span>
                </div>
                <input type="number" class="form-control" name="id" id="id" value="" placeholder="su id" aria-describedby="inputGroupPrepend" readonly >
                <div class="valid-feedback">
                  Se ve bien!
                </div>
                <div class="invalid-feedback">
                  Por favor ingrese su información a este campo.
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre"  >
              <div class="valid-feedback">
                Se ve bien!
              </div>
              <div class="invalid-feedback">
                Por favor ingrese su información a este campo.
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="id">monto</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend">$</span>
                </div>
                <input type="number" class="form-control" name="monto" id="monto" value="" placeholder="monto" aria-describedby="inputGroupPrepend" >
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
              <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="descripcion" >
              <div class="valid-feedback">
                Se ve bien!
              </div>
              <div class="invalid-feedback">
                Por favor ingrese su información a este campo.
              </div>
            </div>
           
          

              <div class="col-md-6 mb-2">
                <label for="foto">Foto del Producto</label>
                <input type="file" class="form-control-file" name="foto" accept="image/*" id="foto">
                <div class="valid-feedback">
                  Se ve bien!
                </div>
                <div class="invalid-feedback">
                  Por favor ingrese su información a este campo.
                </div>
              </div>

              <div class="col-md-6 mb-3">
                <label for="inputPassword6">zona</label>
                <input type="text" name="zona" id="zona"  class="form-control mx-sm-3" aria-describedby="zona del Producto" required>
                <small id="esatus" class="text-muted">
                
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
         
          <div class="buttons_forms" style="float: right;">
                <button type="submit" value="limpiar" class="btn btn-primary">Enviar</button>
                <button type="reset" value="Enviar" class="btn btn-primary">Limpiar</button>
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