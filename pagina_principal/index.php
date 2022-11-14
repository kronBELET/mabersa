<?php
  session_start();
   
  // Controlo si el usuario ya está logueado en el sistema.
  if(isset($_SESSION['email'])){
    // Le doy la bienvenida al email.
    echo 'Bienvenido <strong>' . $_SESSION['email'] . '</strong>, <a href="cerrar-sesion.php">cerrar sesión</a>';
  }else{
    // Si no está logueado lo redireccion a la página de login.");
    echo "el man no esta logueado". $_SESSION['email'] ;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coco</title>
</head>
<body>
    <a href="../LOGGIN/login.html">iniciar</a>
    <a href="../REGISTRO/registro.html">registrarse</a>
    <a href="cerrar.php">Cerrar</a>
</body>
</html>