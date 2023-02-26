<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="cajita">
        
        <form action="enviar.php" method="post">
            <h class="txt_registro">registro</h>
            <p class="ban">nombres <input type="text" placeholder="ingresa tus nombres" name="nombre1" required></p>
            <p class="ban">apellidos <input type="text" placeholder="ingresa tus apellidos" name="apellido1" required></p>
            <p class="ban">usuario <input type="text" placeholder="ingresa tu usuario" name="usuario1"></p>
            <p class="ban">correo <input type="email" placeholder="ingresa tu correo" name="email1"></p>
            <p class="ban">contraseña <input type="password" placeholder="crea tu contraseña" name="password1"></p>
            <input class="btn_enviar" type="submit" value="enviar">
        </form>
    </div>
</body>
</html>