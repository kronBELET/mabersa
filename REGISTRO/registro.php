<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <form action="enviar.php" method="post">
            <h2 class="text-center mb-4">Registro</h2>
            <div class="form-group">
                <label for="nombre1">Nombres</label>
                <input type="text" class="form-control" id="nombre1" placeholder="Ingresa tus nombres" name="nombre1" required>
            </div>
            <div class="form-group">
                <label for="apellido1">Apellidos</label>
                <input type="text" class="form-control" id="apellido1" placeholder="Ingresa tus apellidos" name="apellido1" required>
            </div>
            <div class="form-group">
                <label for="usuario1">Usuario</label>
                <input type="text" class="form-control" id="usuario1" placeholder="Ingresa tu usuario" name="usuario1">
            </div>
            <div class="form-group">
                <label for="email1">Correo</label>
                <input type="email" class="form-control" id="email1" placeholder="Ingresa tu correo" name="email1">
            </div>
            <div class="form-group">
                <label for="password1">Contraseña</label>
                <input type="password" class="form-control" id="password1" placeholder="Crea tu contraseña" name="password1">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div> 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
