<?php require_once 'header.php'; ?>

			<!-- Contenedor Trabajo -->
		 	<div id="zonaTrabajo" class="row">
		 		<div id="gruposMenu" class="col-xs-12 col-sm-12 col-md-4  col-lg-4 " >
		 			<div id="MenuReportes" class="col-xs-12 table-responsive">
		 				<table class="table table-sm table-hover">
						  <thead>
						    <tr>						  
						      <th scope="col">Codigo</th>
						      <th scope="col">Asunto</th>
						      <th scope="col">Ver</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>						      
						      <td>1000</td>
						      <td>@Asunto aquí</td>
						      <td><a class="btn btn-outline-primary" href="">Ver</a></td>					      
						    </tr>						    					
						  </tbody>
						</table>
		 			</div>
		 		</div>

		 		<div id="gruposTrabajo" class="col-xs-12 col-sm-12 col-md-8  col-lg-8 d-flex  justify-content-center">
		 			<div class="col-12">
		 				<h4 id="tituloTrabajo" class="">Reporte de notificación</h4>
		 				<form id="frmReporte">
						  <div class="form-group">
						    <select class="form-control" id="comboNotificacion">
						    	<option>Seleccionar Intento</option>
						      	<option>1</option>
						      	<option>2</option>
						      	<option>3</option>					     
						    </select>
						 </div>
						 <div class="form-group row">
						    <label for="clientesReporte" class="col-sm-2 col-form-label"><strong>Total Clientes:</strong></label>
						    <div class="col-sm-10">
						      <input type="text" readonly class="form-control-plaintext" id="clientesReporte" value="@aqui va el total de clientes">
						    </div>
						  </div>
						  <div class="form-group row">
						    <label for="exitososReporte" class="col-sm-2 col-form-label"><strong>Enviados:</strong></label>
						    <div class="col-sm-10">
						      <input type="text" readonly class="form-control-plaintext" id="exitososReporte" value="@aqui va el total de mensajes enviados">
						    </div>
						  </div>
						  <div class="form-group row">
						    <label for="fallosReporte" class="col-sm-2 col-form-label"><strong>No Enviados:</strong></label>
						    <div class="col-sm-10">
						      <input type="text" readonly class="form-control-plaintext" id="fallosReporte" value="@aqui va el total de mensajes enviados">
						    </div>
						  </div>
						  <div class="form-group row">
						    <label for="medioreporte" class="col-sm-2 col-form-label"><strong>Medio:</strong></label>
						    <div class="col-sm-10">
						      <input type="text" readonly class="form-control-plaintext" id="medioreporte" value="SMS">
						    </div>
						  </div>
						  <div class="form-group row">
						    <label for="grupoReporte" class="col-sm-2 col-form-label"><strong>Grupo:</strong></label>
						    <div class="col-sm-10">
						      <input type="text" readonly class="form-control-plaintext" id="grupoReporte" value="@aqui va el grupo destino">
						    </div>
						  </div>
						  <div class="form-group row">
						    <label for="asuntoReporte" class="col-sm-2 col-form-label"><strong>Asunto:</strong></label>
						    <div class="col-sm-10">
						      <input type="text" readonly class="form-control-plaintext" id="asuntoReporte" value="@aqui va el asunto">
						    </div>
						  </div>
						  <div class="form-group row">
						    <label for="mensajeReporte" class="col-sm-2 col-form-label"><strong>Mensaje:</strong></label>
						    <div class="col-sm-10">
						      <textarea readonly class="form-control-plaintext" id="descripcion" rows="5" placeholder="Ingrese aquí el mensaje a enviar"></textarea>
						    </div>
						  </div>
						  <button type="submit" class="btn btn-success btn-block" >Realizar Nuevo Intento</button>
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