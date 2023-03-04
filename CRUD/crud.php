<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
</head>
<body>
    <?php
        include '../db.php';
        $sql= 'SELECT * FROM usuarios';
        $resultado1= mysqli_query($conexion,$sql);
        
    ?>
    <div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>USUARIO</th>
                    <th>EMAIL</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($filas=mysqli_fetch_assoc($resultado1)){
                        
                   
                ?>
                    <tr>
                    <td><?php echo $filas['ID']; ?></td>
                    <td><?php echo $filas['usuario']; ?></td>
                    <td><?php echo $filas['email']; ?></td>
                    <td>
                        <!----editar---->
                        <a href="editar.php?id=<?php echo $filas['ID']; ?>">Editar</a>
                        <!----eliminar---->
                        <form action="eliminar.php" method="post">
                            <input type="hidden" value="<?php echo $filas['ID']?>" name="txtID"readonly>
                            <td><input type="submit" value="Eliminar" name="btnEliminar"></td>
                        </form>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
