<?php
include('../db.php');
session_start();
$usuario=$_POST['usuario'];
$password=$_POST['password'];



$consulta="SELECT * FROM usuarios where usuario='$usuario' and password='$password'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
   echo $_SESSION['usuario']; 
  header("location: ../pagina_principal/");

}else{
   
    include("login.php");

  echo "<h1 class='bad'>ERROR DE AUTENTIFICACION</h1>";

}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>