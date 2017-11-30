<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Hackathon</title>

	
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	
	<style type="text/css">
body{	
	  background: #CECAC9;
  }
  
  .panel-title{
	  text-align: center;
	  font-size: 26px;
  }
  .centered-form{
	  margin-top: 60px;
  }
  
  .centered-form .panel{
	  background: rgba(255, 255, 255, 0.8);
	  box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
  }
  
  label.label-floatlabel {
	  font-weight: bold;
	  color: #46b8da;
	  font-size: 11px;
  }
	</style>
</head>
<body>

<div class="container">
<div class="row centered-form">
	<div class="col-xs-12 col-sm-8 col-md-8 col-sm-offset-2 col-md-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><strong>Registro</strong></h3>
			</div>
			<div class="panel-body">
	
	<form action="/Hackathon/CodeIgniter/musico/guardar" method="POST" role="form" enctype="multipart/form-data">
	
    
		<div class="form-group">
			<label for="">Nombre</label>
			<input type="text" name="nombre" class="form-control" id="" placeholder="">
		</div>

		<div class="form-group">
			<label for="">Apellido</label>
			<input type="text" name="apellido" class="form-control" id="" placeholder="">
		</div>

        <div class="form-group">
			<label for="">Dirección</label>
			<textarea type="text" name="direccion" class="form-control" id="" placeholder=""></textarea>
		</div>

        <div class="form-group">
			<label for="">Instrumento</label>
			<select name="instrumento" class="form-control" id="" multiple>
			<?php foreach ($instrumentos as $instrumento) { ?>
				<option value="<?php echo "$instrumento->nombre" ?>"><?php echo "$instrumento->nombre" ?></option>
			<?php } ?>			
			</select>
		</div>

        <div class="form-group">
			<label for="">Genero de música</label>
			<select name="genero" class="form-control" id="" multiple>
			<?php foreach ($generos as $genero) { ?>
				<option value="<?php echo "$genero->nombre" ?>"><?php echo "$genero->nombre" ?></option>
			<?php } ?>			
			</select>
		</div>

        <div class="form-group">
			<label for="">Foto</label>
			<input type="file" name="foto" class="form-control" id="" placeholder="">
		</div>

		<div class="form-group">
			<label for="">Correo</label>
			<input type="email" name="correo" class="form-control" id="" placeholder="">
		</div>

		<div class="form-group">
			<label for="">Contraseña</label>
			<input type="password" class="form-control" id="">
		</div>

		<div class="form-group">
			<label for="">Contraseña</label>
			<input type="password" name="contrasenna" class="form-control" id="">
		</div>
		
			<button type="submit" class="btn btn-primary" name="accept">Registrarse</button>
			<button type="submit" class="btn btn-danger">Cancelar</button>
			<br>
	</form>
	

	</div>
                </div>                    
            </div>            
        </div>        
    </div>

</body>
</html>
