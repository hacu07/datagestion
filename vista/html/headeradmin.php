<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

		<title>Datagestion</title>
		<!--<link rel="icon" href="favicon-32x32.png" type = "image" sizes="32x32">-->
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/datagestion.css">
	</head>
	<body>
		<div id="contenedor">
			<!-- Contenedor Header -->
		 	<div id="zonaHead">
		 		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
				  	<a class="navbar-brand" href="inicioadmin.php">Datagestión</a>
				  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				    	<span class="navbar-toggler-icon"></span>
				  	</button>
				  	<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
					    <ul class="navbar-nav">
					      	<li class="nav-item dropdown">
					       		<a class="nav-link dropdown-toggle navbar-brand" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					          		Notificaciones
					        	</a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						          <a class="dropdown-item" href="notificacionesadmin.php">Lista</a>
						        </div>
					      	</li>
					      	<li class="nav-item dropdown">
					       		<a class="nav-link dropdown-toggle navbar-brand" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					          		Paquetes
					        	</a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						        	<a class="dropdown-item" href="paquetesadmin.php">Ver</a>
						          	<a class="dropdown-item" href="crearpaqueteadmin.php">Crear</a>
						          	<a class="dropdown-item" href="asignarpaquetesadmin.php">Asignar a empresa</a>
						        </div>
					      	</li>
					      	<li class="nav-item">
					        	<a class="nav-link navbar-brand " href="#">Medios</a>
					      	</li>
					      	<li class="nav-item">
					        	<a class="nav-link navbar-brand" href="#">Reportes</a>
					      	</li>
					      	<li class="nav-item dropdown">
					       		<a class="nav-link dropdown-toggle navbar-brand" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					          		@NombreAdmin
					        	</a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						          <a class="dropdown-item" href="#">Cerrar Sesión</a>						       
						        </div>
					      	</li>
				    	</ul>
				  	</div>
				</nav>

		 	</div>