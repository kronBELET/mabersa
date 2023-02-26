<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <form>
          <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre">
          </div>
          <div class="form-group">
            <label for="email">Correo electrónico:</label>
            <input type="email" class="form-control" id="email" placeholder="Ingrese su correo electrónico">
          </div>
          <div class="form-group">
            <label for="mensaje">Mensaje:</label>
            <textarea class="form-control" id="mensaje" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-success">Enviar</button>
        </form>
      </div>
    </div>
  </div>
   <!--  <div class="cajita">
        
        <form action="enviar.php" method="post">
            <h class="txt_registro">registro</h>
            <p class="ban">nombres <input type="text" placeholder="ingresa tus nombres" name="nombre1" required></p>
            <p class="ban">apellidos <input type="text" placeholder="ingresa tus apellidos" name="apellido1" required></p>
            <p class="ban">usuario <input type="text" placeholder="ingresa tu usuario" name="usuario1"></p>
            <p class="ban">correo <input type="email" placeholder="ingresa tu correo" name="email1"></p>
            <p class="ban">contraseña <input type="password" placeholder="crea tu contraseña" name="password1"></p>
            <input class="btn_enviar" type="submit" value="enviar">
        </form>
    </div> -->
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Formulario con Bootstrap</title>
  <!-- Incluimos los archivos CSS de Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
 
  <!-- Incluimos los archivos JS de Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
