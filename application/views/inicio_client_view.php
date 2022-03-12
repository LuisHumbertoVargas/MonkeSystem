<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	<meta name="generator" content="Hugo 0.84.0">
	<title>MonkeySystem</title>

	<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">



	<!-- Bootstrap core CSS -->
	<link href="<?=base_url()?>static/assets/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}
	</style>


	<!-- Custom styles for this template -->
	<link href="<?=base_url()?>static/assets/dist/css/carousel.css" rel="stylesheet">
</head>
<body>

	<header>
		<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">MonkeySystem</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarCollapse">
					<ul class="navbar-nav me-auto mb-2 mb-md-0">
						<li class="nav-item">
							<a class="nav-link active" href="<?= base_url() ?>inicio">Inicio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= base_url() ?>inicio/productos">Productos</a>
						</li>
						<li class="nav-item">
							<!--class = "disabled" tabindex="-1" aria-disabled="true"-->
							<a class="nav-link " href="<?= base_url() ?>inicio/loginAdmin" >Iniciar sesión</a>
						</li>
					</ul>

				</div>
			</div>
		</nav>
	</header>

	<main>

		<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>

			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="<?=base_url()?>static/assets/img/pexels-fox.jpg" class="d-block w-100" alt=" ">
					<div class="container">
						<div class="carousel-caption text-start">
							<h1>MonkeySystem.</h1>
							<p>Venta de prodcutos tecnológicos, de computadoras y más.</p>
						</div>
					</div>
				</div>

				<div class="carousel-item">
					<img src="<?=base_url()?>static/assets/img/pexels-lisa.jpg" class="d-block w-100" alt=" ">

					<div class="container">
						<div class="carousel-caption">
							<h1>Nuestros Productos.</h1>
							<p>Todo lo que necesitas para tu computadora, nosotros lo tenemos.</p>
							<p><a class="btn btn-lg btn-primary" href="<?= base_url() ?>inicio/productos">Ver más</a></p>
						</div>
					</div>
				</div>

				<div class="carousel-item">
					<img src="<?=base_url()?>static/assets/img/pexels-kaboom.jpg" class="d-block w-100" alt=" ">

					<div class="container">
						<div class="carousel-caption text-end">
							<h1>¿Eres empleado?.</h1>
							<p>¡Inicia sesion aquí!</p>
							<p><a class="btn btn-lg btn-primary" href="<?= base_url() ?>inicio/loginAdmin">Iniciar sesión</a></p>
						</div>
					</div>
				</div>

			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>


  <!-- Marketing messaging and featurettes
  	================================================== -->
  	<!-- Wrap the rest of the page in another container to center all the content. -->

  	<div class="container marketing">

  		<!-- Three columns of text below the carousel -->
  		<div class="row">
  			<div class="col-lg-4">
  				<img class="bd-placeholder-img rounded-circle" width="140" height="140" aria-label="Placeholder: 140x140" src="<?=base_url()?>static/assets/img/facebook.png">

  				<h2>Nuestro Facebook</h2>
  				<p>Tambien puedes contactarnos mediante facebook y ver nuestra galeria, y publicaciones.</p>
  				<p><a class="btn btn-secondary" href="#">Ir a Facebook &raquo;</a></p>
  			</div><!-- /.col-lg-4 -->
  			<div class="col-lg-4">
  				<img class="bd-placeholder-img rounded-circle" width="140" height="140" aria-label="Placeholder: 140x140" src="<?=base_url()?>static/assets/img/email.png">

  				<h2>Nuestros correos</h2>
  				<p>Mandanos un correo electronico y nosotros responderemos ante cualquier duda.</p>
  				<p><button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">Ver correos &raquo;</button></p>
  			</div><!-- /.col-lg-4 -->
  			<div class="col-lg-4">
  				<img class="bd-placeholder-img rounded-circle" width="140" height="140" aria-label="Placeholder: 140x140" src="<?=base_url()?>static/assets/img/whatsapp.png">

  				<h2>Nuestro WhatsApp</h2>
  				<p>Nuestro WhatsApp para una comunicación más rápida y atenta.</p>
  				<p><button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal2">Ver WhatsApp &raquo;</button></p>
  			</div><!-- /.col-lg-4 -->
  		</div><!-- /.row -->


  		<!-- START THE FEATURETTES -->

  		<hr class="featurette-divider">

  		<div class="row featurette">
  			<div class="col-md-7">
  				<h2 class="featurette-heading">¿Quiénes somos?.</h2>
  				<p class="lead">Nos dedicamos a servicios de reparacion y actuaización profesional de computadoras, que son desempeñados con esmero y dedicación, con el proposito de que el equipo de nuestros clientes funcione y mejore.</p>
  			</div>
  			<div class="col-md-5">
  				<svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

  			</div>
  		</div>

  		<hr class="featurette-divider">

  		<div class="row featurette">
  			<div class="col-md-7 order-md-2">
  				<h2 class="featurette-heading">Nuestra misión.</h2>
  				<p class="lead">Trabajar de manera rápida y eficiente para ganar la confianza de nuestros clientes para así contribuir en el mejoramiento de sus equipos, asesorándolos en todo momento para generar resultados positivos.</p>
        </div>
        <div class="col-md-5 order-md-1">
          <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
       <div class="col-md-7">
        <h2 class="featurette-heading">Nuestra visión.</h2>
        <p class="lead">Ser una empresa líder en el mercado mexicano de equipos de cómputo, considerada una de las principales opciones para satisfacer las distintas necesidades de nuestros clientes.</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
      <div class="modal-content">
       <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuestros Correos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...<br>
        ...<br>
        ...<br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal 2-->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">¡Contactanos por WhatsApp!</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
  </div>
  <div class="modal-body">
    ...<br>
    ...<br>
    ...<br>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
  </div>
</div>
</div>
</div>
</div><!-- /.container -->


<!-- FOOTER -->
<footer class="container">
  <p class="float-end"><a href="#">Back to top</a></p>
  <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
</footer>
</main>


<script src="<?=base_url()?>static/assets/dist/js/bootstrap.bundle.min.js"integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>
