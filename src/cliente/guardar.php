<?php

    include("db.php");

    if(isset($_POST['guardar'])){
        $legajo = $_POST['legajo'];
        $nombreyapellido = $_POST['nombreyapellido'];
        $domicilio = $_POST['domicilio'];
        $codigopostal = $_POST['codigopostal'];
        $fechanacimiento = $_POST['fechanacimiento'];
        $email = $_POST['email'];
        $gruposanguineo = $_POST['gruposanguineo'];
        $telefonofijo = $_POST['telefonofijo'];
        $telefonomovil = $_POST['telefonomovil'];
        $dni = $_POST['dni'];

        $query = "INSERT INTO alumnos(legajo,nombreyapellido,domicilio,codigopostal,fechanacimiento,email,gruposanguineo,telefonofijo,telefonomovil,dni) VALUES('$legajo','$nombreyapellido','$domicilio','$codigopostal','$fechanacimiento','$email','$gruposanguineo','$telefonofijo','$telefonomovil','$dni')";
        $result = mysqli_query($conn, $query);

        header("Location:index.php");
    }
?>