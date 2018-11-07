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
		    		<h3>Validación de cuenta</h3>
		    	</div>
		    	<div id="form_body">
		    		<div class="loginError">
						
					</div>
		    		<div class="loginSucces">
					
					</div>
		    	</div>
		      
		      <hr />
		      	<form>
			      	<div class="form-group">
			          <label for="usuario">Coordenada [X][Y]</label>
			          <input type="number" class="form-control" id="usuario" placeholder="Numero de la coordenada" required>
			        </div>
			        <div class="form-group">
			          <label for="password">Coordenada [X][Y]</label>
			          <input type="password" class="form-control" id="password" placeholder="Numero de la coordenada"required>
			        </div>
			        <a type="submit" class="btn btn-primary btn-block" href="grupos.php">Validar</a> 
		      	</form>
		        <hr />	        
		    </div>

<!---->
		</div>		
		<script src="../js/jquery-3.3.1.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/datagestion.js"></script>		
	</body>
</html>	