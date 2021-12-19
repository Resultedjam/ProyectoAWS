<!DOCTYPE html>
<html lang="es">

<head>
<link rel="stylesheet" href="../Estilos/Form_Reg.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formularios</title>
</head>

<body>

    <form id="registroUsuario" name="registroUsuario" action="./respuesta_inicio.php" method="post" enctype="multipart/form-data">
        <h1>Inicia sesion</h1>
        <fieldset><legend>Correo electronico</legend>
        <input type="email" id="email" name="email" size="30" list="listaformatos" placeholder="Ingresa tu correo electronico" required>
        <datalist id="listaformatos">
            <option>.com</option>
            <option>.mx</option>
            <option>.com.mx</option>
            <option>.org</option>
        </datalist>
        </fieldset>

        <fieldset><legend>Contraseña</legend>
        <input type="password" name="passUser" id="passUser" placeholder="Ingrese una contraseña" maxlength="35" size="50" required>
        </fieldset>

        <input type="submit" name="btnEnviar" value="Ingresar">



    </form>
</body>

</html>