<?php
    include("db.php");

    if(isset($_GET['legajo'])){
        $legajo = $_GET['legajo'];
        $query = "DELETE FROM alumnos WHERE legajo = $legajo";
        $result = mysqli_query($conn, $query);

        if(!$result){
            die("Query fallo");
        }

        header("Location: index.php");
    }
?>