
<?php require_once 'header.php' ?>
			<!-- Contenedor Trabajo -->
		 	<div id="zonaTrabajo">
		 		<h4 id="tituloTrabajo" class="col-xs-12 offset-sm-2 col-sm-8 offset-md-2 col-md-8 offset-lg-2 col-lg-8">Información Personal</h4>
		 		<form class="col-xs-12 offset-sm-2 col-sm-8 offset-md-2 col-md-8 offset-lg-2 col-lg-8">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Nombre</label>
				    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese aquí el nombre del grupo" value="@Agregar aquí nombre del usuario" required> 
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Número de celular</label>
				    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese aquí el nombre del grupo" value="@Agregar aquí numero de celular" required> 
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Dirección de residencia</label>
				    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese aquí el nombre del grupo" value="@Agregar aquí la direccion de residencia" required> 
				  </div>
				  
				  <button type="submit" class="btn btn-outline-success btn-block">Actualizar</button>
				</form>
				<hr>
				<h4 id="tituloTrabajo" class="col-xs-12 offset-sm-2 col-sm-8 offset-md-2 col-md-8 offset-lg-2 col-lg-8">Cambiar Contraseña</h4>
		 		<form class="col-xs-12 offset-sm-2 col-sm-8 offset-md-2 col-md-8 offset-lg-2 col-lg-8">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Contraseña Actual</label>
				    <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Ingrese aquí su contraseña actual" required> 
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Nueva Contraseña</label>
				    <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Ingrese aquí su nueva contraseña" required> 
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Confirme la nueva contraseña</label>
				    <input type="password " class="form-control" id="exampleInputEmail1" placeholder="Ingrese aquí su nueva contraseña" required> 
				  </div>
				  
				  <button type="submit" class="btn btn-outline-success btn-block">Cambiar</button>
				</form>
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