<?php require_once 'header.php'; ?>

			<!-- Contenedor Trabajo -->
		 	<div id="zonaTrabajo">
		 		<div id="zonaTrabajo" class="row">
		 		<div id="gruposImportacion" class="col-xs-12 col-sm-12 col-md-4  col-lg-4 " >
		 			
	 				<form >
					  <div class="form-group">
					    <label for="comboGrupos">Seleccione el grupo a agregar los clientes</label>
					    <select class="form-control" id="comboGrupos">
					      <option>Grupo 1</option>
					      <option>Grupo 2</option>
					      <option>Grupo 3</option>
					      <option>Grupo 4</option>
					      <option>Grupo 5</option>
					    </select>
					  </div>
					  <div class="form-group">
					    <input type="file" class="form-control" id="exampleInputPassword1">
					  </div>
					  
					  <button type="submit" class="btn btn-outline-primary btn-block">Importar</button>
					</form>
		 					 			
		 		</div>

		 		<div id="gruposTrabajo" class="col-xs-12 col-sm-12 col-md-8 table-responsive">
		 			<h4 id="tituloTrabajo" class="">Clientes agregados al grupo @NombreGrupoAqui</h4>
		 			<table class="table table-sm table-hover">
						  <thead>
						    <tr>						  
						      <th scope="col">Nombre</th>
						      <th scope="col">Celular</th>
						      <th scope="col">Correo</th>						     
						    </tr>
						  </thead>
						  <tbody>
						    <tr>						      
						      <td>Juan Diaz</td>
						      <td>3151234567</td>
						      <td>jdiaz@mail.com</td>						      
						    </tr>						    						    
						  </tbody>
						</table>
		 		</div>
		 	</div>
		 	</div>

		 	<!-- Contenedor Footer -->
		 	<div id="zonaFooter" >
		 		<p class="navbar-brand">El proceso de carga del archivo puede tardar unos minutos. Por favor espere hasta que se cargue completamente los datos.</p>
		 	</div>
		</div>		
		<script src="../js/jquery-3.3.1.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/datagestion.js"></script>		
	</body>
</html>	