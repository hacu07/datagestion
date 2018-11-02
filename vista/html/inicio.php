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
				  	<a class="navbar-brand" href="inicio.php">Datagestión</a>
				  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				    	<span class="navbar-toggler-icon"></span>
				  	</button>
				  	<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
					    <ul class="navbar-nav">
					      	<li class="nav-item dropdown">
					       		<a class="nav-link dropdown-toggle navbar-brand" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					          		Clientes
					        	</a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						          <a class="dropdown-item" href="grupos.php">Grupos</a>
						          <a class="dropdown-item" href="#">Importar Excel</a>						      
						        </div>
					      	</li>
					      	<li class="nav-item dropdown">
					       		<a class="nav-link dropdown-toggle navbar-brand" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					          		Notificaciones
					        	</a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						          <a class="dropdown-item" href="#">Crear notificación</a>
						          <a class="dropdown-item" href="#">Listar notificaciones</a>	
						          <a class="dropdown-item" href="#">Probar Notificaciones</a>							      
						        </div>
					      	</li>
					      	<li class="nav-item">
					        	<a class="nav-link navbar-brand " href="#">Reportes</a>
					      	</li>
					      	<li class="nav-item">
					        	<a class="nav-link navbar-brand" href="#">Paquetes</a>
					      	</li>
					      	<li class="nav-item dropdown">
					       		<a class="nav-link dropdown-toggle navbar-brand" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					          		@NombreUsuario
					        	</a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						          <a class="dropdown-item" href="#">Cuenta</a>
						          <a class="dropdown-item" href="#">Cerrar Sesión</a>						       
						        </div>
					      	</li>
				    	</ul>
				  	</div>
				</nav>

		 	</div>

			<!-- Contenedor Trabajo -->
		 	<div id="zonaTrabajo">
		 		
		 	</div>

		 	<!-- Contenedor Footer -->
		 	<div id="zonaFooter" >
		 		<p class="navbar-brand">El proceso de carga de archivo puede tarda unos minutos.</p>
		 	</div>
		</div>		
		<script src="../js/jquery-3.3.1.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/datagestion.js"></script>		
	</body>
</html>	