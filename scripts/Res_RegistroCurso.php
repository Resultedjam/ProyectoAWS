<!DOCTYPE html>
<html lang="es">
<head>
    <?php

    require'conexion.php';

    $varCurso = $mysqli->real_escape_string($_POST['CursoOServicio']); 
    $varNombreUsr = $mysqli->real_escape_string($_POST['nombreUsr']);

    include("./funciones.php");
    ?>
</head>
<body> 
    
    <?php

    estaVacio($varCurso);
    estaVacio($varNombreUsr);

    

    if(!estaVacio($varCurso) || !estaVacio($varNombreUsr)){
 
        usuarioExiste($varNombreUsr, $varCurso);

    }else{
        
        header("Location: http://resultedjam.github.io/ProyectoAWS/scripts/RegistroCurso.php");
 
    }

    ?>   

</body>
</html>

