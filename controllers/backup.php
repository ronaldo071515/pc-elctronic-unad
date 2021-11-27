<?php
date_default_timezone_set("America/Bogota");
require_once("../includes/utilities/debugging.php");
require_once("../connect/connect.php");

opendb();

$namedb = 'bdunad16';

//Funciona con XAMPP
$mysqldump = getcwd().'/../../../mysql/bin/mysqldump';

$backup_file = '"../backups/"'.$namedb. "-" .date("Y-m-d-H-i-s"). ".sql";
system("$mysqldump --no-defaults -u$user -p$pass $namedb > $backup_file", $output);

switch($output){
case 0:
        echo 'La base de datos <b>' .$dbname .'</b> se ha almacenado correctamente en la siguiente ruta '.getcwd().'/' .$backup_file .'</b>';
break;
case 1: 
        echo 'Se ha producido un error al exportar <b>' .$dbname .'</b> a '.getcwd().'/ verifique la siguiente ruta: ' .$backup_file .'</b>';
break;
case 2: 
        echo 'Se ha producido un error de exportación, compruebe la siguiente información: <br/><br/><table><tr><td>Nombre de la base de datos:</td><td><b>' .$namedb .'</b></td></tr><tr><td>Nombre de usuario MySQL:</td><td><b>' .$user .'</b></td></tr><tr><td>Contraseña MySQL:</td><td><b> '.$pass.' </b></td></tr><tr><td>Nombre de host MySQL:</td><td><b>' .$host .'</b></td></tr></table>';
break;
}
closedb();
?>
