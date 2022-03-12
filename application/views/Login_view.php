<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MokeySystem - Inicio de Sesión</title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url() ?>diseño/plugins/fontawesome-free/css/all.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="<?= base_url() ?>diseño/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url() ?>diseño/dist/css/adminlte.min.css">

	<script src="<?= base_url() ?>diseño/js/jquery-3.5.1.min.js"></script>

	<script src="<?= base_url() ?>diseño/js/login.js"></script>

</head>
<body class="hold-transition login-page" style="background-color: #2f4858">

	

	<div class="login-box">
		<div class="login-logo mb-5">
			<h1 class="text-white">MokeySystem-Admin</h1>
		</div>
		<!-- /.login-logo -->
		<div class="card">
			<div class="card-body login-card-body" style="border-radius: 6px">
				<p class="login-box-msg">Inicio de Sesión</p>

				<form action="<?= base_url() ?>inicio/admin">
					<div class="input-group mb-3">
						<input type="email" class="form-control" id="correo" placeholder="Correo Electrónico">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-envelope"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input type="password" id="password" class="form-control" placeholder="Contraseña">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
					<div class="row">

						<!-- /.col -->
						<div class="col-12">
							<button type="button" id="btn-entrar" class="form-control text-white text-center" style="background-color: #33658a">
								Iniciar Sesión
							</button>
						</div>
						<!-- /.col -->
					</div>
				</form>

				<div class="social-auth-links text-center mb-3">
					<p>- ¿No tienes una cuenta administrador? -</p>
					<p>- vuelve a la pagina principal -</p>
					<a href="<?= base_url() ?>inicio" class="btn btn-block text-white" style="background-color:#444242">
						Página principal
					</a>
				</div>
				<!-- /.social-auth-links -->
			</div>
			<!-- /.login-card-body -->
		</div>
	</div>
	<!-- /.login-box -->

	<!-- jQuery -->
	<script src="<?= base_url() ?>diseño/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="<?= base_url() ?>diseño/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?= base_url() ?>diseño/dist/js/adminlte.min.js"></script>
</body>
</html>