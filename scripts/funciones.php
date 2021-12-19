<?php

require'conexion.php';

    function obtener_edad($FechaNacimiento) {
        $nacimiento = new DateTime($FechaNacimiento);
        $Hoy = new DateTime(date("Y-m-d"));
        $diferencia = $Hoy->diff($nacimiento);
        return $diferencia->format("%y");
    }
    
    //Boceto funcion para la validacion de inicio de sesion
    function validacion($usuario, $password){
        //Seria cambiar los correos y contraseñas ya expuestas por los valores extraidos de la base de datos.
        /*if//($correo == 'algo@yopmail.com' && $contraseña= 'gatito')
        {
            echo '<h3> El valor contraseña o correo es valido';
            return true;
        }else{
            echo '<h3> El valor contraseña o correo es invalida';
            return false;
        }*/

        global $mysqli;
            
        $stmt = $mysqli->prepare("SELECT id, Nombre, Usuario, Contrasena FROM usuarios WHERE Usuario = ? || CorreoElectronico = ? LIMIT 1");
        $stmt->bind_param("ss", $usuario, $usuario);
        $stmt->execute();
        $stmt->store_result();
        $rows = $stmt->num_rows;
        
        if($rows > 0) {
                
            $stmt->bind_result($id, $usuario, $nombre, $Contrasena);
            $stmt->fetch();
            
            $validaPassw = password_verify($password, $Contrasena);
            
            if($validaPassw){
                
                $_SESSION['id_usuario'] = $id;
                $_SESSION['nombre'] = $usuario;

            } else {
				
				$errors = "La contraseña es incorrecta";
			}
		} else {

			$errors = "El nombre de usuario o correo electrónico no existe";

		}
		return $errors;
	}

    function insertarCurso($id, $cursos){

        global $mysqli;

        $stmt = $mysqli->prepare("INSERT INTO curso (id_usuario, cursos) VALUES(?,?)");
        $stmt->bind_param('is', $id, $cursos);
            
        if ($stmt->execute()){
            echo 'llego aquí';
            $mysqli->insert_id;
            return header("Location: http://resultedjam.github.io/ProyectoAWS/Paginas/Principal.html");
        } else {
            return "no se pudo registrar cursos";
        }

    }

    function usuarioExiste($usuario, $cursos)
	{
		global $mysqli;
		
		$stmt = $mysqli->prepare("SELECT id FROM usuarios WHERE usuario = ? LIMIT 1");
		$stmt->bind_param("s", $usuario);
		$stmt->execute();
		$stmt->store_result();
		$num = $stmt->num_rows;
		
		if ($num > 0){

            $stmt->bind_result($id);
            $stmt->fetch();
            insertarCurso($id, $cursos);
            $stmt->close();
                
		} else {
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
