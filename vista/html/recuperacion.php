<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

		<title>Datagestion</title>
		<!--<link rel="icon" href="favicon-32x32.png" type = "image" sizes="32x32">-->
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/datagestion.css">
	</head>
	<body>
		<div id="contenedor">
<!---->
		  <div class="div-center">
		    <div class="content">
		    	<div id="form_header">
		    		<h3>Recuperar contraseña</h3>
		    	</div>
		    	<div id="form_body">
		    		<form>
				      	<div class="form-group">
				          	<label for="correo">Correo Electrónico</label>
							<input type="email" id="correo" class="form-control" aria-describedby="correoAyuda" required>
							<small id="correoAyuda" class="form-text text-muted">
							  Una nueva contraseña sera enviada a la dirección de correo electrónico digitada en el momento que se registró en Datagestión.
							</small>
				        </div>
				        <button type="submit" class="btn btn-primary btn-block">Enviar nueva contraseña</button> 
		      		</form>
		    	</div>
		      	<hr />
		        <div class="row">
		        	<a href="login.php" class="btn col-xs-12 col-sm-12 col-md-12 col-lg-12">Volver a inicio de sesión</a>
		        </div>
		        

		    </div>

<!---->
		</div>		
		<script src="../js/jquery-3.3.1.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/datagestion.js"></script>		
	</body>
</html>	