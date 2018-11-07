
<?php require_once 'headeradmin.php' ?>
			<!-- Contenedor Trabajo -->
		 	<div id="zonaTrabajo">
		 		<h4 id="tituloTrabajo">Cambiar estado de envios de mensajes de notificación @@@@@</h4>
		 		<div id="buscarTelefono" class="col-xs-12 col-sm-12 offset-md-2 offset-lg-2 col-md-8 col-lg-8">
		 			<form>
		 				<input type="number" class="col-xs-12 col-sm-12 col-md-6 col-lg-6" name="" placeholder="Ingrese aquí el número de celular a buscar" required>
		 				<input type="submit" class="col-xs-12 col-sm-12 col-md-3 col-lg-2 btn btn-outline-primary" value="Buscar">
		 			</form>
		 			<button class="col-xs-12 col-sm-12 col-md-3 col-lg-2 btn btn-outline-secondary">Limpiar</button>
		 		</div>
		 		<div class="table-responsive-sm">
					<table class="table table-sm table-hover">
					   <thead>
					   		<tr>
					   			<th>Número de celular</th>
					   			<th>No Enviado</th>					   			
					   		</tr>
					   </thead>
					   <tbody>
					   		<tr>
					   			<td>####</td>
					   			
					   			<td><button class="btn btn-warning">Marcar</button></td>
					   		</tr>
					   </tbody>
					</table>
				</div>
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