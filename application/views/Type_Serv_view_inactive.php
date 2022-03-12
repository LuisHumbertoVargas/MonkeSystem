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

	<script src="<?= base_url() ?>diseño/js/lista_type_serv_inactive.js"></script>

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
          				<a href="<?= base_url() ?>inicio/marcas" class="nav-link text-white">
          					<i class="far fa-circle nav-icon"></i>
          					<p>Lista de Marcas</p>
          				</a>
          			</li>
          			<li class="nav-item">
          				<a href="<?= base_url() ?>inicio/marcas_inactiva" class="nav-link text-white">
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
          				Productos
          				<i class="fas fa-angle-left right"></i>
          				<!--<span class="badge badge-info right">6</span>-->
          			</p>
          		</a>
          		<ul class="nav nav-treeview">
          			<li class="nav-item">
          				<a href="<?= base_url() ?>inicio/catalogoServicio" class="nav-link text-white">
          					<i class="far fa-circle nav-icon"></i>
          					<p>Catalogo de Productos</p>
          				</a>
          			</li>
          			<li class="nav-item">
          				<a href="<?= base_url() ?>inicio/ServicioInactivo" class="nav-link text-white">
          					<i class="far fa-circle nav-icon"></i>
          					<p>Productos Inactivos</p>
          				</a>
          			</li>
          			<li class="nav-item">
          				<a href="<?= base_url() ?>inicio/agregarServ" class="nav-link text-white">
          					<i class="far fa-circle nav-icon"></i>
          					<p>Agregar Productos</p>
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
					<h1 class="m-0">Categorias Inactivas</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url() ?>inicio/admin">Inicio</a></li>
						<li class="breadcrumb-item active">Categorias</li>
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
							<h3 class="card-title text-white">categoria inactivas</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body table-responsive p-0" style="height: 300px;">
							<table id="tabla-admins" class="table table-striped">
								<thead>
									<tr class='thead-dark'>
										<th class="text-center text-white">ID</th>
										<th class="text-center text-white">Categoria</th>
										<th class="text-center text-white">Descripcion</th>
										<th class="text-center text-white">Acciones</th>
									</tr>
								</thead>
								<tbody>

									<?php /*

									foreach ($resultado as $key) {
            # code...

										echo "<tr>
										<td class='text-center'>"
										.$key->nombre1.
										"</td>
										<td class='text-center'>"
										.$key->apellidoPaterno.
										" ".$key->apellidoMaterno.
										"</td>
										<td class='text-center'>"
										.$key->estado.
										"</td>
										<td class='text-center'>"
										.$key->correo.
										"</td>
										<td class='text-center'>"
										.$key->telefono.
										"</td>


										<td class='text-center'> 
										<a href='".base_url()."inicio/modificaUsu/".$key->correo."''>
										<button id='btn-modificar'
										class='btn text-white' 
										style='background-color:#444242'
										type='submit'>
										<i class='fas fa-edit text-white text-center'></i>
										</button>
										</a>
										&nbsp;&nbsp;
										<a href='".base_url()."inicio/borraUsuario/".$key->correo."''>
										<button  class='btn text-white' style='background-color:#A01127'>
										<i class='fas fa-trash'></i>
										</button>
										</a>
										</td>
										</tr>";
									}*/
									?>
								</tbody>
							</table>
						</div>
						<!-- /.card-body -->
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
<footer class="main-footer">
	<strong>Copyright &copy;2020 <a href="https://adminlte.io">MonkeySystem</a>.</strong>
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

<!-- Modal BORRAR -->
<div class="modal fade" id="modal-activar-categoria" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="background-color: #000">
				<h5 class="modal-title text-white" id="exampleModalLabel">Activar Categoria</h5>
				<button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="background-color: #EBE6E6">
				¿Seguro que desea activar la categoria nuevamente<span id="modal-activar-categoria
				"></span>?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn text-white" style="background-color: #444242" data-dismiss="modal"><i class="fas fa-times"></i>
				Cancelar</button>
				<button type="button" 
				data-dismiss="modal"
				class="btn text-white"
				style="background-color: #33658A" 
				data-cvecli=""
				id="btn-confirmar-alta-cat">
				<i class="fas fa-check"></i>
			Activar</button>
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