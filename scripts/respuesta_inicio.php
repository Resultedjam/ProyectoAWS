<!DOCTYPE html>
<html lang="es">
<head>
    <?php

    require'conexion.php';

    $varCorreo = $mysqli->real_escape_string($_POST['email']); 
    $varContraseña = $mysqli->real_escape_string($_POST['passUser']);

    include("../scripts/funciones.php");
        
    ?>
</head>
 
<body> 
    
    <h1>La pagina recibe los datos del formulario</h1> 
    
    <?php

    estaVacio($varCorreo);
    estaVacio($varContraseña);

    //Borrador de la funcion validar inicio de sesion
    if(validacion($varCorreo,$varContraseña)){
        //Manda a principal
        header("Location: http://127.0.0.1/ProyectoAWS/Paginas/Principal.html");
    }else{
        //Me regresa al index de inicio de sesion.
        header("Location: http://127.0.0.1/ProyectoAWS/index.html");
    }

    
    ?> 
       
      
</body>
</html>

