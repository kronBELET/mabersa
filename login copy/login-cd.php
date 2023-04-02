<?php
include "../db.php";
if(!empty($_POST)){
	if(isset($_POST["username"]) &&isset($_POST["password"])){
		if($_POST["username"]!=""&&$_POST["password"]!=""){
			$user_id=null;
			$sql1= "SELECT * from usuarios where (usuario='$_POST[username]' or email='$_POST[username]') and password='$_POST[password]' ";
			$query = $conexion->query($sql1);
			
			if($user_id==null){
				print "<script>alert(\"Acceso invalido.\");window.location='../login.php';</script>";
			}else{
				session_start();
				$_SESSION["user_id"]=$user_id;
				print "<script>alert('acceso valido');
				window.location='../pagina_principal/index.php';</script>";				
			}
		}
	}
}

?>