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
        $sql= "select * from usuarios";
        $resultado1=mysql_query($sql);
        
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
                    while($filas=mysql_fetch_assoc($resultado1)){

                    }
                ?>
                <tr>
                    <td><?php echo $filas['ID'] ?></td>
                    <td><?php echo $filas['usuario'] ?></td>
                    <td><?php echo $filas['email'] ?></td>
                    <td>
                        <a href="">Editar</a>
                        <a href="">Eliminar</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>