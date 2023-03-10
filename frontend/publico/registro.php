<link rel="stylesheet" href="style.css">
<link rel="icon" href="imagenes/favicon.ico" />

</head>

<body>
	
	<div class="box-form">

		<div class="left">
			<div class="overlay">
				<h1>Corona Lobby</h1>
				</span>
			</div>
		</div>

		<div class="right">
			<h5>Registro</h5>
			<p><a href="#"></p>
			<form action='../../backend/controladores/Usuario_controlador.php'>
				<div class="inputs">
					<input type="hidden" name='opcion' value='1'>

					<input type="text" placeholder="¿Cuál es tu nombre?" name='Nombre' required>
					<br>
					<input type="text" placeholder="¿Cuál es tu apellido?" name='Apellido' required>
					<br>
					<input type="email" placeholder="¿Me pasas tu correo?" name='Correo' required>
					<br>
					<input type="password" placeholder="Mucho ojo con tu password" name='Pass' required>
					<br>
				</div>



				<br><br>

				<div class="remember-me--forget-password">
					<!-- Angular -->
					<label>
						<input type="checkbox" name="item" checked />
						<span class="text-checkbox">Recuérdame    </span>
					</label>
					<br>
					<p>  ¿Olvidaste tu contraseña?</p>
				</div>

				<br>
				<button type='submit' data-toggle="modal" data-target="#exampleModal">Login</button>
			</form>
		</div>

	</div>

	<!-- partial -->

</body>

</html>