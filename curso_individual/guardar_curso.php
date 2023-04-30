<?php
    // Incluye el archivo de conexión a la base de datos
    include '../db.php';

    // Obtiene los datos del formulario y los guarda en variables
    $nombre_curso = $_POST['curso'];
    $descripcion_curso = $_POST['descripcion'];
    $nombre_instructor = $_POST['instructor'];
    $url_imagen = $_POST['imagen'];
    $url_video = $_POST['video'];

    // Prepara la consulta SQL para insertar los datos en la tabla "cursos"
    $consulta2 = "INSERT INTO `cursos` (`Nombredelcurso`, `Descripcióndelcurso`, `Nombredelinstructor`, `URLdelaimagendelcurso`, `URLdelvideodepresentación`) VALUES ('$nombre_curso', '$descripcion_curso', '$nombre_instructor', '$url_imagen', '$url_video')";
    mysqli_query($conexion, $consulta2) or die("error de registro");

    // Verifica si la consulta SQL se ejecutó correctamente
    if (mysqli_affected_rows($conexion) > 0) {
        echo "Los datos se han guardado correctamente.";
    } else {
        echo "Error: los datos no se pudieron guardar.";
    }

    // Cierra la conexión a la base de datos
    mysqli_close($conexion);

    // Redirige a la página plantilla_curso.php
    header("location: plantilla_curso.php");
?>

