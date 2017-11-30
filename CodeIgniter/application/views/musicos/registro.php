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
	/* Safari 4-5, Chrome 1-9 */
	  background: -webkit-gradient(radial, center center, 0, center center, 460, from(#1a82f7), to(#2F2727));
  
	/* Safari 5.1+, Chrome 10+ */
	  background: -webkit-radial-gradient(circle, #1a82f7, #2F2727);
  
	/* Firefox 3.6+ */
	  background: -moz-radial-gradient(circle, #1a82f7, #2F2727);
  
	/* IE 10 */
	  background: -ms-radial-gradient(circle, #1a82f7, #2F2727);
	  height:600px;
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

<?php
// Consultar la base de datos
$con = mysqli_connect("localhost","root","","hackathon") or die ("Error de conexion");
$consulta = "SELECT * FROM `instrumentos`";
$ejecutar = mysqli_query($con,$consulta);

 ?>

<div class="container">
<div class="row centered-form">
	<div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Registro</h3>
			</div>
			<div class="panel-body">
	
	<form action="/Hackathon/CodeIgniter/musico/guardar" method="POST" role="form">
	
    
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
			
			<?php			

			while ($fila = mysqli_fetch_array($ejecutar)) {
				echo "<option >".$fila["nombre"]."</option>"; 				
			}
			?>			
			</select>
		</div>

        <div class="form-group">
			<label for="">Genero de música</label>
			<input type="text" name="genero" class="form-control" id="" placeholder="">
		</div>

        <div class="form-group">
			<label for="">Foto</label>
			<input type="text" name="foto" class="form-control" id="" placeholder="">
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
		
			<button type="submit" class="btn btn-primary">Registrarse</button>
			<br>
	</form>
	

	</div>
                </div>                    
            </div>            
        </div>        
    </div>

</body>
</html>
