
<?php
    require_once("../includes/utilities/debugging.php");
    require_once("../connect/connect.php");

    $flag_db_created = false;
    opendb();
    $query = "CREATE DATABASE IF NOT EXISTS bdunad16 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin";
    if ($link !== false && mysqli_query($link, $query)) {
        $flag_db_created = true;
        $debugger->out("Base de datos creada exitosamente");
    } else {   
        $flag_db_created = false;
        $debugger->out("Error al ejecutar consulta " . mysqli_error($link));
    }
    closedb();

    if($flag_db_created){
        //ACCIONES A REALIZAR DESPUÉS DE CREAR LA BASE DE DATOS
    }else{
        //ACCIONES A REALIZAR EN CASO DE FALLAR LA CREACIÓN DE LA BASE DE DATOS
    }

?>