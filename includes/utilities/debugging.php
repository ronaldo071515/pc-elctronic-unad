<?php

//Apagar la salida del debugger
$DEBUG_MODE = FALSE;

/* Clase para debugging */
class Debugger{
    private $debug_messages; // = array();

    public function __construct(){
        $this->debug_messages = array();
    }
    public function out($message){
        $this->debug_messages[] = $message;
        if($GLOBALS['DEBUG_MODE']){
            echo "-- Debugger: \"".$message."\"\n";
        }
    }
    public function get_trace(){
        return $this->debug_messages;
    }
}

$debugger = new Debugger();

function printdebug($DEBUG_MODE){
    if($DEBUG_MODE){
        error_reporting(E_ALL);
        ini_set('display_errors', '1');
    }else {
        error_reporting(~E_ALL);
        ini_set('display_errors', '0');
    }
}

printdebug($DEBUG_MODE);


?>