<?php
	$mysqli=new mysqli("localhost","root", "","proyecto");
	
	if(mysqli_connect_errno()){
		echo 'Fallo en la conexion : ', mysqli_connect_error();
		exit();
	}

?>