<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Dashboard</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/dashboard/">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">



  <!-- Bootstrap core CSS -->
  <link href="../../vendor/css/bootstrap.min.css" rel="stylesheet">



  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="../vendor/css/bootstrap.min(1).css" rel="stylesheet">
</head>

<body>

  <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Plan B Candy store</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="#">Salir</a>
      </li>
    </ul>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="sidebar-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="../../dashboard/index.html">
                <span data-feather="home"></span>
                Dashboard <span class="sr-only"></span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Nuevo_empleado.php">
                <span data-feather="file"></span>
                Empleados
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Ingreso_producto.php">
                <span data-feather="shopping-cart"></span>
                Productos
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Crear_cliente.php">
                <span data-feather="users"></span>
                Clientes
              </a>
            </li>
          </ul>


        </div>
      </nav>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Dashboard</h1>

        </div>

        <?php

        $nombre = "";
        $apellido = "";
        $id = "";
        $email = "";
        $direccion = "";
        $telefono = "";
        $foto = "";
        $password = "";

        if (isset($_GET['nombre'])) {
          $nombre = $_GET['nombre'];
        }

        if (isset($_GET['apellido'])) {
          $apellido = $_GET['apellido'];
        }

        if (isset($_GET['id'])) {
          $id = $_GET['id'];
        }

        if (isset($_GET['email'])) {
          $email = $_GET['email'];
        }
        if (isset($_GET['direccion'])) {
          $direccion = $_GET['direccion'];
        }

        if (isset($_GET['telefono'])) {
          $telefono = $_GET['telefono'];
        }

        if (isset($_GET['foto'])) {
          $foto = $_GET['foto'];
        }

        if (isset($_GET['password'])) {
          $password = $_GET['password'];
        }

        ?>

        <h1>Crear una cuenta</h1>
        <form class="needs-validation" novalidate>
          <div class="form-row">
            <div class="col-md-4 mb-3">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" required maxlength="20">
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
            <div class="col-md-4 mb-3">
              <label for="id">Su clave de usuario</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend">#</span>
                </div>
                <input type="number" class="form-control" name="id" id="id" placeholder="su id" aria-describedby="inputGroupPrepend" readonly>
                <div class="valid-feedback">
                  Se ve bien!
                </div>
                <div class="invalid-feedback">
                  Por favor ingrese su información a este campo.
                </div>
              </div>
            </div>
          </div>
          <div class="form-row">
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
              <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Direccion" required>
              <div class="valid-feedback">
                Se ve bien!
              </div>
              <div class="invalid-feedback">
                Por favor ingrese su información a este campo.
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationCustom05">Teléfono</label>
              <input type="number" class="form-control" name="telefono" id="telefono" placeholder="Teléfono" required>
              <div class="valid-feedback">
                Se ve bien!
              </div>
              <div class="invalid-feedback">
                Por favor ingrese su información a este campo.
              </div>

              <div class="col-md-12 mb-2">
                <label for="foto">Su foto de perfil</label>
                <input type="file" class="form-control-file" name="foto" id="foto">
                <div class="valid-feedback">
                  Se ve bien!
                </div>
                <div class="invalid-feedback">
                  Por favor ingrese su información a este campo.
                </div>
              </div>


              <div class="col-md-6 mb-3">
                <label for="inputPassword6">Password</label>
                <input type="password" name="password" id="password" class="form-control mx-sm-3" aria-describedby="passwordHelpInline">
                <small id="password" class="text-muted">
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
        </form>


    </div>
    <h2>Datos de clientes</h2>

    <table class="table table-bordered table-dark">

      <thead>
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">ID</th>
          <th scope="col">Email</th>
          <th scope="col">Dirección</th>
          <th scope="col">Telefono</th>
          <th scope="col">Foto</th>
          <th scope="col">Password</th>
        </tr>
      </thead>
      <tbody>
        <tr>

          <td><?php echo $nombre; ?></td>
          <td><?php echo $apellido; ?></td>
          <td><?php echo $id; ?></td>
          <td><?php echo $email; ?></td>
          <td><?php echo $direccion; ?></td>
          <td><?php echo $telefono; ?></td>
          <td><?php echo $foto; ?></td>
          <td><?php echo $password; ?></td>
        </tr>
      </tbody>
    </table>

    </main>
  </div>
  </div>








  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')
  </script>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>


  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
  <script src="../../vendor/js/dashboard.js"></script>
</body>

</html>