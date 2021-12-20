<?php
	$mysqli=new mysqli("resultedjam.github.io","root", "","proyecto");
	
	if(mysqli_connect_errno()){
		echo 'Fallo en la conexion : ', mysqli_connect_error();
		exit();
	}

?>
