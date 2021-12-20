<!DOCTYPE html>
<html lang="es">
<head>
    <?php
    
    
     
    $varNombreUsuario = $_POST['nombreUsuario']; 
    $varApellidos = $_POST['apellidos']; 
    $varCorreo = $_POST['email']; 
    $varContraseña=$_POST['passUser'];
    $varFechaNacimiento = $_POST['FechaNacimiento'];
    $varSexo = $_POST['sexo'];
    $varNumero = $_POST['numero'];
    $varNumeroRef = $_POST['numeroref'];
    $varOcupacion = $_POST['ocupacion'];
    $varPais = $_POST['Pais'];
    $varNomUsr = $_POST['nombreUsr'];

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
    $varFechaNacimiento,$varSexo,$varNumero,$varNumeroRef,$varOcupacion,$varPais)){
        //Me regresa al index de inicio de sesion.
        $archivo = fopen("datos_usuario.txt","a+") or die("Error en el archivo");

        // Escribir en el archivo:
         fwrite($archivo, "Nombre(s): " .$varNombreUsuario ."\n");
         fwrite($archivo, "Apellidos: " . $varApellidos ."\n") ;
         fwrite($archivo, "Correo: " . $varCorreo ."\n");
         fwrite($archivo, "Contraseña: " . $varContraseña ."\n");
         fwrite($archivo, "Fecha de nacimiento: ".$varFechaNacimiento ."\n");
         fwrite($archivo, "Edad: " .obtener_edad($varFechaNacimiento) ."\n");
         fwrite($archivo, "Sexo: " .$varSexo ."\n");
         fwrite($archivo, "Telefono: " .$varNumero ."\n");
         fwrite($archivo, "Telefono de Referencia: " .$varNumeroRef ."\n");
         fwrite($archivo, "Ocupacion: " .$varOcupacion ."\n");
         fwrite($archivo, "Numero de Pais: " . $varPais ."\n");
         fwrite($archivo, "Nombre de Usuario: " . $varNomUsr ."\n");
        // Fuerza a que se escriban los datos pendientes en el buffer:
         fflush($archivo);
    // Cerrar el archivo:
    fclose($archivo);
    
        header("Location: http://resultedjam.github.io/ProyectoAWS/index.html");
    }else{
        //Nos retiene en la pagina por error en el formulario
        header("Location: http://resultedjam.github.io/ProyectoAWS/scripts/Form_Registro_Pagina.php");
    }

    ?>   

</body>
</html>

