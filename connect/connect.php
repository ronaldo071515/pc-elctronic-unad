<?php
    $user = "root";
    $host = "localhost";
    $pass = "12345678";
    $dbname = "bdunad16";
    $link = false;
    

    function opendb(){
        if($GLOBALS['link'] != false) return;

        $GLOBALS['link'] = mysqli_connect($GLOBALS['host'], $GLOBALS['user'], $GLOBALS['pass']);
        mysqli_set_charset($GLOBALS['link'], "utf8");
        if (!$GLOBALS['link']) {
            $GLOBALS['debugger']->out("Error al conectar a la base de datos: " . mysqli_connect_error() . ".");  
        }else {
            $GLOBALS['debugger']->out("Conexion a base de datos exitosa.");
        }
    }

    function closedb(){
        if($GLOBALS['link'] !== false){
            mysqli_close($GLOBALS['link']);
            $link = false;
        }
    }

    opendb();

?>
