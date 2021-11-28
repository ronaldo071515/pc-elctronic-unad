<?php

    require_once("../includes/utilities/debugging.php");
    require_once("../connect/connect.php");

    if ($_GET['codigo']) {
        $codigo = $_GET['codigo'];
        
        $preparedquery = "DELETE FROM bdunad16.tabla16 WHERE codigo=?";
		$preparedstatement = mysqli_stmt_init($link);

        if(mysqli_stmt_prepare($preparedstatement, $preparedquery)){
			mysqli_stmt_bind_param($preparedstatement, "d", $codigo);
		}
        echo "<html><head>";
        if ($link !== false && mysqli_stmt_execute($preparedstatement)) {
            $flag_table_created = true;
            echo utf8_decode("<script>alert('Se eliminó el producto ' + $codigo )</script>");
            $debugger->out("Se eliminó el producto satisfactoriamente.");
        } else {   
            $flag_table_created = false;
            echo utf8_decode("<script>alert('No se pudo eliminar el producto ' + $codigo )</script>");
            $debugger->out("No se pudo eliminar el producto. " . mysqli_error($link).".");
        }
        closedb();
        echo "<script>document.location = '../pages/inventario/crear-producto.php'</script>";
        echo "</head><body></body></html>";
    }

?>