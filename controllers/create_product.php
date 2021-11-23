<?php 

    require_once("../includes/utilities/debugging.php");
    require_once("../connect/connect.php");

    $codigo   = $_POST['codigo'];
    $nombre   = $_POST['nombre'];
    $marca    = $_POST['marca'];
    $precio_compra   = $_POST['precio_compra'];
    $cantidad = $_POST['cantidad'];

    if( empty($codigo) || empty($nombre) || empty($marca) || empty($precio_compra) || empty($cantidad)) {
        echo "
            <script>
                alert('Llena los campos por favor!');
            </script>
        ";
    } else {
        opendb();
		$preparedquery = "INSERT INTO bdunad16.tabla16 (codigo, nombre, marca, precio, cantidad) VALUES (?, ?, ?, ?, ?)";
		$preparedstatement = mysqli_stmt_init($link);
        
		if(mysqli_stmt_prepare($preparedstatement, $preparedquery)){
			mysqli_stmt_bind_param($preparedstatement, "sssdd", $codigo, $nombre, $marca, $precio_compra, $cantidad);
		}		

        if ($link !== false && mysqli_stmt_execute($preparedstatement)) {
            $flag_table_created = true;
            $debugger->out("Producto agregado exitosamente.");
        } else {   
            $flag_table_created = false;
            $debugger->out("No se pudo insertar el producto " . mysqli_error($link).".");
        }
        closedb();
        header("Location:../pages/inventario/crear-producto.php");

    }
?>