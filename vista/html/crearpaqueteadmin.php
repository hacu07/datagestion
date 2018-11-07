
<?php require_once 'headeradmin.php' ?>
			<!-- Contenedor Trabajo -->
		 	<div id="zonaTrabajo">
		 		<form class="col-xs-12 col-sm-12 offset-md-2 col-md-8 offset-g-2 col-lg-8">
					<div class="form-group row">
					    <label for="clientesReporte" class="col-sm-2 col-form-label"><strong>Valor:</strong></label>
					    <div class="col-sm-10">
					      <input type="number"  class="form-control-plaintext" id="clientesReporte" placeholder="Ingrese aquí el valor del paquete" required>
					    </div>
					</div>
					<div class="form-group row">
					    <label for="clientesReporte" class="col-sm-2 col-form-label"><strong>SMS:</strong></label>
					    <div class="col-sm-10">
					      <input type="number" class="form-control-plaintext" id="clientesReporte" placeholder="Ingrese aquí la cantidad de SMS a enviar" required>
					    </div>
					</div>
					<div class="form-group row">
					    <label for="clientesReporte" class="col-sm-2 col-form-label"><strong>Correos Electrónicos:</strong></label>
					    <div class="col-sm-10">
					      <input type="number" class="form-control-plaintext" id="clientesReporte" placeholder="Ingrese aquí la cantidad de correos Electrónicos a enviar" required>
					    </div>
					</div>
					<div class="form-group row">
					    <label for="clientesReporte" class="col-sm-2 col-form-label"><strong>Llamadas:</strong></label>
					    <div class="col-sm-10">
					      <input type="number" class="form-control-plaintext" id="clientesReporte" placeholder="Ingrese aquí la cantidad de llamadas a enviar" required>
					    </div>
					</div>
					<div class="form-group row">
					    <label for="clientesReporte" class="col-sm-2 col-form-label"><strong>Descipción:</strong></label>
					    <div class="col-sm-10">
					      <textarea  class="form-control-plaintext" id="descripcion" rows="5" placeholder="Ingrese aquí la descripción del paquete" required></textarea>
						    </div>
					</div>
					<input type="submit" name="" class="btn btn-block btn-success" value="Crear">
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