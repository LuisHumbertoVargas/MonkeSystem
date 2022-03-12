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
							<a class="nav-link" aria-current="page" href="<?= base_url() ?>inicio">Inicio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" href="<?= base_url() ?>inicio/productos">Productos</a>
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

  <!-- Marketing messaging and featurettes
  	================================================== -->
  	<!-- Wrap the rest of the page in another container to center all the content. -->
  	<div class="col-md-12">
  		<br><h1 class="text-center">Nuestros Servicios.</h1>

  	</div>
  	<div class="container marketing">

  		<!-- START THE FEATURETTES -->

  		<hr class="featurette-divider">

  		<div class="row featurette">
  			<div class="col-md-7">
  				<h2 class="featurette-heading">Mantenimiento correctivo y preventivo.</h2>
  				<p class="lead">Es recomendable realizar de manera periódica un servicio técnico de limpieza profunda y revisión de funcionamiento a todos los equipos de cómputo para alargar su vida útil y detectar problemas a tiempo.</p>
  			</div>
  			<div class="col-md-5">
  				<svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

  			</div>
  		</div>

  		<hr class="featurette-divider">


      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">Cotización y ensamblaje de equipo de cómputo.</h2>
          <p class="lead">Nos acoplamos a tu presupuesto y seleccionamos los mejores componentes para entregarte un equipo de cómputo que pueda responder a tus necesidades.</p>
        </div>
        <div class="col-md-5 order-md-1">
          <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

        </div>
      </div>

      <hr class="featurette-divider">


      <div class="row featurette">
       <div class="col-md-7">
        <h2 class="featurette-heading">Actualización de tu PC y mejoras de rendimiento.</h2>
        <p class="lead">Podemos asesorarte y realizar la instalación de aquellos componentes que sirvan para aumentar la rapidez de tu computadora, reducir problemas de lentitud, y mejorar considerablemente tu experiencia de uso.</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
     <div class="col-md-7 order-md-2">
      <h2 class="featurette-heading">Formateo de computadoras y reinstalación <span class="text-muted"> de Windows</span>.</h2>
      <p class="lead">Si tu equipo de cómputo tiene problemas de software, nuestros técnicos realizarán un servicio de revisión y diagnóstico para evaluar la conveniencia de formatear tu computadora y volver a instalar sistema operativo (Windows o Linux).</p>
    </div>
    <div class="col-md-5 order-md-1">
      <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">Reparación de daños y fallas en hardware y componentes</h2>
      <p class="lead">Si tu computadora no enciende, o tiene algún problema de funcionamiento por daños en algún componente, nosotros podemos diagnosticar tu PC y determinar cuál es la causa precisa del fallo para solucionarlo con prontitud.</p>
    </div>
    <div class="col-md-5">
      <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

    </div>
  </div>

  <hr class="featurette-divider">

  <!-- /END THE FEATURETTES -->

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
