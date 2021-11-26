
<?php
    require_once("../includes/utilities/debugging.php");
    require_once("../connect/connect.php");

    $flag_table_created = false;
    opendb();
    $query = "CREATE TABLE IF NOT EXISTS bdunad16.tabla16(
                    codigo INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    nombre VARCHAR(40) NOT NULL,
                    marca VARCHAR(40) NOT NULL,
                    precio FLOAT NOT NULL,
                    cantidad FLOAT NOT NULL
                )";
    if ($link !== false && mysqli_query($link, $query)) {
        $flag_table_created = true;
        $debugger->out("Tabla creada exitosamente.");
        die ("
        <script> 
            alert('Tabla creada exitosamente.');
            window.location.href='../index.php';
        </script>");
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