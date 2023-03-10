<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
    <link rel="icon" href="imagenes/favicon.ico" />

	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="./style.css">

</head>

<body>
	<!-- partial:index.partial.html -->
	<div class="box-form">
		<div class="left">
			<div class="overlay">
				<h1>Bienvenido</h1>
			</div>
		</div>

		<form action='../../backend/controladores/acceso.php' method="get">
			<div class="right">
				<h5>Acceso</h5>
				<p>¿No tienes una cuenta? <a href="registro.php">Crear una cuenta</a> Solo tomara un minuto</p>
				<div class="inputs">
					<input type="text" placeholder="correo electronico" name='correo' required>
					<br>
					<input type="password" placeholder="password" name='Pass' required>
				</div>

				<br><br>

				<div class="remember-me--forget-password">
					<!-- Angular -->
					<label>
						<input type="checkbox" name="item" checked />
						<span class="text-checkbox">Recuerdame</span>
					</label>
					<p>¿Olvidaste la contraseña?</p>
				</div>

				<br>
				<button type='submit'>Iniciar sesión</button>

				<a href="acceso_trabajador.php">Trabajador</a>
			</div>
		</form>
	</div>
	<!-- partial -->

</body>

</html>