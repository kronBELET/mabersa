<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Estilos de Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<!-- Estilos personalizados -->
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-md-6 col-sm-12">
				<div class="card card-login">
					<div class="card-header">
						<h3 class="text-center">Login</h3>
					</div>
					<div class="card-body">
						<form>
							<div class="form-group">
								<label for="username">Usuario:</label>
								<input type="text" class="form-control" id="username" placeholder="Ingresa tu usuario">
							</div>
							<div class="form-group">
								<label for="password">Contraseña:</label>
								<input type="password" class="form-control" id="password" placeholder="Ingresa tu contraseña">
							</div>
							<button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Scripts de Bootstrap -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
