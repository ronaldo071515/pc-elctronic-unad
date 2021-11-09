<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

    $user = "root";
    $host = "localhost";
    $pass = "1234";
    $link = mysqli_connect($host, $user, $pass);
    if (!$link) {
        echo "Error al conectar a la base de datos: " . mysqli_connect_error() . " ";  
        return false;
     }     
     echo "Conexión exitosa..." . " ";   
     // mysqli_query - permite ejecutar una consulta string recibiendo como parámetro la conexión
    //de base de datos y la consulta en string
     
     if (mysqli_query($link, "CREATE DATABASE IF NOT EXISTS db_php_mysql ")) { // se ejecuta la consulta  
        echo "Base de datos creada exitosamente";
     } else {   
        //mysqli_error regresa el error al intentar ejecutar una consulta
        echo "Error al ejecutar consulta " . mysqli_error($link) . " ";
     }
     //mysqli_close cierra la conexión a base de dato de MySQL
     mysqli_close($link);



?>