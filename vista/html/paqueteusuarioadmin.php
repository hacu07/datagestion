<?php require_once 'headeradmin.php'; ?>

			<!-- Contenedor Trabajo -->
		 	<div id="zonaTrabajo" class="row">
		 		<div id="gruposMenu" class="col-xs-12 col-sm-12 col-md-4  col-lg-4 " >
		 			<div id="asignarMenuNorte" class="">
		 				<form>
		 					<div class="form-group">
						    <label for="exampleInputEmail1">Empresa a asignar paquete:</label>
						    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese aquí la dirección de correo electrónico de la empresa" required>						
						    <input type="submit" name="" class="btn btn-success btn-block" value="Buscar">
						  </div>
		 				</form>
		 			</div>
		 			<div id="asignarMenuCentro" class="col-xs-12 table-responsive">
		 				<table class="table table-sm table-hover">
						  <thead>
						    <tr>						  
						      <th scope="col">Nombre</th>
						      <th scope="col">Celular</th>
						      <th scope="col">Asignar</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>						      
						      <td>@Nombre empresa a asignar</td>
						      <td>@Numero de celular</td>
						      <td><a class="btn btn-outline-primary" href="">Ver</a></td>
						    </tr>						
						  </tbody>
						</table>
		 			</div>
		 		</div>

		 		<div id="gruposTrabajo" class="col-xs-12 col-sm-12 col-md-8  col-lg-8 d-flex  justify-content-center">
		 			<div class="col-12">
		 				<h4 id="tituloTrabajo" class="">Asignar paquete</h4>
		 				<form>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Nombre Empresa</label>
						    <input type="text" readonly class="form-control" id="exampleInputEmail1" placeholder="Ingrese aquí el nombre de la empresa" required>						    
						  </div>
						  <div class="form-group">
					        <label for="combroGrupoEnvio">Seleccione código del paquete</label>
					        <select class="form-control" id="combroGrupoEnvio">
					           <option> 1</option>
					           <option> 2</option>
					           <option> 3</option>
					           <option> 4</option>
					           <option> 5</option>				     
					        </select>
					      </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Valor</label>
						    <input type="text" readonly class="form-control" id="exampleInputEmail1" placeholder="Ingrese aquí el VALOR del paquete" required>						    
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Cantidad SMS</label>
						    <input type="text" readonly class="form-control" id="exampleInputEmail1" placeholder="Ingrese aquí la cantidad de SMS" required>						    
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Cantidad Correos</label>
						    <input type="text" readonly class="form-control" id="exampleInputEmail1" placeholder="Ingrese aquí la cantidad de correos" required>						    
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Cantidad Llamadas</label>
						    <input type="text" readonly class="form-control" id="exampleInputEmail1" placeholder="Ingrese aquí la cantidad de Llamadas" required>						    
						  </div>
						  <button type="submit" class="btn btn-success btn-block">Asignar Paquete</button>
						</form>
						<button id="btnCancelar" type="submit" class="btn btn-danger btn-block">Cancelar Asignación</button>
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