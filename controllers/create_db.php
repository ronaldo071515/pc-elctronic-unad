
<?php

    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    include("../connect/connect.php");

    $query = "CREATE DATABASE IF NOT EXISTS bdunad30112716";
    if (mysqli_query($link, $query)) {
        echo("<script>
            alert('Base de datos creada exitosamente');
            window.location='../index.php';
        </script>");
    } else {   
        echo("Error al ejecutar consulta " . mysqli_error($link));
    }

    mysqli_close($link);

?>