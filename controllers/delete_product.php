<?php

    require_once("../includes/utilities/debugging.php");
    require_once("../connect/connect.php");

    if ($_GET['codigo']) {
        $codigo = $_GET['codigo'];

        $query = "DELETE FROM bdunad16.tabla16 WHERE codigo=$codigo";
        $result = mysqli_query($link, $query);
        if (!$result) {
            die ("<script>
            alert('Ocurrio un error al eliminar');
            </script>");
        }else{
            die ("<script>
            alert('Producto Eliminado Satisfactoriamente');
            </script>");
        }
        closedb();
        header("Location:../pages/inventario/crear-producto.php");
    }

?>