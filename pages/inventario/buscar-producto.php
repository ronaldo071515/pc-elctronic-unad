<?php require("../../includes/utilities/debugging.php");?>
<?php require("../../connect/connect.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../assets/css/normalize.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link rel="stylesheet" href="../../assets/css/styles.css">
	<title>Sitios Web | UNAD</title>
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
				  <li><a class="dropdown-item" href="buscar-producto.php">Buscar Producto</a></li>
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
		<div class="row">
			<div class="col-3">
				<div class="card">
					<h5 class="card-title mt-3 text-center">Buscar Producto</h5>
					<hr>
					<div class="card-body">
						<form>
							<div class="mb-3">
								<label for="codio-producto" class="form-label">Código Producto</label>
								<input type="number" class="form-control" name="codigo" min="0" id="codigo">
							</div>
							<div class="d-grid gap-2">
								<button class="btn btn-outline-success">Buscar Producto</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-9">
				<div class="card">
					<table class="table table-responsive">
						<thead>
							<tr>
								<th scope="col">Código</th>
								<th scope="col">Nombre</th>
								<th scope="col">Marca</th>
								<th scope="col">Precio Compra</th>
								<th scope="col">Cantidad Comprada</th>
								<th scope="col">Opciones</th>
							</tr>
						</thead>
						<tbody>
						<?php
							error_reporting(0);
							opendb();
							$codigo = $_GET['codigo'];
							$query = "SELECT * FROM bdunad16.tabla16 WHERE codigo=$codigo";
							$result = mysqli_query($link, $query);
							while ($row = mysqli_fetch_array($result)) { ?>
							<tr>
								<th><?php echo $row['codigo'] ?></th>
								<td><?php echo $row['nombre'] ?></td>
								<td><?php echo $row['marca'] ?></td>
								<td><?php echo $row['precio'] ?></td>
								<td><?php echo $row['cantidad'] ?></td>
								<td>
									<a class="btn btn-outline-primary"
									   href="actualizar-producto.php?id=<?php echo $row['codigo']?>">
										<i class="far fa-edit"></i>
									</a>
									<a class="btn btn-outline-danger"
									   href="../../controllers/delete_product.php?codigo=<?php echo $row['codigo']?>">
										<i class="far fa-trash-alt"></i>
									</a>
								</td>
							</tr>
							<?php }
							closedb();
      						?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<script src="https://kit.fontawesome.com/2ace532a0a.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>