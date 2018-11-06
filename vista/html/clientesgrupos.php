<?php require_once 'header.php'; ?>

			<!-- Contenedor Trabajo -->
		 	<div id="zonaTrabajo" class="row">
		 		<div id="gruposMenu" class="col-xs-12 col-sm-12 col-md-4  col-lg-4 " >
		 			<div id="gruposMenuNorte" class="d-flex align-items-center justify-content-center">
		 				<a class="btn btn-block btn-outline-primary" href="grupos.php">Crear grupo de clientes</a>
		 			</div>
		 			<div id="gruposMenuCentro" class="col-xs-12 table-responsive">
		 				<table class="table table-sm table-hover">
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

		 		<div id="gruposTrabajo" class="col-xs-12 col-sm-12 col-md-8 table-responsive">
		 			<h4 id="tituloTrabajo" class="">Lista de clientes del grupo @NombreGrupoAqui</h4>
		 			<table class="table table-sm">
						  <thead>
						    <tr>						  
						      <th scope="col">Nombre</th>
						      <th scope="col">Celular</th>
						      <th scope="col">Correo</th>
						      <th scope="col">Editar</th>
						      <th scope="col">Eliminar</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>						      
						      <td>Juan Diaz</td>
						      <td>3151234567</td>
						      <td>jdiaz@mail.com</td>
						      <td><a class="btn btn-outline-warning" href="editarcliente.php">Editar</a></td>
						      <td><button class="btn btn btn-outline-danger">Eliminar</button></td>
						    </tr>						    						    
						  </tbody>
						</table>
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