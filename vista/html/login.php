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
		    		<h3>Datagestión</h3>
		    	</div>
		    	<div id="form_body">
		    		<div class="loginError">
						Mensaje error
					</div>
		    		<div class="loginSucces">
					¡El usuario fue registrado  correctamente!
					</div>
		    	</div>
		      
		      <hr />
		      	<form>
			      	<div class="form-group">
			          <label for="usuario">Correo Electrónico</label>
			          <input type="text" class="form-control" id="usuario" placeholder="Ingrese el correo Electrónico" required>
			        </div>
			        <div class="form-group">
			          <label for="password">Contraseña</label>
			          <input type="password" class="form-control" id="password" placeholder="Ingrese su contraseña" required>
			        </div>
			        <!-- CAMBIAR A BOTON -->
			        <a type="submit" class="btn btn-primary btn-block" href="tarjeta.php">Ingresar</a> 
		      	</form>
		        <hr />
		        <div class="row">
		        	<a href="index.php?accion=registro" class="btn col-xs-12 col-sm-12 col-md-12 col-lg-12">Registrarme</a>
		        	<a href="recuperacion.php" class="btn col-xs-12 col-sm-12 col-md-12 col-lg-12">Olvidé mi contraseña</a>
		        </div>
		    </div>

<!---->
		</div>		
		<script src="vista/js/jquery-3.3.1.min.js"></script>
		<script src="vista/js/bootstrap.min.js"></script>
		<script src="vista/js/datagestion.js"></script>		
	</body>
</html>	