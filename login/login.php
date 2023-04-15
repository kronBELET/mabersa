<?php //session_start(); ?>
<html>
	<head>
		<title>Formulario de Registro</title>
		  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>
	<body>
	<?php include("../pagina_principal/header.php");  ?> 
<div class="container">
<div class="row">
<div class="col-md-6">
		<h2>Login</h2>

		<form role="form" name="login" action="login-cd.php" method="post" style="margin-top:100px">
		  <div class="form-group">
		    <label for="username">Nombre de usuario o email</label>
		    <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario">
		  </div>
		  <div class="form-group">
		    <label for="password">Contrase&ntilde;a</label>
		    <input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a">
		  </div>

		  <button type="submit" class="btn btn-primary">Acceder</button>
		</form>
</div>
</div>
</div>
		<script src="valida_login.js"></script>
	</body>
</html>