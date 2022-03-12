<!DOCTYPE html>
<html lang="en">
<head>

	<title>MonkeySystem - Administración</title>

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
	<script src="<?= base_url() ?>diseño/js/solicitudes.js"></script>

	<script>
		var correo    = "<?= $correo ?>";
		var base_url = "<?= base_url() ?>";
	</script>

	<!-- Google Font: Source Sans Pro -->
</head>
<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">

		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light text-center">
			<!-- Left navbar links -->
			<ul class="navbar-nav text-center">
				<li class="nav-item">
					<a class="nav-link pb-3" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>
				<!--<img src="<?= base_url() ?>diseño/imagenes/Garsoon_Nav.png" width=200 class="text-center">-->
				<h1>MonkeySystem</h1>
			</ul>
		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-primary elevation-4" style="background-color: #2f4858" >
			<!-- Brand Logo -->
			<p href="index3.html" class="brand-link" style="color: #FFFFFF">
				<img src="<?= base_url() ?>diseño/imagenes/globo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
				<span class="brand-text font-weight-light">Administración</span>
			</p>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user panel (optional) -->
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="<?= base_url() ?>diseño/imagenes/man.png" class="img-circle elevation-2" alt="User Image">
					</div>
					<div class="info" style="color: #FFFFFF">
						<p href="#" class="d-block"><?= $correo ?></p>
					</div>
				</div>

				<!-- SidebarSearch Form -->
				<div class="form-inline">
					<div class="input-group" data-widget="sidebar-search">
						<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
						<div class="input-group-append">
							<button class="btn btn-sidebar" style="background-color: #33658a ">
								<i class="fas fa-search fa-fw"></i>
							</button>
						</div>
					</div>
				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
          	with font-awesome or any other icon font library -->
          	
          	<li class="nav-item" style="color: #FFFFFF">
          		<a href="#" class="nav-link text-white">
          			<i class="nav-icon fas fa-copy"></i>
          			<p>
          				Categorias
          				<i class="fas fa-angle-left right"></i>
          				<!--<span class="badge badge-info right">6</span>-->
          			</p>
          		</a>
          		<ul class="nav nav-treeview">
          			<li class="nav-item">
          				<a href="<?= base_url() ?>inicio/categorias" class="nav-link text-white">
          					<i class="far fa-circle nav-icon"></i>
          					<p>Lista de Categorias</p>
          				</a>
          			</li>
          			<li class="nav-item">
          				<a href="<?= base_url() ?>inicio/categorias_inactiva" class="nav-link text-white">
          					<i class="far fa-circle nav-icon"></i>
          					<p>Categorias Inactivas</p>
          				</a>
          			</li>
          			<li class="nav-item">
          				<a href="<?= base_url() ?>inicio/agregarCat" class="nav-link text-white">
          					<i class="far fa-circle nav-icon"></i>
          					<p>Agregar Categorias</p>
          				</a>
          			</li>
          			
          		</ul>
          	</li>
          	<li class="nav-item" style="color: #FFFFFF">
          		<a href="#" class="nav-link text-white">
          			<i class="nav-icon fas fa-copy"></i>
          			<p>
          				Marcas
          				<i class="fas fa-angle-left right"></i>
          				<!--<span class="badge badge-info right">6</span>-->
          			</p>
          		</a>
          		<ul class="nav nav-treeview">
          			<li class="nav-item">
          				<a href="<?= base_url() ?>inicio/Marcas" class="nav-link text-white">
          					<i class="far fa-circle nav-icon"></i>
          					<p>Lista de Marcas</p>
          				</a>
          			</li>
          			<li class="nav-item">
          				<a href="<?= base_url() ?>inicio/Marcas_inactiva" class="nav-link text-white">
          					<i class="far fa-circle nav-icon"></i>
          					<p>Marcas Inactivas</p>
          				</a>
          			</li>
          			<li class="nav-item">
          				<a href="<?= base_url() ?>inicio/agregarMarc" class="nav-link text-white">
          					<i class="far fa-circle nav-icon"></i>
          					<p>Agregar Marcas</p>
          				</a>
          			</li>
          			
          		</ul>
          	</li>

          	<li class="nav-item" style="color: #FFFFFF">
          		<a href="#" class="nav-link text-white">
          			<i class="nav-icon fas fa-book-open"></i>
          			<p>
          				Servicios
          				<i class="fas fa-angle-left right"></i>
          				<!--<span class="badge badge-info right">6</span>-->
          			</p>
          		</a>
          		<ul class="nav nav-treeview">
          			<li class="nav-item">
          				<a href="<?= base_url() ?>inicio/catalogoServicio" class="nav-link text-white">
          					<i class="far fa-circle nav-icon"></i>
          					<p>Catalogo de servicios</p>
          				</a>
          			</li>
          			<li class="nav-item">
          				<a href="<?= base_url() ?>inicio/ServicioInactivo" class="nav-link text-white">
          					<i class="far fa-circle nav-icon"></i>
          					<p>Servicios Inactivos</p>
          				</a>
          			</li>
          			<li class="nav-item">
          				<a href="<?= base_url() ?>inicio/agregarServ" class="nav-link text-white">
          					<i class="far fa-circle nav-icon"></i>
          					<p>Agregar Servicios</p>
          				</a>
          			</li>
          		</ul>
          	</li>
          	


          	<li class="nav-item">
          		<a href="#" class="nav-link text-white">
          			<i class="nav-icon fas fa-user-alt"></i>
          			<p>
          				Usuarios
          				<i class="fas fa-angle-left right"></i>
          			</p>
          		</a>
          		<ul class="nav nav-treeview">
          			<li class="nav-item">
          				<a href="<?= base_url() ?>inicio/registroUsu" class="nav-link text-white">
          					<i class="far fa-circle nav-icon"></i>
          					<p>Registrar Usuario</p>
          				</a>
          			</li>
          			<li class="nav-item">
          				<a href="<?= base_url() ?>inicio/modificacion" class="nav-link text-white">
          					<i class="far fa-circle nav-icon"></i>
          					<p>Modificar Usuario</p>
          				</a>
          			</li>
          			<li class="nav-item">
          				<a href="<?= base_url() ?>inicio/eliminar" class="nav-link text-white">
          					<i class="far fa-circle nav-icon"></i>
          					<p>Usuarios Inactivos</p>
          				</a>
          			</li>
          		</ul>
          	</li>

          	<li class="nav-item">
          		<a href="<?= base_url() ?>inicio/cierrasesion" class="nav-link text-white">
          			<i class="nav-icon fas fa-sign-out-alt"></i>
          			<p>
          				Cerrar Sesión
          			</p>
          		</a>
          	</li>

          </ul>
      </nav>
      <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Solicitudes</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url() ?>inicio/admin">Inicio</a></li>
						<li class="breadcrumb-item active">Solicitudes</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<!-- Small boxes (Stat box) -->
			<!-- Main row -->
			<div class="row">
				<!-- Left col -->
				<section class="col-lg-6 connectedSortable">
					<!-- Custom tabs (Charts with tabs)-->
					<div class="card">
						<div class="card-header" style="background-color: #f6ae2d">
							<h3 class="card-title text-white">Solicitudes Nuevas</h3>
							<div class="card-tools">
								<button type="button" class="btn btn-tool text-white" data-card-widget="collapse">
									<i class="fas fa-minus"></i>
								</button>
								<button type="button" class="btn btn-tool text-white" data-card-widget="remove">
									<i class="fas fa-times"></i>
								</button>
							</div>
						</div>
						<div class="card-body" id="new_request">
							<div class='chart'>
								<figure class="highcharts-figure">
									<div id="container">
										<table id="tabla-new-request" class="table table-striped">
											<thead>
												<tr class='thead-dark'>
													<th class="text-center text-white">Fecha</th>
													<th class="text-center text-white">Correo</th>
													<th class="text-center text-white">Acciones</th>
												</tr>
											</thead>
											<tbody>

											</tbody>
										</table>
									</div>
								</figure>
							</div>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->

					<!-- STACKED BAR CHART -->
					<div class="card card-success">
						<div class="card-header" style="background-color: #33658a">
							<h3 class="card-title text-white">Solicitudes en proceso</h3>
							<div class="card-tools">
								<button type="button" class="btn btn-tool text-white" data-card-widget="collapse">
									<i class="fas fa-minus"></i>
								</button>
								<button type="button" class="btn btn-tool text-white" data-card-widget="remove">
									<i class="fas fa-times"></i>
								</button>
							</div>
						</div>
						<div class="card-body" id="process_request">
							<div class="chart">
								<figure class="highcharts-figure">
									<div id="containers">
										<table id="tabla-process-request" class="table table-striped">
											<thead>
												<tr class='thead-dark'>
													<th class="text-center text-white">Fecha</th>
													<th class="text-center text-white">Correo</th>
													<th class="text-center text-white">Acciones</th>
												</tr>
											</thead>
											<tbody>

											</tbody>
										</table>
									</div>
								</figure>
							</div>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->

				</section>
				<!-- /.Left col -->
				<!-- right col (We are only adding the ID to make the widgets sortable)-->
				<section class="col-lg-6 connectedSortable">

					<!-- Custom tabs (Charts with tabs)-->
					<div class="card card-info">
						<div class="card-header" style="background-color: #33658a">
							<h3 class="card-title text-white">Solicitudes completadas</h3>
							<div class="card-tools">
								<button type="button" class="btn btn-tool text-white" data-card-widget="collapse">
									<i class="fas fa-minus"></i>
								</button>
								<button type="button" class="btn btn-tool text-white" data-card-widget="remove">
									<i class="fas fa-times"></i>
								</button>
							</div>
						</div>
						<div class="card-body" id="complete_request">
							<div class="chart">
								<figure class="highcharts-figure">
									<div id="container1">
										<table id="tabla-complete-request" class="table table-striped">
											<thead>
												<tr class='thead-dark'>
													<th class="text-center text-white">Fecha</th>
													<th class="text-center text-white">Correo</th>
													<th class="text-center text-white">Acciones</th>
												</tr>
											</thead>
											<tbody>

											</tbody>
										</table>
									</div>    
								</figure>
							</div>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->

					<!-- BAR CHART -->
					<div class="card card-success">
						<div class="card-header" style="background-color: #A01127">
							<h3 class="card-title text-white">Solicitudes caceladas</h3>
							<div class="card-tools">
								<button type="button" class="btn btn-tool text-white" data-card-widget="collapse">
									<i class="fas fa-minus"></i>
								</button>
								<button type="button" class="btn btn-tool text-white" data-card-widget="remove">
									<i class="fas fa-times"></i>
								</button>
							</div>
						</div>
						<div class="card-body" id="cancel_request">
							<div class="chart">
								<figure class="highcharts-figure">
									<div id="containers2">
										<table id="tabla-cancel-request" class="table table-striped">
											<thead>
												<tr class='thead-dark'>
													<th class="text-center text-white">Fecha</th>
													<th class="text-center text-white">Correo</th>
													<th class="text-center text-white">Acciones</th>
												</tr>
											</thead>
											<tbody>

											</tbody>
										</table>
									</div>    
								</figure>
							</div>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</section>
				<!-- right col -->
			</div>
			<!-- /.row (main row) -->
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
	<strong>Copyright &copy;2020 <a href="https://adminlte.io">Salon Sfera</a>.</strong>
	All rights reserved.
	<div class="float-right d-none d-sm-inline-block">
		<b>Version</b> 3.1.0-rc 
	</div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
	<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

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
<!--

-->
</body>
</html>