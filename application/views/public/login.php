<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Nuestra Historia O&M</title>
	<!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
  <!-- jQuery 3 -->
	<script src="<?php echo base_url('/assets/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url('/assets/bower_components/font-awesome/css/font-awesome.min.css'); ?>">
	<!-- AdminLTE App -->
	<script src="<?php echo base_url('/assets/dist/js/adminlte.min.js'); ?>"></script>
	<style>
		.MainCont {
			height: auto;
			width: 90%;
			max-width: 300px;
			margin-top: 50px;
		}

		body {
			background-color: #5D0A28;
		}

		.Titulo {
			color: #fff;
			margin-bottom: 20px;
			transform: scale(1.5);
			font-weight: bold;
		}

		.Titulo:hover {
			transform: scale(1.6);
			cursor: pointer;

		}

		.onH:hover {
			transform: scale(1.1);
			cursor: pointer;
		}
	</style>
</head>

<body>
	<center>
		<div class="MainCont">
			<h1 class="Titulo">Ingresar</h1>
			<div class="panel panel-primary">
				<form method="POST" action="<?php echo base_url('Login/Ingresar'); ?>" name="formLogin">
					<div class="panel-header">
						<h4 class="onH">Iniciar Sesion</h4>
					</div>
					<div class="panel-body">
						<input name='txtUsr' id='txtUsr' type="text" placeholder="Usuario" class="form-control" /><br>
						<input name='txtPass' id='txtPass' type="password" placeholder="Contraseña" class="form-control" />
					</div>
					<div class="panel-footer">
						<button role="button" type="submit" class="btn">Ingresar</button>
					</div>
				</form>
			</div>
		</div>
	</center>	
	<!-- Bootstrap 3.3.7 -->
	<script src="<?php echo base_url('/assets/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
</body>

</html>