<?php
include('../db.php');
session_start(); 
if($_POST){
    $usuario=$_POST['usuario'];
    $usuario = strtolower($usuario);
    $password=$_POST['password'];
    
    
    
    $consulta="SELECT * FROM usuarios where usuario='$usuario' and password='$password'";
    $resultado=mysqli_query($conexion,$consulta);
    $filas=mysqli_num_rows($resultado);
    
    
   
    if($filas > 0){

        $row = $resultado -> fetch_assoc();

        $contraseña_bd = $row['password'];

        if($contraseña_bd == $password){
           
            $_SESSION['email']=$row['email'];
            header("location: ../pagina_principal/");
        } 
    }
    else{
        echo "<h1 class='bad'>ERROR DE AUTENTIFICACION</h1>";
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/login.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="Caja">
   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
   <h1 class="animate__animated animate__backInLeft">iniciar seccion</h1>
   <p class="blanco">Usuario <input type="text" placeholder="ingrese su usuario" name="usuario"></p>
   <p class="blanco">Contraseña <input type="password" placeholder="ingrese su contraseña" name="password"></p>
   <input class="btn btn-success" type="submit" value="Ingresar">
   <a href="../REGISTRO/registro.html">registro</a>
   </form>
</div> 


</body>
</html>