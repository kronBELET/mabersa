<?php
include("../db.php");
include("../LOGGIN/login.php");
session_destroy($conexion);

header("Location: ../LOGGIN/login.php");

?>