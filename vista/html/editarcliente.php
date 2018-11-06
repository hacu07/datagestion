<?php require_once 'header.php'; ?>

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