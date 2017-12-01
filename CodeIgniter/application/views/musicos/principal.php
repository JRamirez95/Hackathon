<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Hackathon Login</title>


		<!-- Latest compiled and minified CSS & JS -->
		<link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<script src="//code.jquery.com/jquery.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

        <style>

        body {
         
         background-image: url('http://noticias.universia.net.co/net/images/educacion/b/be/ben/beneficios-musica-estudos-noticias.png');
          
  background-position: center center;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  background-color:#464646;
        }

        .navbar-fixed-top {
           border: 0;

        }
        .main {
         margin: 20px;
        }

.placeholder img {
  display: inline-block;
  border-radius: 50%;
}
        }
        </style>

	</head>
	<body>
     
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">        
          <a class="navbar-brand">Musico</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">SALIR</a></li>            
          </ul>         
        </div>
      </div>
    </nav>    

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Perfil</h1>
       
          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="https://cdn2.iconfinder.com/data/icons/ios-7-icons/50/user_male2-512.png" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">              
            </div>
            <form id="form" class="navbar-form navbar-left" role="search" method="POST" action="/Hackathon/CodeIgniter/musico/buscar">
            <div class="form-group">
							<select  class="form-control" id="query" name="query" placeholder= "Buscar amigos por género">
              <?php foreach ($generos as $genero) { ?>
                <option value="<?php echo "$genero->nombre" ?>"><?php echo "$genero->nombre" ?></option>
              <?php } ?>
              </select>
              <input type="submit" class="btn btn-primary" id="buscar" value="Buscar" />
      </div>
            </form>
           
            <form id="form" class="navbar-form navbar-left" role="search" method="POST" action="/Hackathon/CodeIgniter/musico/buscar">
            <div class="form-group">
							<select  class="form-control" id="queryInst" name="instru" placeholder= "Buscar amigos por instrumentos">
              <?php foreach ($instrumentos as $instrumento) { ?>
                <option value="<?php echo "$instrumento->nombre" ?>"><?php echo "$instrumento->nombre" ?></option>
              <?php } ?>
              </select>
              <input type="submit" class="btn btn-primary" id="buscarInst" value="Buscar" />
      </div>
						</form>
            </div>

      </div>      
          <div class="col-md-9">

          <table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Resultado de búsqueda</th>
					</tr>	
				</thead>
				<tbody>
        <tr>
         
        </tr>
				</tbody>
			</table>	
      </div>
    </body>
	</html>