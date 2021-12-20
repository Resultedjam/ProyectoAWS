<!DOCTYPE html>
<html lang="es">
<head>
    <?php
    $varCurso = $_POST['CursoyServicio']; 
    $varNombreUsr=$_POST['nombreUsr'];

    include("./funciones.php");
    ?>
</head>
<body> 
    
    <?php

    estaVacio($varCurso);
    estaVacio($varNombreUsr);

    

    if(estaVacio($varCurso) || estaVacio($varNombreUsr)){
        //Nos retiene en la pagina por error en el formulario
        header("Location: http://resultedjam.github.io/ProyectoAWS/scripts/RegistroCurso.php");
    }else{
        $archivo = fopen("datos_curso.txt","a+") or die("Error en el archivo");
        // Escribir en el archivo:
         fwrite($archivo, "Nombre de Usuario: " .$varNombreUsr ."\n");
         fwrite($archivo, "Curso o Servicio: " .$varCurso ."\n");
        // Fuerza a que se escriban los datos pendientes en el buffer:
       fflush($archivo);
        // Cerrar el archivo:
        fclose($archivo);
            //Me regresa al index de Pirncipal.
        header("Location: http://resultedjam.github.io/ProyectoAWS/Paginas/Principal.html");
    }

    ?>   

</body>
</html>

