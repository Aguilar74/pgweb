<?php  
	$servidor = "localhost";
	$user = "root";
	$pass = "";
	$bd = "directorio";
	$port = "3306";

	$con = mysqli_connect($servidor, $user, $pass, $bd) or die("No fue posible establecer la comunicacion con el servidor");
?>