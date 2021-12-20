<?php

    function obtener_edad($FechaNacimiento) {
        $nacimiento = new DateTime($FechaNacimiento);
        $Hoy = new DateTime(date("Y-m-d"));
        $diferencia = $Hoy->diff($nacimiento);
        return $diferencia->format("%y");
    }
    
    //Boceto funcion para la validacion de inicio de sesion
    function validacion($correo,$contraseña){
        //Seria cambiar los correos y contraseñas ya expuestas por los valores extraidos de la base de datos.
        if($correo == 'algo@yopmail.com' && $contraseña= 'gatito')
        {
            echo '<h3> El valor contraseña o correo es valido';
            return true;
        }else{
            echo '<h3> El valor contraseña o correo es invalida';
            return false;
        }

    }


    function validacion2($varNombreUsuario,$varApellidos,$varCorreo,$varContraseña,
    $varFechaNacimiento,$varSexo,$varNumero,$varNumeroRef,$varOcupacion,$varPais,$varNombreUsr){

        if((estaVacio($varNombreUsr)&&estaVacio($varNombreUsuario)&& estaVacio($varApellidos)&& estaVacio($varCorreo)&& estaVacio($varContraseña)&& 
        estaVacio($varFechaNacimiento)&& estaVacio($varSexo)&& estaVacio($varNumero)&& estaVacio($varNumeroRef)&& estaVacio($varOcupacion)&& estaVacio($varPais) )) 
                return false;
        else    
                return true;
    }


    function estaVacio($dato){
        if(empty($dato)){
            echo '<h2> Dato vacio </h2>';
            return true;
        }
        else{
           echo " ";
           return false;
        }
    }
?>