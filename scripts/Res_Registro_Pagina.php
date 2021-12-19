<?php
    require'conexion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php
    
    $varNombreUsuario = $mysqli->real_escape_string($_POST['nombreUsuario']);
    $varApellidos = $mysqli->real_escape_string($_POST['apellidos']);
    $varCorreo = $mysqli->real_escape_string($_POST['email']);
    $varContraseña = $mysqli->real_escape_string($_POST['passUser']);
    $varFechaNacimiento = $mysqli->real_escape_string($_POST['FechaNacimiento']);
    $varSexo = $mysqli->real_escape_string($_POST['sexo']);
    $varNumero = $mysqli->real_escape_string($_POST['numero']);
    $varNumeroRef = $mysqli->real_escape_string($_POST['numeroref']);
    $varOcupacion = $mysqli->real_escape_string($_POST['ocupacion']);
    $varPais = $mysqli->real_escape_string($_POST['Pais']);
    $varNomUsr = $mysqli->real_escape_string($_POST['nombreUsr']);

    include("./funciones.php");
        
    ?>
</head>
<body> 
    <h1>La pagina recibe los datos del formulario</h1> 
    
    <?php

    estaVacio($varNombreUsuario);
    estaVacio($varApellidos);
    estaVacio($varCorreo);
    estaVacio($varContraseña);
    estaVacio($varFechaNacimiento);
    estaVacio(obtener_edad($varFechaNacimiento));
    estaVacio($varSexo);
    estaVacio($varNumero);
    estaVacio($varNumeroRef);
    estaVacio($varOcupacion);
    estaVacio($varPais);
    estaVacio($varNomUsr);


    if(validacion2($varNombreUsuario,$varApellidos,$varCorreo,$varContraseña,
    $varFechaNacimiento,$varSexo,$varNumero,$varNumeroRef,$varOcupacion,$varPais,$varNomUsr)){
        
        //agregado para bd
        global $mysqli;
		
		$stmt = $mysqli->prepare("INSERT INTO usuarios (Nombre, Apellidos, Usuario, CorreoElectronico, Contrasena, Nacimiento, Sexo, Telefono, CelReferencia, Ocupacion, Pais) VALUES(?,?,?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param('sssssssiiss', $varNombreUsuario, $varApellidos, $varNomUsr, $varCorreo, $varContraseña, $varFechaNacimiento, $varSexo, $varNumero, $varNumeroRef, $varOcupacion, $varPais);
		
		if ($stmt->execute()){
            $mysqli->insert_id;
			return header("Location: http://resultedjam.github.io/ProyectoAWS/index.html");
			} else {
			return 0;
		}

    }else{

        header("Location: http://resultedjam.github.io/ProyectoAWS/scripts/Form_Registro_Pagina.php");

    }


    ?>   

</body>
</html>

