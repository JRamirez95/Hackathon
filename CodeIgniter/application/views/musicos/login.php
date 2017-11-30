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


	</head>

	<body>

		<div id="container" class="container">
			<br>
			<br>
			<form action="/Hackathon/CodeIgniter/musico/logins" method="POST" role="form">

				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title" style="text-align: center; color: Blue; font-size:24px; "><strong>Login</strong></h3>
								</div>
								<div class="panel-body">
									<form accept-charset="UTF-8" role="form">
										<fieldset>
											<div class="form-group">
												<input class="form-control" placeholder="Correo" name="correo" type="email">
											</div>
											<div class="form-group">
												<input class="form-control" placeholder="Contraseña" name="password" type="password" value="">
											</div>
											<br>
											<input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
										</fieldset>
									</form>

								</div>
							</div>
						</div>
					</div>
				</div>
			</form>

		</div>

	</body>

	</html>
