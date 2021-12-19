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

    <form id="registroUsuario" name="registroUsuario" action="./Res_RegistroCurso.php" method="post" enctype="multipart/form-data">
        <h1>Escoge el curso al que quieras inscribirte</h1>
       
        <Fieldset> <Legend>Nombre de Usuario:</Legend>
        <input type="text" id="nombreUsr" name="nombreUsr" placeholder="Ingresa en este espacio tu nombre de usuario" maxlength="35" size="50" required> 
        </Fieldset>

        <fieldset><legend>Cursos</legend>
            <select name="CursoOServicio" id="CursoyServicio">
            <option value="Amazon LightSail">Amazon LightSail</option>
            <option value="Amazon EC2">Amazon EC2</option>
            <option value="Amazon DynamoDB">Amazon DynamoDB</option>
            <option value="AWS Lambda">AWS Lambda</option>
            <option value="Amazon Athena">Amazon Athena</option>
            <option value="Amazon OpenSearch Service">Amazon OpenSearch Service</option>
            <option value="Amazon Kinesis">Amazon Kinesis</option>
            <option value="Amazon CloudSearch">Amazon CloudSearch</option>
            <option value="AWS Budgetsr">AWS Budgets</option>
            <option value="AWS Cost and Usage Report">AWS Cost and Usage Reportr</option>
            <option value="Savings Plans">Savings Plans</option>
            <option value="Amazon Elastic Container Registry">Amazon Elastic Container Registry</option>
            <option value="AWS Fargate">AWS Fargate</option>
            <option value="AWS Copilot">AWS Copilot</option>
            <option value="Amazon Elastic Kubernetes Service">Amazon Elastic Kubernetes Service</option>
            <option value="Amazon Aurora">Amazon Aurora</option>
            <option value="Amazon ElastiCache">Amazon ElastiCache</option>
            <option value="Amazon RDS">Amazon RDS</option>
            <option value="Amazon Redshift">Amazon Redshift</option>
            <option value="AWS Amplify">AWS Amplify</option>
            <option value="Amazon API Gateway">Amazon API Gateway</option>
            <option value="Amazon Location">Amazon Location</option>
            <option value="AWS Device Farm">AWS Device Farm</option>
            <option value="Amazon SageMaker">Amazon SageMaker</option>
            <option value="Amazon Rekognition">Amazon Rekognition</option>
            <option value="AWS DeepRacer">AWS DeepRacer</option>
            <option value="Amazon Elastic Block Store">Amazon Elastic Block Store</option>
            <option value="AWS Backup">AWS Backup</option>
            <option value="AWS Storage Gateway">AWS Storage Gateway</option>
            <option value="Amazon Elastic File System">Amazon Elastic File System</option>

        </select>
        </fieldset>

        <input type="submit" name="btnEnviar" value="Registrar">



    </form>
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
    </div>
</body>

</html>