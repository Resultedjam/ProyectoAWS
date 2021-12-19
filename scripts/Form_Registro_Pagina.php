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
<div class="hero"> 
<div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
    
    <form id="registroUsuario" name="registroUsuario" action="./Res_Registro_Pagina.php" method="post"
        enctype="multipart/form-data">
    
    

        <h1>Registrate</h1>
        <!--Usuario, nombre : Letras-->
        <Fieldset> <Legend>Nombre(s)</Legend>
        <input type="text" id="nombreUsuario" name="nombreUsuario" placeholder="Ingresa en este espacio tu nombre" maxlength="35" size="50" required> 
        </Fieldset>
        
        <fieldset><Legend>Apellidos</Legend>
        <input type="text" id="apellidos" name="apellidos" placeholder="Ingresa tus apellidos" maxlength="25" size="30" required>
        </fieldset>

        <Fieldset> <Legend>Nombre de Usuario</Legend>
        <input type="text" id="nombreUsr" name="nombreUsr" placeholder="Ingresa en este espacio tu nombre de usuario" maxlength="35" size="50" required> 
        </Fieldset>
        
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
        
        <fieldset><legend>Fecha de nacimiento</legend>
        <input class=”form-date__input” type="date" id="FechaNacimiento" name="FechaNacimiento" value="2021-11-16" min="1900-01-01" max="2050-12-01">
        </fieldset>

        <fieldset>
            <legend>Sexo</legend> 
            <label for="Hombre">Hombre</label>
            <input id="Hombre" name="sexo" value="Hombre" type="radio"> 
            <label for="Mujer">Mujer</label>
            <input id="Mujer" name="sexo" value="Mujer" type="radio">
            <label for="SinEspecificar">SinEspecificar</label>
            <input id="SinEspecificar" name="sexo" value="SinEspecificar" type="radio">
        </fieldset>

        <Fieldset> <Legend>Telefono movil</Legend>
        <input type="tel" name="numero" maxlength="10" size="25" pattern="\[0-9]{10}\" placeholder="Ingresa tu telefono celular">  
        </Fieldset>
        
        <fieldset><Legend>Telefono de referencia</Legend>
        <input type="tel" name="numeroref" maxlength="10" size="25" pattern="\[0-9]{10}\" placeholder="Introduzca 10 digitos numericos">
        </fieldset>

        <Fieldset> <Legend>Ocupacion</Legend>
        <select name="ocupacion" id="ocupacion">
            <option value="Estudiante">Estudiante</option>
            <option value="Empleado">Empleado</option>
            <option value="Empresario">Empresario</option>
            <option value="Otro">Otro</option>
        </select>
        </Fieldset>

        <fieldset><legend>Selecciona tu pais</legend>
        <select class="select-css" name="Pais" id="Pais">
            <?php
                $valorPais = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", 
                "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", 
                "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", 
                "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", 
                "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", 
                "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", 
                "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", 
                "Central African Republic", "Chad", "Chile", "China", "Christmas Island", 
                "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo,the Democratic Republic of the", "Cook Islands", 
                "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", 
                "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", 
                "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", 
                "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", 
                "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", 
                "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", 
                "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", 
                "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", 
                "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", 
                "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", 
                "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", 
                "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", 
                "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", 
                "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", 
                "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", 
                "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", 
                "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", 
                "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", 
                "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", 
                "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", 
                "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", 
                "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", 
                "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", 
                "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", 
                "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", 
                "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", 
                "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", 
                "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", 
                "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", 
                "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
                $tamaño = sizeof($valorPais);
                for ($i=0; $i <= $tamaño-1; $i++) { 
                    echo "<option value='";
                    echo $i;
                    echo "'>";
                    echo $valorPais[$i];
                    echo "</option>";
                }
            ?>
        </select>
        </fieldset>


        <input type="submit" name="btnEnviar" value="Enviar Datos">

    
    

    </form>
    
    </div>


</body>

</html>