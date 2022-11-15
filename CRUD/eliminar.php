<?php
    include('../db.php');

    $ID=$_POST['txtID'];
    mysqli_query($conexion,"DELETE FROM usuarios where ID='$ID'")or die("error al eliminar");

    mysqli_close($conexion);

    header("location: crud.php");
?>