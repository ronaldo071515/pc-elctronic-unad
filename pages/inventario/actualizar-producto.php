<?php require("../../includes/utilities/debugging.php");?>
<?php require("../../connect/connect.php");?>
<?php
	error_reporting(0);
	opendb();
	if (isset($_GET['codigo'])) {
		$codigo = $_GET['codigo'];
		$query = "SELECT * FROM bdunad16.tabla16 WHERE codigo=$codigo";
		$result = mysqli_query($link, $query);
		if ( mysqli_num_rows($result) == 1 ) {
			$row = mysqli_fetch_array($result);
			$codigo = $row['codigo'];
			$nombre = $row['nombre'];
			$marca = $row['marca'];
			$precio = $row['precio'];
			$cantidad = $row['cantidad'];
		}
	}
	if (isset($_POST['btnUpdate'])) {
		$n = $_POST['nombre'];
		$m = $_POST['marca'];
		$p = $_POST['precio'];
		$c = $_POST['cantidad'];

		$query = "UPDATE bdunad16.tabla16 SET nombre='$n', marca='$m', precio=$p, cantidad=$c WHERE codigo=$codigo";
		$result = mysqli_query($link, $query);
		if (!$result) {
			die ("
				<script>
					alert('Ocurrio un error en la actualización del producto');
				</script>
			");
		} else {
			die ("
				<script>
					alert('Producto actualizado satisfactoriamente');
					window.location.href = '../inventario/crear-producto.php';
				</script>
			");
		}
		
	}
	closedb();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../assets/css/normalize.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link rel="stylesheet" href="../../assets/css/styles.css">
	<title>Sitios Web | UNAD | Inventario</title>
	<link rel="shortcut icon" href="../../assets/img/favicon.ico"> 
</head>
<body class="fondo">

<nav class="navbar navbar-dark bg-dark justify-content-end">
    <div class="container-fluid">
        <a class="navbar-brand" href="../../index.php">PC'S ELECTRONICS</a>
        <ul class="nav">
			<li class="nav-item dropdown">
				<a class="nav-link text-white dropdown-toggle" id="navbarDropdownMenuLink" data-bs-toggle="dropdown">
				  Utilidades
				</a>
				<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				  <li><a class="dropdown-item" href="../../calculadora.php">Calculadora</a></li>
				  <li><a class="dropdown-item" href="../../conversor.php">Conversor</a></li>
				</ul>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link text-white dropdown-toggle" id="navbarDropdownMenuLink" data-bs-toggle="dropdown">
				  Inventario
				</a>
				<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				  <li><a class="dropdown-item" href="crear-producto.php">Crear Producto</a></li>
				  <li><a class="dropdown-item" href="buscar-producto.php">Consultar Producto</a></li>
				</ul>
			</li>
		    <li class="nav-item dropdown">
		      <a class="nav-link text-white dropdown-toggle" id="navbarDropdownMenuLink" data-bs-toggle="dropdown">Administrador</a>
			  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				  <li><a class="dropdown-item" href="../../controllers/create_db.php">Crear BD</a></li>
				  <li><a class="dropdown-item">Crear Tabla</a></li>
				  <li><a class="dropdown-item">Generar Reporte PDF</a></li>
				  <li><a class="dropdown-item">Generar Backup</a></li>
			  </ul>
		    </li>
	    </ul>
    </div>
</nav>

<div class="container mt-5">
	<div class="card bg-light shadow-lg">
		<div class="card-body">
			<h5 class="card-title mb-2 text-center">Actualizar Producto</h5>
			<hr>
			<form action="actualizar-producto.php?codigo=<?php echo $_GET['codigo']?>" method="POST">
				<div class="row">
					<div class="col-6">
						<div class="mb-3">
							<label for="codigo" class="form-label">Código Producto</label>
							<input type="number" class="form-control" name="codigo" id="codigo" value="<?php echo $codigo; ?>" aria-required="true" disabled>
						</div>
					</div>
					<div class="col-6">
						<div class="mb-3">
							<label for="nombre" class="form-label">Nombre Producto</label>
							<input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $nombre; ?>" aria-required="true">
						</div>
					</div>
					<div class="col-4">
						<div class="mb-3">
							<label for="marca" class="form-label">Marca del Producto</label>
							<input type="text" class="form-control" name="marca" id="marca" value="<?php echo $marca; ?>">
						</div>
					</div>
					<div class="col-4">
						<div class="mb-3">
							<label for="precio" class="form-label">Precio de Compra</label>
							<input type="number" class="form-control" name="precio" id="precio" value="<?php echo $precio; ?>">
						</div>
					</div>
					<div class="col-4">
						<div class="mb-3">
							<label for="cantidad" class="form-label">Cantidad Comprada</label>
							<input type="number" class="form-control" name="cantidad" id="cantidad" value="<?php echo $cantidad; ?>">
						</div>
					</div>
				</div>
				<div class="d-grid gap-2">
					<input class="btn btn-outline-primary btn-block" type="submit" value="Modificar Producto" name="btnUpdate">
				</div>
			</form>
		</div>
	</div>
</div>

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>