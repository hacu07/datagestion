
<?php require_once 'header.php' ?>
			<!-- Contenedor Trabajo -->
		 	<div id="zonaTrabajo">
		 		<h4 id="tituloTrabajo" class="">Detalle de notificación</h4>
		 		<form id="frmCreaNotificacion">
		 			<div class="form-group">
					    <label for="codigo">Codigo de notificación</label>
					    <input type="text" class="form-control" id="codigo" value="@aqui el codigo" disabled>
					 </div>

		 			<div class="form-group">
					    <label for="medio">Medio</label>
					    <input type="text" class="form-control" id="medio" value="@aqui el medio" disabled>
					 </div>

				    <div class="form-group">
				        <label for="combroGrupoEnvio">Grupo destino</label>
				        <input type="text" class="form-control" id="medio" value="@aqui el grupo" disabled>
				    </div>

					<div class="form-group">
					    <label for="fecha">Fecha</label>
					    <input type="text" class="form-control" id="fecha" value="@aqui la fecha de creacion" disabled>						    
					</div>

					<div class="form-group">
					    <label for="asunto">Asunto</label>
					    <input type="text" class="form-control" id="fecha" value="@aqui el asunto" disabled>						    
					</div>

					<div class="form-group">
					   <label for="descripcion">Mensaje</label>
					   <textarea class="form-control" id="descripcion" rows="10" value="@aqui el mensaje" disabled></textarea>
					</div>
					<a href="listarnotificaciones.php" class="btn btn-outline-primary btn-block">Aceptar</a>
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