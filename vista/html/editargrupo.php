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
						      <td><a class="btn btn-outline-warning" href="editargrupo.php">Editar</a></td>
						      <td><button class="btn btn btn-outline-danger">Eliminar</button></td>
						    </tr>						
						  </tbody>
						</table>
		 			</div>
		 		</div>

		 		<div id="gruposTrabajo" class="col-xs-12 col-sm-12 col-md-8  col-lg-8 d-flex  justify-content-center">
		 			<div class="col-12">
		 				<h4 id="tituloTrabajo" class="">Edición de datos del grupo</h4>
		 				<form >
						  <div class="form-group">
						    <label for="exampleInputEmail1">Nombre Grupo</label>
						    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese aquí el nombre del grupo" value="@Agregar aquí nombre del grupo">						    
						  </div>
						  <div class="form-group">
						    <label for="descripcion">Descripcion</label>
						    <textarea class="form-control" id="descripcion" rows="3" placeholder="@Ingrese las descripcion del grupo a editar">@Ingrese las descripción del grupo a editar</textarea>
						  </div>
						  
						  <button type="submit" class="btn btn-outline-primary btn-block">Editar</button>
						</form>
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