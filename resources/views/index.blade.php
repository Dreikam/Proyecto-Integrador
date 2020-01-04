@extends('layouts.principal')

@section('contenido')

	<div class="contenedor">
		<header class="headerI">

			<img src="img/logo_nav.png" alt="Logo">
			<h2>Mercado de Cerveza Artesanal</h2>
		</header>
		<main class="mainI">
			<form class="" action="" method="post">
				<nav class="nava">
						<input class="form-control mr-sm-2" type="search" placeholder="Buscar un articulo..." aria-label="Search">
						<button class="btn btn-outline-success my-2 my-sm-0" type="button">Buscar</button>
				</nav>
			</form>

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
	</div>

@endsection
