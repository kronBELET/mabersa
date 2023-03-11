<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <!-- Agregamos Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-DmYZfLTO5JN1gIyI1bFepYKBKeQkLHaJ/h9+XzDpe5Lvq+ohBbhjIri7Xkjn6S+" crossorigin="anonymous">
    <!-- Agregamos nuestro archivo CSS -->
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	
<header>
	<Nav>
	<?php include("../pagina_principal/header.php");  ?> 
	</Nav>
</header>
<main>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Iniciar Sesión</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="login.php" method="post" class="form-center">
                    <div class="form-group">
                        <label for="username">Nombre de Usuario:</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña:</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Ingresar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

    <!-- Scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	
	<?php include("../pagina_principal/footer.php");  ?> 
</body>
</html>

<?php
include("../db.php");

	// Verificamos si la conexión fue exitosa
	if (mysqli_connect_errno()) {
		echo "Error de conexión a la base de datos: " . mysqli_connect_error();
	}

	// Verificamos si el formulario fue enviado
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// Obtenemos los datos del formulario
		$username = $_POST["username"];
		$password = $_POST["password"];

		// Preparamos la consulta SQL para buscar el usuario
		$sql = "SELECT * FROM usuarios WHERE usuario='$username'";

		// Ejecutamos la consulta
		$resultado = mysqli_query($conexion, $sql);

		// Verificamos si se encontró el usuario
		if (mysqli_num_rows($resultado) > 0) {
			// Obtenemos los datos del usuario
			$fila = mysqli_fetch_assoc($resultado);

			// Verificamos si la contraseña es correcta
			if (password_verify($password, $fila["password"]))
			{
				// Iniciamos sesión
				session_start();
				$_SESSION["username"] = $fila["usuario"];

				// Redirigimos al usuario a la página de inicio
				header("Location: ../pagina_principal/index.php");
				exit();
			} 
			else {
				// Si la contraseña es incorrecta, mostramos un mensaje de error
				echo "Contraseña incorrecta";
			 }
		} 
		else {
			// Si el usuario no existe, mostramos un mensaje de error
			echo "Usuario no encontrado";
		 }
	}

   
?>
