<!DOCTYPE html>
<html lang="en">
<head>

	<title>CotizApp - Cotización</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url() ?>diseño/plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Tempusdominus Bootstrap 4 -->
	<link rel="stylesheet" href="<?= base_url() ?>diseño/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="<?= base_url() ?>diseño/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- JQVMap -->
	<link rel="stylesheet" href="<?= base_url() ?>diseño/plugins/jqvmap/jqvmap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url() ?>diseño/dist/css/adminlte.min.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="<?= base_url() ?>diseño/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="<?= base_url() ?>diseño/plugins/daterangepicker/daterangepicker.css">
	<!-- summernote -->
	<link rel="stylesheet" href="<?= base_url() ?>diseño/plugins/summernote/summernote-bs4.min.css">

	<script src="<?= base_url() ?>diseño/js/jquery-3.5.1.min.js"></script>

	<script src="<?= base_url() ?>diseño/js/carrito.js"></script>

	<script src="<?= base_url() ?>diseño/js/cotizar.js"></script>

	<!-- Google Font: Source Sans Pro -->
</head>
<body class="hold-transition layout-fixed">
	<!-- Navbar -->
	<nav class="navbar navbar-expand navbar-white navbar-light text-center">
		<!-- Left navbar links -->
		<ul class="navbar-nav text-center">
			<li class="nav-item">
				<a class="nav-link pb-3" data-widget="pushmenu" href="#" role="button"></a>
			</li>
			<!--<img src="<?= base_url() ?>diseño/imagenes/Garsoon_Nav.png" width=200 class="text-center">-->
			<h1>CotizApp</h1>
		</ul>
		
	</nav>

	<!-- /.navbar -->

	<!-- Main Sidebar Container -->

	<!-- /.sidebar-menu -->
	
	<!-- /.sidebar -->


	<!-- Content Wrapper. Contains page content -->
	<div>
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1 class="m-0">¡Cotiza tu evento con nuestros servicios diferentes!</h1>
					</div><!-- /.col -->
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="https://www.salonsfera.com/">Inicio</a></li>
							<li class="breadcrumb-item active">
								<a href="<?= base_url() ?>inicio/loginAdmin">iniciar sesión <i class="fas fa-sign-in-alt"></i></a>
							</li>
						</ol>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.container-fluid -->
		</div>
		<!-- /.content-header -->

		<!-- Main content -->
		<section class="content">
			<div class="container-fluid">
				<!-- /.row -->
				<div class="row">
					<div class="col-12">

						<div class="card">
							<div class="card-header" style="background-color: #2f4858">
								<h3 class="card-title text-white">servicios por categoría</h3>
							</div>
							<!-- /.card-header -->
							<div class="card-body table-responsive p-0" style="height: 300px;">
								<table id="tabla-admins" class="table table-striped">
									<thead>
										<tr class='thead-dark'>
											<th class="text-center text-white">Servicio</th>
											<th class="text-center text-white">Categoría</th>
											<th class="text-center text-white">Cantidad</th>
											<th class="text-center text-white">Agregar</th>
										</tr>
									</thead>
									<tbody>

									</tbody>
								</table>
							</div>
							<!-- /.card-body -->

							<div class="card-header" style="background-color: #2f4858">
								<h3 class="card-title text-white">Datos de contacto</h3>
							</div>
							<div class="card-body table-responsive p-0" style="height: 300px;">
								<div class="form-group">
									<label for="exampleInputEmail1">Nombre(s)*</label>
									<input type="text" id="Nom_Client" name="Nom_Client" class="form-control" required>
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Apellidos(s)*</label>
									<input type="text" id="Ap_Client" name="Ap_Client" class="form-control" required>
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Correo electrónico*</label>
									<input type="text" id="Mail_Client" name="Mail_Client" class="form-control" required>
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Telefono*</label>
									<input type="telephone" id="Tel_Client" name="nombre" class="form-control" required>
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Horas extra en tu evento</label>
									<input type="number" value="0" max="6" min="0" id="hrs_extras" name="hrs_extras" class="form-control">
								</div>
								<div>
									<label for='exampleInputEmail1'>Cantidad de invitados</label>
									<select name="cant_inv" class="custom-select form-control-border border-width-2"id="cant_inv">
										<option value='0' selected="selected">
											Renta de salón de máximo 49 personas
										</option>
										<option value='1'>
											Renta de salón de 50 a 60 personas
										</option>
										<option value='2'>
											Renta de salón de 61 a 70 personas
										</option>	
										<option value='3'>
											Renta de salón de 71 a 80 personas
										</option>		
										<option value='4'>
											Renta de salón de 81 a 100 personas
										</option>
									</select>		
								</div>
								<div class="card-footer">
									<button style="background-color: #f6ae2d" id="btn-cotizar" type="submit" class="btn text-white"><i class="fas fa-external-link-alt"></i>&nbsp;Cotizar</button>
								</div>
							</div>
							<!-- /.card -->


						</div>
					</div>
					<!-- /.row -->
				</div><!-- /.container-fluid -->
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->
		<footer>
			<strong>Copyright (c) 2018 Copyright CotizApp All Rights Reserved.

				<div class="float-right d-none d-sm-inline-block">
					<b>Version</b> 3.1.0-rc 
				</div>



			</footer>
			<div class="float-right d-none d-sm-inline-block">
				<b>Website created by: Erick Bran.</b>
			</div>

			<!-- Control Sidebar -->
			<aside class="control-sidebar control-sidebar-dark">
				<!-- Control sidebar content goes here -->
			</aside>
			<!-- /.control-sidebar -->
		</div>
		<!-- ./wrapper -->

		<!-- Modal mostrar servicio -->
		<div class="modal fade" id="modal-ver" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header" style="background-color: #000">
						<h5 class="modal-title text-white" id="nombre_serv">Servicio</h5>
						<button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body" style="background-color: #EBE6E6">
						<span id="descr_serv"></span>
					</div>
					<div class="modal-footer">
						<h5 class="modal-title" id="nombre_cat">categoria</h5> 
						<span id="descr_cat"></span>
					</div>
				</div>
			</div>
		</div>

		<!-- jQuery -->
		<script src="<?= base_url() ?>diseño/plugins/jquery/jquery.min.js"></script>
		<!-- jQuery UI 1.11.4 -->
		<script src="<?= base_url() ?>diseño/plugins/jquery-ui/jquery-ui.min.js"></script>
		<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
		<script>
			$.widget.bridge('uibutton', $.ui.button)
		</script>
		<!-- Bootstrap 4 -->
		<script src="<?= base_url() ?>diseño/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- ChartJS -->
		<script src="<?= base_url() ?>diseño/plugins/chart.js/Chart.min.js"></script>
		<!-- Sparkline -->
		<script src="<?= base_url() ?>diseño/plugins/sparklines/sparkline.js"></script>
		<!-- JQVMap -->
		<script src="<?= base_url() ?>diseño/plugins/jqvmap/jquery.vmap.min.js"></script>
		<script src="<?= base_url() ?>diseño/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
		<!-- jQuery Knob Chart -->
		<script src="<?= base_url() ?>diseño/plugins/jquery-knob/jquery.knob.min.js"></script>
		<!-- daterangepicker -->
		<script src="<?= base_url() ?>diseño/plugins/moment/moment.min.js"></script>
		<script src="<?= base_url() ?>diseño/plugins/daterangepicker/daterangepicker.js"></script>
		<!-- Tempusdominus Bootstrap 4 -->
		<script src="<?= base_url() ?>diseño/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
		<!-- Summernote -->
		<script src="<?= base_url() ?>diseño/plugins/summernote/summernote-bs4.min.js"></script>
		<!-- overlayScrollbars -->
		<script src="<?= base_url() ?>diseño/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
		<!-- AdminLTE App -->
		<script src="<?= base_url() ?>diseño/dist/js/adminlte.js"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="<?= base_url() ?>diseño/dist/js/demo.js"></script>
		<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
		<script src="<?= base_url() ?>diseño/dist/js/pages/dashboard.js"></script>

		<script src="<?= base_url() ?>diseño/plugins/chart.js/Chart.min.js"></script>

		<script src="https://code.highcharts.com/highcharts.js"></script>
		<script src="https://code.highcharts.com/modules/exporting.js"></script>
		<script src="https://code.highcharts.com/modules/export-data.js"></script>
		<script src="https://code.highcharts.com/modules/accessibility.js"></script>

	</body>
	</html>