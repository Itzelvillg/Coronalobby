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

        $nombre_produc = "";
        $precio = "";
        $id = "";
        $descripcion = "";
        $estatus = "";
        $foto = "";


        if (isset($_GET['nombre_produc'])) {
          $nombre_produc = $_GET['nombre_produc'];
        }

        if (isset($_GET['precio'])) {
          $precio = $_GET['precio'];
        }

        if (isset($_GET['id'])) {
          $id = $_GET['id'];
        }

        if (isset($_GET['descripcion'])) {
          $descripcion = $_GET['descripcion'];
        }
        if (isset($_GET['estatus'])) {
          $estatus = $_GET['estatus'];
        }

        if (isset($_GET['foto'])) {
          $foto = $_GET['foto'];
        }


        ?>

        <h1>Nuevo producto</h1>
        <p><b>Complete el formulario por favor</b></p>
        <form class="needs-validation" novalidate>
          <div class="form-row">
            <div class="col-md-4 mb-3">
              <label for="nombre_produc">Nombre del producto</label>
              <input type="text" class="form-control" name="nombre_produc" id="nombre_produc" placeholder="Nombre del producto" required maxlength="20">


              <div class="invalid-feedback">
                Por favor ingrese la información a este campo.
              </div>
            </div>


            <div class="col-md-4 mb-3">
              <label for="cliente_id">Precio</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend">$</span>
                </div>
                <input type="number" class="form-control" name="precio" id="precio" placeholder="Precio del producto" aria-describedby="inputGroupPrepend" required maxlength="100">

                <div class="invalid-feedback">
                  Por favor ingrese su información a este campo.
                </div>
              </div>
            </div>
          </div>




          <div class="col-md-4 mb-3">
            <label for="id">Clave del producto</label>
            <input type="number" class="form-control" name="id" id="id" placeholder="Id del producto" required maxlength="8">

            <div class="invalid-feedback">
              Por favor ingrese la información a este campo.
            </div>
          </div>

          <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="validationCustom03">Descripción</label>
              <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Descripción del producto" required maxlength="100">

              <div class="invalid-feedback">
                Por favor ingrese su información a este campo.
              </div>
            </div>

            <div class="col-md-12 mb-2">
              <label for="foto"> foto del producto</label>
              <input type="file" class="form-control-file" name="foto" id="foto">
              <div class="valid-feedback">

                <div class="invalid-feedback">
                  Por favor ingrese su información a este campo.
                </div>
              </div>

              <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="validationCustom03">Estatus de disponibilidad</label>
                  <input type="text" class="form-control" name="estatus" id="estatus" placeholder="Estatus de disponibilidad" required maxlength="20">

                  <div class="invalid-feedback">
                    Por favor ingrese la información a este campo.
                  </div>


                </div>
              </div>
              <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                  <label class="form-check-label" for="invalidCheck">
                    Acepto los terminos y condiciones.
                  </label>
                  <div class="invalid-feedback">
                    Debe aceptar los terminos y condiciones.
                  </div>
                </div>
              </div>
              <button class="btn btn-primary" type="submit">Aceptar</button>
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
    <h2>Datos del Producto</h2>

    <table class="table table-bordered table-dark">

      <thead>
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Precio</th>
          <th scope="col">ID</th>
          <th scope="col">Descripcin</th>
          <th scope="col">Estatus</th>
          <th scope="col">Foto</th>
        </tr>
      </thead>
      <tbody>
        <tr>

          <td><?php echo $nombre_produc; ?></td>
          <td><?php echo $precio; ?></td>
          <td><?php echo $id; ?></td>
          <td><?php echo $descripcion; ?></td>
          <td><?php echo $estatus; ?></td>
          <td><?php echo $foto; ?></td>

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