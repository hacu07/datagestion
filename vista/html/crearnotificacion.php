
<?php require_once 'header.php' ?>
			<!-- Contenedor Trabajo -->
		 	<div id="zonaTrabajo">
		 		<h4 id="tituloTrabajo" class="">Nueva notificación</h4>
		 		<form id="frmCreaNotificacion">
		 			<div class="form-group">
					    <label for="comboMedios">Seleccione el medio a enviar</label>
					    <select class="form-control" id="comboMedios">
					      <option>SMS</option>
					      <option>Correo Electrónico</option>
					      <option>Llamada</option>					     
					    </select>
					 </div>

				    <div class="form-group">
				        <label for="combroGrupoEnvio">Seleccione el grupo de clientes destino</label>
				        <select class="form-control" id="combroGrupoEnvio">
				           <option>Grupo 1</option>
				           <option>Grupo 2</option>
				           <option>Grupo 3</option>
				           <option>Grupo 4</option>
				           <option>Grupo 5</option>				     
				        </select>
				    </div>

					<div class="form-group">
					    <label for="asuntoNotificacion">Asunto</label>
					    <input type="text" class="form-control" id="asuntoNotificacion" placeholder="Ingrese aquí el asunto de la notificación" required>						    
					</div>

					<div class="form-group">
					   <label for="descripcion">Mensaje</label>
					   <textarea class="form-control" id="descripcion" rows="3" placeholder="Ingrese aquí el mensaje a enviar" required></textarea>
					</div>
					<button type="submit" class="btn btn-outline-primary btn-block">Crear Notificación</button>
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