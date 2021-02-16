<?php
    include("db.php");

    if(isset($_GET['legajo'])){
        $legajo = $_GET['legajo'];
        $query = "SELECT * FROM alumnos WHERE legajo = $legajo";
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);

            $legajo = $row['legajo'];
            $nombreyapellido = $row['nombreyapellido'];
            $domicilio = $row['domicilio'];
            $codigopostal = $row['codigopostal'];
            $fechanacimiento = $row['fechanacimiento'];
            $email = $row['email'];
            $gruposanguineo = $row['gruposanguineo'];
            $telefonofijo = $row['telefonofijo'];
            $telefonomovil = $row['telefonomovil'];
            $dni = $row['dni'];
        }
    }

    if(isset($_POST['actualizar'])){
        $legajo = $_GET['legajo'];
        $nombreyapellido = $_POST['nombreyapellido'];
        $domicilio = $_POST['domicilio'];
        $codigopostal = $_POST['codigopostal'];
        $fechanacimiento = $_POST['fechanacimiento'];
        $email = $_POST['email'];
        $gruposanguineo = $_POST['gruposanguineo'];
        $telefonofijo = $_POST['telefonofijo'];
        $telefonomovil = $_POST['telefonomovil'];
        $dni = $_POST['dni'];

        $query = "UPDATE alumnos set legajo = '$legajo', nombreyapellido = '$nombreyapellido', domicilio = '$domicilio', codigopostal = '$codigopostal', fechanacimiento = '$fechanacimiento', email = '$email', gruposanguineo = '$gruposanguineo', telefonofijo = '$telefonofijo', telefonomovil = '$telefonomovil', dni = '$dni' WHERE legajo = '$legajo'";
        mysqli_query($conn, $query);
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">

    <title>CRUD</title>
</head>
<body>

<style type="text/css">
    .container-editar{
        width: 100%;
        height: 635px;

        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .form-editar{
        margin: auto;
        width: 20%;
        height: auto;
        padding: 10px;
        display: block;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
    }

    .form{
        margin: auto;
        text-align: center;
    }

    @media screen and (max-width:700px){
	.form-editar {
		width: 70%;;
	} 
}

    .form input{
        width: 94%;
        padding: 8px;
        font-family: sans-serif;
        margin: 2px;
    }

    .boton-editar{
        text-align: center;
        background-color: rgb(34, 34, 34);
        color: white;
        border: none;
        font-family: sans-serif;
        margin: auto;
        margin-top: 20px;
        display: block;
        cursor: pointer;
        padding: 10px;
}
    }
</style>

<div class="container-editar">
    <form method="POST" action="editar.php?legajo=<?php echo $_GET['legajo']; ?>" class="form-editar">
        <div class="form">
            <input type="text" name="legajo" value="<?php echo $legajo; ?>" placeholder="edita legajo">
        </div>
        <div class="form">
            <input type="text" name="nombreyapellido" value="<?php echo $nombreyapellido; ?>" placeholder="edita nombre y apellido">
        </div>
        <div class="form">
            <input type="text" name="domicilio" value="<?php echo $domicilio; ?>" placeholder="edita domicilio">
        </div>
        <div class="form">
            <input type="text" name="codigopostal" value="<?php echo $codigopostal; ?>" placeholder="edita codigo postal">
        </div>
        <div class="form">
            <input type="text" name="fechanacimiento" value="<?php echo $fechanacimiento; ?>" placeholder="edita fecha nacimiento">
        </div>
        <div class="form">
            <input type="text" name="email" value="<?php echo $email; ?>" placeholder="edita email">
        </div>
        <div class="form">
            <input type="text" name="gruposanguineo" value="<?php echo $gruposanguineo; ?>" placeholder="edita grupo sanguineo">
        </div>
        <div class="form">
            <input type="text" name="telefonofijo" value="<?php echo $telefonofijo; ?>" placeholder="edita telefono fijo">
        </div>
        <div class="form">
            <input type="text" name="telefonomovil" value="<?php echo $telefonomovil; ?>" placeholder="edita telefono movil">
        </div>
        <div class="form">
            <input type="text" name="dni" value="<?php echo $dni; ?>" placeholder="edita dni">
        </div>

        <button name="actualizar" class="boton-editar">Actualizar</button>
    </form>
</div>
</body>
</html>