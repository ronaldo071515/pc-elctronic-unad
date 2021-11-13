
<?php
    include("../includes/utilities/debugging.php");
    require_once("/../connect/connect.php");

    $flag_table_created = false;
    opendb();
    $query = "CREATE TABLE bdunad16.tabla16(
                    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    field1 VARCHAR(15) NOT NULL,
                    field2 VARCHAR(15) NOT NULL
                )";
    if ($link !== false && mysqli_query($link, $query)) {
        $flag_table_created = true;
        $debugger->out("Tabla creada exitosamente.");
    } else {   
        $flag_table_created = false;
        $debugger->out("No se pudo crear la tabla: " . mysqli_error($link).".");
    }
    closedb();

    if($flag_table_created){
        //ACCIONES A REALIZAR DESPUÉS DE CREAR LA TABLA
    }else{
        //ACCIONES A REALIZAR EN CASO DE FALLAR LA CREACIÓN DE LA TABLA
    }

?>