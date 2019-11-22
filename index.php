<?php

require_once('funciones.php');


?>












<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">
	<link rel="stylesheet" href="css/pushbar.css">
	<link rel="stylesheet" href="css/estilo.css?uuid=<?php echo uniqid(); ?>">
	  <?php include_once('icono.php'); ?>
	<title>Bierful</title>
</head>
<body>
	<div class="contenedor">
		<header class="headerI">
			<img src="img/logo_nav.png" alt="Logo">
			<h2>Lorem Ipsum Premium Store</h2>
		</header>
		<main class="mainI">
			<nav class="navI">
				<button class="btn-menu" data-pushbar-target="pushbar-menu"><i class="fas fa-bars"></i></button>
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</nav>
			<section class="sectionI productos">
				<figure class="figureI">
					<img src="img/vasos2.png" alt="">
					<figcaption class="figcaptionI">
						<a href="#" data-pushbar-target="pushbar-carrito">
							<span>$$$$</span>
							<span>Comprar</span>
						</a>
					</figcaption>
				</figure>
				<figure class="figureI">
					<img src="img/sillas2.jpg" alt="">
					<figcaption class="figcaptionI">
						<a href="#" data-pushbar-target="pushbar-carrito">
							<span>$$$$</span>
							<span>Comprar</span>
						</a>
					</figcaption>
				</figure>
				<figure class="figureI">
					<img src="img/producto3.jpg" alt="">
					<figcaption class="figcaptionI">
						<a href="#" data-pushbar-target="pushbar-carrito">
							<span>$$$$</span>
							<span>Comprar</span>
						</a>
					</figcaption>
				</figure>
			</section>
		</main>

		<!-- Pushbars: Menu -->

				<div class="pushbar from_left pushbar-menu" data-pushbar-id="pushbar-menu">
					<div class="btn-cerrar">
						<button data-pushbar-close> <i class="fas fa-times"></i> </button>
					</div>
					<nav class="menu">
							<?php if ($_SESSION == true) : ?>
										<img src="fotos/.<?=$_SESSION["avatar"]; ?>" alt="Foto de perfil">
						<?php else : ?>
						<input type="text" name="" value="" style="visibility:hidden">
					<?php endif; ?>
						<a href="#">Inicio</a>
						<a href="#">Contacto</a>
						<a href="#">Preguntas Frecuentes</a>
						<?php if ($_SESSION == true) { ?>
							<a href="cerrarsesion.php">Cerrar Sesión</a>
						<?php } else { ?>
							<a href="login.php">Iniciar Sesión</a>
						<?php } ?>
					</nav>
				</div>




	<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
	<script src="js/pushbar.js"></script>
	<script type="text/javascript">
	var pushbar = new Pushbar({

	 blur:true,

	 overlay:true,

	 });
	</script>

</body>
</html>
