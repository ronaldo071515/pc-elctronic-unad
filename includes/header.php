<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./assets/css/normalize.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link rel="stylesheet" href="./assets/css/styles.css">
	<title>Sitios Web | UNAD</title>
	<link rel="shortcut icon" href="assets/img/favicon.ico"> 
</head>
<body class="fondo">

	<nav class="navbar navbar-dark bg-dark justify-content-end">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">PC'S ELECTRONICS</a>
        <ul class="nav">
			<li class="nav-item dropdown">
				<a class="nav-link text-white dropdown-toggle" id="navbarDropdownMenuLink" data-bs-toggle="dropdown">
				  Utilidades
				</a>
				<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				  <li><a class="dropdown-item" href="calculadora.php">Calculadora</a></li>
				  <li><a class="dropdown-item" href="conversor.php">Conversor</a></li>
				</ul>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link text-white dropdown-toggle" id="navbarDropdownMenuLink" data-bs-toggle="dropdown">
				  Inventario
				</a>
				<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				  <li><a class="dropdown-item" href="pages/inventario/crear-producto.php">Crear Producto</a></li>
				  <li><a class="dropdown-item" href="pages/inventario/buscar-producto.php">Buscar Producto</a></li>
				</ul>
			</li>
		    <li class="nav-item dropdown">
		      <a class="nav-link text-white dropdown-toggle" id="navbarDropdownMenuLink" data-bs-toggle="dropdown">Administrador</a>
			  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" id="admin-menu">
				  <li><a class="dropdown-item" href="controllers/create_db.php">Crear BD</a></li>
				  <li><a class="dropdown-item" href="controllers/create_table.php" >Crear Tabla</a></li>
				  <li><a class="dropdown-item" href="controllers/report.php" target="_blank">Generar Reporte PDF</a></li>
				  <li><a class="dropdown-item" href="controllers/backup.php" target="_blank">Generar Backup</a></li>
			  </ul>
		    </li>
	    </ul>
    </div>
	</nav>