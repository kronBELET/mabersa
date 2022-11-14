<?php
 include('../db.php');
 $nombre1=$_POST['usuario1'];
 $apellido1=$_POST['apellido1'];
 $usuario1=$_POST['usuario1'];
 $email1=$_POST['email1'];
 $password1=$_POST['password1'];

 $consulta1="INSERT INTO `usuarios`( `nombre`, `apellido`, `usuario`, `password`, `email`) VALUES ('$nombre1','$apellido1','$usuario1','$password1','$email1')";
 $resultado1=mysqli_query($conexion,$consulta1) or die("error de registro");
 
 
 mysqli_close($conexion);
 //include("../LOGGIN/login.html");
 header("location:../LOGGIN/login.php");

?>