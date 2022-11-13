<?php
include("../db.php");
include("../LOGGIN/login.html");
session_destroy($conexion);

header("Location: ../LOGGIN/login.html");

?>