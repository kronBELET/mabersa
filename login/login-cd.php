<?php
include "../db.php";
if(!empty($_POST)){
    if(isset($_POST["username"]) && isset($_POST["password"])){
        if($_POST["username"] != "" && $_POST["password"] != ""){
            $sql1 = "SELECT * from usuarios where (usuario = ? or email = ?) and password = ?";
            $stmt = $conexion->prepare($sql1);
            $stmt->bind_param("sss", $_POST["username"], $_POST["username"], $_POST["password"]);
            $stmt->execute();
            $result = $stmt->get_result();
            
            if($result->num_rows == 1){
                $row = $result->fetch_assoc();
                $user_id = $row["id_usuario"];
                session_start();
                $_SESSION["user_id"] = $user_id;
                header("Location: ../pagina_principal/index_login.php");
                exit();
            } else {
                header("Location: ../login.php?error=1");
                exit();
            }
        }
    }
}
?>

