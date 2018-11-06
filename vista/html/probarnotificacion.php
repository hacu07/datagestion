
<?php require_once 'header.php' ?>
			<!-- Contenedor Trabajo -->
		 	<div id="zonaTrabajo">
		 		<h4 id="tituloTrabajo" class="">Probar notificación</h4>
		 		<form id="frmCreaNotificacion">
		 			<div class="form-group">
					    <label for="comboNotificacion">Seleccione la notificación a probar</label>
					    <select class="form-control" id="comboNotificacion">
					      <option>1000</option>
					      <option>2000</option>
					      <option>3000</option>					     
					    </select>
					 </div>

				    <div class="form-group">
					    <label for="comboMedios">Seleccione el medio a enviar</label>
					    <select class="form-control" id="comboMedios">
					      <option>SMS</option>
					      <option>Correo Electrónico</option>
					      <option>Llamada</option>					     
					    </select>
					 </div>

					 <div class="form-group">
					    <label for="asuntoNotificacion">Destino</label>
					    <input type="text" class="form-control" id="asuntoNotificacion" placeholder="Ingrese el número de celular o dirección de correo electrónico" required>					    
					</div>

					<div class="form-group">
					    <label for="asuntoNotificacion">Asunto</label>
					    <input type="text" class="form-control" id="asuntoNotificacion" placeholder="Ingrese aquí el asunto de la notificación" value="@aquí va el asunto registrado">					    
					</div>

					<div class="form-group">
					   <label for="descripcion">Mensaje</label>
					   <textarea class="form-control" id="descripcion" rows="3" placeholder="Ingrese aquí el mensaje a enviar">@aquí va el mensaje a enviar</textarea>
					</div>
					<button type="submit" class="btn btn-success btn-block">Probar Notificación</button>
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