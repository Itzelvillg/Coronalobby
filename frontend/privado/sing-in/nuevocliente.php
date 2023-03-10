
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../vendor/css/index.css">
    <title>Nuevo Cliente</title>
  </head>
  <body>
<!--Header-->
<nav id="header" class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="https://www.youtube.com/watch?v=k8nxe6UE1gY">
  <img src="../../../img/aaaaaa.png" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../../publico/index.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../privado/sing-in/index.php">Tu cuenta</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Productos 
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="../../publico/secciones/productos/Azucarados.php">Azucarados</a>
          <a class="dropdown-item" href="../../publico/secciones/productos/Botanas.php">Botanas</a>
          <a class="dropdown-item" href="../../publico/secciones/productos/Reposteria.php">Reposteria</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../../publico/secciones/candyblog.php"> CandyBLOG </a>
      </li>
    </ul>
  
  </div>
</nav>



<div class="card pt-5">
  <div class="card-body">
    <h5 class="card-title">Crea tu cuenta</h5>
    <p class="card-text">
      <form action="../../../../backend/controlador/nuevocliente_controlador.php" method="POST" enctype="multipart/form-data" name="Cliente" class="needs-validation" novalidate>



        <input type="hidden" name="opcion"  value="1">
        
           <div class="form-row pt-3">
        <div class="col-md-4 mb-3">
                      <label for="id">Su clave de usuario</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupPrepend">#</span>
                        </div>
                        <input type="number" class="form-control" name="id" id="id" value="" placeholder="su id" aria-describedby="inputGroupPrepend" readonly>
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
                      <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" required maxlength="20" required>
                      <div class="valid-feedback">
                        Se ve bien!
                      </div>
                      <div class="invalid-feedback">
                        Por favor ingrese su información a este campo.
                      </div>
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="apellido">Apellido</label>
                      <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido" required maxlength="30">
                      <div class="valid-feedback">
                        Se ve bien!
                      </div>
                      <div class="invalid-feedback">
                        Por favor ingrese su información a este campo.
                      </div>
                    </div>
        
                    <div class="col-md-6 mb-3">
                      <label for="validationCustom03">Email</label>
                      <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                      <div class="valid-feedback">
                        Se ve bien!
                      </div>
                      <div class="invalid-feedback">
                        Por favor ingrese su información a este campo.
                      </div>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="validationCustom04">Direccion</label>
                      <input type="text" class="form-control" name="direccion" id="direccion"   required>
                      <div class="valid-feedback">
                        Se ve bien!
                      </div>
                      <div class="invalid-feedback">
                        Por favor ingrese su información a este campo.
                      </div>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="validationCustom05">Teléfono</label>
                      <input type="number" class="form-control" name="telefono" id="telefono"  placeholder="Teléfono" required>
                      <div class="valid-feedback">
                        Se ve bien!
                      </div>
                      <div class="invalid-feedback">
                        Por favor ingrese su información a este campo.
                      </div>
        
                      <div class="col-md-12 mb-2">
                        <label for="foto">Su foto de perfil</label>
                        <input type="file" class="form-control-file" name="foto" accept="image/*" id="foto">
                        <div class="valid-feedback">
                          Se ve bien!
                        </div>
                        <div class="invalid-feedback">
                          Por favor ingrese su información a este campo.
                        </div>
                      </div>
        
        
                      <div class="col-md-6 mb-3">
                        <label for="inputPassword6">Password</label>
                        <input type="password" name="pass" id="pass"  class="form-control mx-sm-3" aria-describedby="passwordHelpInline" required>
                        <small id="pass" class="text-muted">
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
                        <button type="submit" value="limpiar" class="btn btn-primary">Enviar</button>
                        <button type="reset" value="Enviar" class="btn btn-primary">Limpiar</button>
                    </div> 
        
        </form>
  </div>

   <!-- footer-->
   <footer id=footer>

<div class="container">
<div class="row text-center">
  
    <div class="col-12 col-lg">
      <a href="https://goo.gl/maps/NKpX8LNgRJKYLRq87"><h5>Ubicación</h5></a>
    </div>
    <div class="col-12 col-lg">
      <a href="#"><h5><abbr data-toggle="tooltip" title="3315742819 PBcandystore@gmail.com">Contactanos</abbr></h5>
       
    
    </a>
    </div>
    <div class="col-12 col-lg">
      <a href="../../publico/secciones/nosotros.php"><h5>Sobre Nosotros</h5></a>
    </div>

</div>
<br>
<br>

<br>

<br>

<br>

<br>
<br>
<br>
<br>


</footer>
    <!-- Optional JavaScript; choose one of the two! -->
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
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="../../../vendor/js/index.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>
