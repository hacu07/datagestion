
<?php require_once 'headeradmin.php' ?>
			<!-- Contenedor Trabajo -->
		 	<div id="zonaTrabajo">
		 		<form class="col-xs-12 col-sm-12 offset-md-2 col-md-8 offset-g-2 col-lg-8">
		 			<div class="form-group row">
					    <label for="clientesReporte" class="col-sm-2 col-form-label"><strong>Paquete:</strong></label>
					    <div class="col-sm-10">
					      <input type="text" readonly class="form-control-plaintext" id="clientesReporte" value="@aqui va el CODIGO del paquete seleccionado">
					    </div>
					</div>
					<div class="form-group row">
					    <label for="clientesReporte" class="col-sm-2 col-form-label"><strong>Valor:</strong></label>
					    <div class="col-sm-10">
					      <input type="text" readonly class="form-control-plaintext" id="clientesReporte" value="@aqui va el VALOR del paquete seleccionado">
					    </div>
					</div>
					<div class="form-group row">
					    <label for="clientesReporte" class="col-sm-2 col-form-label"><strong>SMS:</strong></label>
					    <div class="col-sm-10">
					      <input type="text" readonly class="form-control-plaintext" id="clientesReporte" value="@aqui va el NUMERO DE SMS A ENVIAR del paquete seleccionado">
					    </div>
					</div>
					<div class="form-group row">
					    <label for="clientesReporte" class="col-sm-2 col-form-label"><strong>Correos Electrónicos:</strong></label>
					    <div class="col-sm-10">
					      <input type="text" readonly class="form-control-plaintext" id="clientesReporte" value="@aqui va el NUMERO DE CORREOS A ENVIAR del paquete seleccionado">
					    </div>
					</div>
					<div class="form-group row">
					    <label for="clientesReporte" class="col-sm-2 col-form-label"><strong>Llamadas:</strong></label>
					    <div class="col-sm-10">
					      <input type="text" readonly class="form-control-plaintext" id="clientesReporte" value="@aqui va el NUMERO DE LLAMADAS A ENVIAR del paquete seleccionado">
					    </div>
					</div>
					<div class="form-group row">
					    <label for="clientesReporte" class="col-sm-2 col-form-label"><strong>Descipción:</strong></label>
					    <div class="col-sm-10">
					      <textarea readonly class="form-control-plaintext" id="descripcion" rows="5" placeholder="Ingrese aquí la descripcion del paquete">Ingrese aquí la descripcion del paquete</textarea>
						    </div>
					</div>
					<input type="submit" name="" class="btn btn-block btn-danger" value="Desactivar">
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