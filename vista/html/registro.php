<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

		<title>Datagestion</title>
		<!--<link rel="icon" href="favicon-32x32.png" type = "image" sizes="32x32">-->
		<link rel="stylesheet" href="vista/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="vista/css/datagestion.css">
	</head>
	<body>
		<div id="contenedor">
<!---->
		  <div class="div-center">
		    <div class="content">
		    	<div id="form_header">
		    		<h3>Registro</h3>
		    	</div>
		    	<div id="form_body">
		    		<form action="index.php?accion=registrar" method="post">
		    			<div class="form-group">
				          <label for="nombre">Nombre Completo</label>
				          <input name="nombre" type="text" class="form-control" id="nombre" placeholder="Nombres y apellidos" required>
				        </div>
				      	<div class="form-group">
				          <label for="usuario">Correo Electrónico</label>
				          <input name="correo" type="email" class="form-control" id="usuario" placeholder="Correo electrónico valido" required aria-describedby="correoEnvio">
							<small id="correoEnvio" class="form-text text-muted">
							  Envio de contraseña a esta dirección.
							</small>
				        </div>
				        <div class="form-group">
				          <label for="celular">Celular</label>
				          <input name="celular" type="number" class="form-control" id="celular" placeholder="Numero de celular" required>
				        </div>
				        <div class="form-group">
				          <label for="direccion">Dirección</label>
				          <input name="direccion" type="text" class="form-control" id="direccion" placeholder="Dirección de residencia" required>
				        </div>
				        <div class="form-check form-group">
						  <input class="form-check-input " type="checkbox" value="" id="chbTerCon" checked required>
						  <label class="form-check-label " for="defaultCheck1">
						    Acepto <a href="#">Terminos y Condiciones</a>
						  </label>
						</div>
				        <input type="submit" class="btn btn-primary btn-block" value="Registrarte">
		      		</form>
		    	</div>
		      	<hr />
		        <div class="row">
		        	<a href="login.php" class="btn col-xs-12 col-sm-12 col-md-12 col-lg-12">Volver a inicio de sesión</a>
		        </div>
		        
		    </div>

<!---->
		</div>		
		<script src="vista/js/jquery-3.3.1.min.js"></script>
		<script src="vista/js/bootstrap.min.js"></script>
		<script src="vista/js/datagestion.js"></script>		
	</body>
</html>	