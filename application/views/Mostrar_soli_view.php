<!DOCTYPE html>
<html lang="en">
<head>

	<title>CotizApp - Administración</title>

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


	<script>
		var Mail_Us    = "<?= $Mail_Us ?>";
		var base_url = "<?= base_url() ?>";

	</script>


	<!-- Google Font: Source Sans Pro -->
</head>
<body class="hold-transition sidebar-mini layout-fixed" onload="window.print();">
	<div class="wrapper">

		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light text-center">
			<!-- Left navbar links -->
			<ul class="navbar-nav text-center">
				<li class="nav-item">
					<a class="nav-link pb-3" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>
				<!--<img src="<?= base_url() ?>diseño/imagenes/Garsoon_Nav.png" width=200 class="text-center">-->
				<h1>CotizApp</h1>
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
						<p href="#" class="d-block"><?= $Mail_Us ?></p>
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
          	<li class="nav-item menu-open">
          		<a href="#" class="nav-link active" style="background-color: #33658a ">
          			<i class="nav-icon fas fa-tachometer-alt"></i>
          			<p>
          				Páginas
          				<i class="right fas fa-angle-left"></i>
          			</p>
          		</a>
          		<ul class="nav nav-treeview">
          			<li class="nav-item">
          				<a href="https://www.facebook.com/salonsfera" class="nav-link active">
          					<i class="fab fa-facebook nav-icon"></i>
          					<p>Página de facebook</p>
          				</a>
          			</li>
          			<li class="nav-item" >
          				<a href="https://www.salonsfera.com/" class="nav-link active" style="background-color: #f6ae2d">
          					<i class="far fa-circle nav-icon"></i>
          					<p>Página de web</p>
          				</a>
          			</li>
          			<li class="nav-item">
          				<a href="<?= base_url() ?>inicio/admin" class="nav-link active" style="background-color: #2f4858">
          					<i class="far fa-circle nav-icon"></i>
          					<p>Inicio</p>
          				</a>
          			</li>
          		</ul>
          	</li>

          	
          	<li class="nav-item" style="color: #FFFFFF">
          		<a href="#" class="nav-link text-white">
          			<i class="nav-icon fas fa-clipboard-list"></i>
          			<p>
          				Solicitudes
          				<i class="fas fa-angle-left right"></i>
          				<!--<span class="badge badge-info right">6</span>-->
          			</p>
          		</a>
          		<ul class="nav nav-treeview">
          			<li class="nav-item">
          				<a href="<?= base_url() ?>inicio/NewRequestList" class="nav-link text-white">
          					<i class="far fa-circle nav-icon"></i>
          					<p>Solicitudes Nuevas</p>
          				</a>
          			</li>
          			<li class="nav-item">
          				<a href="<?= base_url() ?>inicio/ProcessRequestList" class="nav-link text-white">
          					<i class="far fa-circle nav-icon"></i>
          					<p>Solicitudes en Proceso</p>
          				</a>
          			</li>
          			<li class="nav-item">
          				<a href="<?= base_url() ?>inicio/CancelRequestList" class="nav-link text-white">
          					<i class="far fa-circle nav-icon"></i>
          					<p>Solicitudes Canceladas</p>
          				</a>
          			</li>
          		</ul>
          	</li>

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

	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">

				<div class="col-md-1">

				</div>

				<div class="col-md-9">
					<!-- jquery validation -->
					<form >
						<div class="card" id="cotizacion" name="cotizacion">
							<div class="card-header text-white" style="background-color: #33658a">
								<h3 class="card-title">CotizApp</h3>
							</div>
							<!-- /.card-header -->
							<table id="tabla-admins" class="table table-striped">
								<!-- Datos de solicitud -->
								<thead>
									<tr class='thead-dark'>
										<th class="text-center text-white">#Cotización</th>
										<th class="text-center text-white">Fecha</th>
										<th class="text-center text-white">Hrs Extra</th>
										<th class="text-center text-white">Invitados</th>
									</tr>
								</thead>
								<tbody>

									<?php 
									if ($resultado == NULL) {
										echo "<tr>
										<td class='text-center'>
										</td>
										<td class='text-center'>  
										</td>
										<td class='text-center'>
										0  
										</td>
										<td class='text-center'> 
										$???
										</td>
										
										</tr>";
									} else {
										foreach ($resultado as $key) {
											echo "<tr>";
											if ($key->id_soli!=NULL) {
												echo 
												"<td class='text-center'>"
												.$key->id_soli.
												"</td>";
											} else {
												echo "<td class='text-center'>  </td>";
											}
											if ($key->fecha_soli!=NULL) {
												echo "<td class='text-center'>"
												.$key->fecha_soli.
												"</td>";
											} else {
												echo "<td class='text-center'>  </td>";
											}
											if ($key->hrs_extras!=NULL) {
												echo "<td class='text-center'>"
												.$key->hrs_extras.
												"</td>";
											} else {
												echo "<td class='text-center'> 0 </td>";
											}
											if ($key->cant_inv!=NULL) {
												if ($key->cant_inv==0) {
													echo "<td class='text-center'>49 máximo</td>";
												}
												if ($key->cant_inv==1) {
													echo "<td class='text-center'>50 a 60</td>";
												}
												if ($key->cant_inv==2) {
													echo "<td class='text-center'>61 a 70</td>";
												}
												if ($key->cant_inv==3) {
													echo "<td class='text-center'>71 a 80</td>";
												}
												if ($key->cant_inv==4) {
													echo "<td class='text-center'>81 a 100</td>";
												}

											} else {
												echo "<td class='text-center'> ??? </td>";
											}
											echo "</tr>";
										}
									}


									?>
								</tbody>
								<!-- /Datos de solicitud -->
								<!-- /Datos de empleado -->
								
								<!-- /Datos de empleado -->
								<!-- Datos de cliente -->
								<thead>
									<tr class='thead-dark'>
										<th class="text-center text-white">Contacto</th>
										<th class="text-center text-white">Correo</th>
										<th class="text-center text-white">Telefono</th>
									</tr>
								</thead>
								<tbody>

									<?php 
									if ($resultado == NULL) {
										echo "<tr>
										<td class='text-center'>
										</td>
										<td class='text-center'>  
										</td>
										<td class='text-center'>  
										</td>
										</tr>";
									} else {
										foreach ($resultado as $key) {
											echo "<tr>";
											if ($key->Nom_Client!=NULL) {
												echo "<td class='text-center'>"
												.$key->Nom_Client." ".$key->Ap_Client.
												"</td>";
											} else {
												echo "<td class='text-center'>  </td>";
											}
											if ($key->Mail_Client!=NULL) {
												echo "<td class='text-center'>"
												.$key->Mail_Client.
												"</td>";
											} else {
												echo "<td class='text-center'>  </td>";
											}
											if ($key->Tel_Client!=NULL) {
												echo "<td class='text-center'>"
												.$key->Tel_Client.
												"</td>";
											} else {
												echo "<td class='text-center'>  </td>";
											}

											echo "</tr>";
										}
									}
									

									?>
								</tbody>
								<!-- /Datos de cliente -->
								<!-- Datos de descripcion -->
								<thead>
									<tr class='thead-dark'>
										<th class="text-center text-white">Servicios</th>
										<th class="text-center text-white">Cantidad</th>
										<th class="text-center text-white">Precio</th>
										<th class="text-center text-white">Importe</th>
									</tr>
								</thead>
								<tbody>

									<?php 
									if ($resultado2!= NULL) {
										foreach ($resultado2 as $key) {
            # code...

											echo "<tr>
											<td class='text-center'>"
											.$key->nombre_serv.
											"</td>
											<td class='text-center'>"
											.$key->cant_serv.
											"</td>
											<td class='text-center'>$"
											.$key->precio_serv.
											"</td>
											<td class='text-center'>$"
											.$key->subtotal.
											"</td>
											</tr>";
										}
									}
									?>
									<tr>
										<td class='text-center'>
											Renta del salón
										</td>
										<td class='text-center'>
											--
										</td>
										<td class='text-center'>
											--
										</td>
										<?php 
										if ($resultado!= NULL) {
											foreach ($resultado as $key) {
												echo "<td class='text-center'>$"
												.$key->renta_salon.
												"</td>";
											}
										}
										?>
									</tr>
								</tbody>
								<thead>
									<tr class='thead-dark'>
										<th class="text-center text-white">IVA</th>
										<th class="text-center text-white">Subtotal</th>
										<th class="text-center text-white">Total</th>
									</tr>
								</thead>
								<tbody>
									
									<?php if ($resultado!= NULL) {
										foreach ($resultado as $key) {
											echo "<tr>
											<td class='text-center'>"
											.$key->iva.
											"</td>
											<td class='text-center'>"
											.$key->monto_soli.
											"</td>
											<td class='text-center'>"
											.$key->total.
											"</td>
											</tr>";
										}
									}?>
									
								</tbody>
								<thead>
									<tr class='thead-dark'>
										<th class="text-center text-white">Nuestro Teléfono</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="text-center">
											4423833050
										</td>
									</tr>
								</tbody>
								<!-- /Datos de descripcion -->
							</table>
						</div>
						<button style='background-color: #f6ae2d' class='btn text-white'><i class='fas fa-edit'></i>&nbsp;PDF</button>
					</form>


					<!-- /.card -->
				</div>
				<!--/.col (left) -->
				<!-- right column -->
				<div class="col-md-2">

				</div>
				<!--/.col (right) -->
			</div>
			<!-- /.row -->
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">

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

</body>
</html>