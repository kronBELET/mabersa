<?php
  session_start();
   
  // Controlo si el usuario ya está logueado en el sistema.
  if(isset($_SESSION['email'])){
    // Le doy la bienvenida al email.
    echo 'Bienvenido <strong>' . $_SESSION['email'] ;
    echo '</strong>, <a href="cerrar.php">Cerrar sesion</a>';
  }else{
    // Si no está logueado lo redireccion a la página de login.";
   header("location: ../REGISTRO/registro.php");
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
    <a href="../LOGGIN/login.php">iniciar</a>
    <a href="../REGISTRO/registro.html">registrarse</a>
    
    <a href="../CRUD/crud.php">CRUD</a>
</body>
</html>