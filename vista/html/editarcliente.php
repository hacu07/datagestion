<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

		<title>Datagestion</title>
		<!--<link rel="icon" href="favicon-32x32.png" type = "image" sizes="32x32">-->
		<link rel="stylesheet" href="../css/bootstrap.css">
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
		 	<div id="zonaTrabajo" class="row">
		 		<div id="gruposMenu" class="col-xs-12 col-sm-12 col-md-4  col-lg-4 " >
		 			<div id="gruposMenuNorte" class="d-flex align-items-center justify-content-center">
		 				<a class="btn btn-block btn-outline-primary" href="grupos.php">Crear grupo de clientes</a>
		 			</div>
		 			<div id="gruposMenuCentro" class="col-xs-12 table-responsive">
		 				<table class="table table-sm">
						  <thead>
						    <tr>						  
						      <th scope="col">Nombre</th>
						      <th scope="col">Ver</th>
						      <th scope="col">Editar</th>
						      <th scope="col">Eliminar</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>						      
						      <td>Ibague</td>
						      <td><a class="btn btn-outline-primary" href="clientesgrupos.php">Ver</a></td>
						      <td><button class="btn btn-outline-warning">Editar</button></td>
						      <td><button class="btn btn btn-outline-danger">Eliminar</button></td>
						    </tr>						    
						  </tbody>
						</table>
		 			</div>
		 		</div>

		 		<div id="gruposTrabajo" class="col-xs-12 col-sm-12 col-md-8  col-lg-8 d-flex align-items-center justify-content-center">
		 			<div class="col-12">
		 				<h4 id="tituloTrabajo" class="">Edición de datos del cliente</h4>
		 				<form >
						  <div class="form-group">
						    <label for="nombreCliente">Nombre Cliente</label>
						    <input type="text" class="form-control" id="nombreCliente" placeholder="Ingrese aquí el nombre del grupo" value="@Nombre de cliente aquí">						    
						  </div>
						  <div class="form-group">
						    <label for="celularCliente">Numero de celular</label>
						    <input type="number" class="form-control" id="celularCliente" placeholder="Ingrese aquí la descripción" value="11111111">
						  </div>

						  <div class="form-group">
						    <label for="correoCliente">Direccion de correo electrónico</label>
						    <input type="email" class="form-control" id="correoCliente" placeholder="Ingrese aquí la descripción" value="@Correo Cliente aquí">
						  </div>
						  
						  <button type="submit" class="btn btn-outline-primary btn-block">Actualizar</button>
						</form>
						<a href="clientesgrupos.php" class="btn btn-outline-secondary btn-block">Cancelar</a>
		 			</div>	
		 		</div>
		 	</div>

		 	<!-- Contenedor Footer -->
		 	<div id="zonaFooter" >
		 		<p id="msjAviso" class="navbar-brand">Ubicacion: Grupos</p>
		 	</div>
		</div>		
		<script src="../js/jquery-3.3.1.min.js"></script>
		<script src="../js/bootstrap.js"></script>
		<script src="../js/datagestion.js"></script>		
	</body>
</html>	