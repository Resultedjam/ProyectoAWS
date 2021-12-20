<!DOCTYPE html>
<html lang="es">
<head>
    <?php
    

    $varCorreo = $_POST['email']; 
    $varContraseña=$_POST['passUser'];

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
        header("Location: http://resultedjam.github.io/ProyectoAWS/Paginas/Principal.html");
    }else{
        //Me regresa al index de inicio de sesion.
        header("Location: http://resultedjam.github.io/ProyectoAWS/index.html");
    }

    
    ?> 
       
      
</body>
</html>

