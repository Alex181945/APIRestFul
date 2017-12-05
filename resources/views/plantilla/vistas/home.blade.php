@extends('plantilla.main')


@section('carousel')

	<!-- Carousel -->
	<div id="carouselExampleIndicators" class="carousel slide d-none d-md-block" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
					
		<div class="carousel-inner">
			<div class="carousel-item active" style="height: 100vh;">
				<img class="d-block w-100" src="{{asset('/imagen/estudiantes3.jpg')}}" alt="First slide">
				<div class="carousel-caption d-none d-md-block">
					<h3 style="color:black;">Terminaste el bachillerato y no sabes que estudiar</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut sapien at arcu facilisis auctor in vel velit. Vivamus accumsan leo nulla, vel placerat purus laoreet quis. Suspendisse dapibus non neque et pharetra. Vivamus vel iaculis lectus. Cras lorem neque, molestie at sollicitudin sit amet, eleifend vel turpis. Pellentesque enim lacus, scelerisque nec blandit ac, volutpat at urna. Donec nibh nulla, blandit a viverra vel, elementum at nunc. Pellentesque id risus tortor.</p>
				</div>
            </div>

            <div class="carousel-item" style="height: 100vh;">
            	<img class="d-block w-100" class="img-fluid" src="{{asset('/imagen/estudiantes2.jpg')}}" alt="Second slide">
            	<div class="carousel-caption d-none d-md-block">
					<h3>Tu mejor opcion somos nosotros</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut sapien at arcu facilisis auctor in vel velit. Vivamus accumsan leo nulla, vel placerat purus laoreet quis. Suspendisse dapibus non neque et pharetra. Vivamus vel iaculis lectus. Cras lorem neque, molestie at sollicitudin sit amet, eleifend vel turpis. Pellentesque enim lacus, scelerisque nec blandit ac, volutpat at urna. Donec nibh nulla, blandit a viverra vel, elementum at nunc. Pellentesque id risus tortor.</p>
				</div>
            </div>

            <div class="carousel-item" style="height: 100vh;">
            	<img class="d-block w-100" src="{{asset('/imagen/estudiantes1.jpg')}}" alt="Third slide">
            	<div class="carousel-caption d-none d-md-block">
					<h3>Ven Conocenos</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut sapien at arcu facilisis auctor in vel velit. Vivamus accumsan leo nulla, vel placerat purus laoreet quis. Suspendisse dapibus non neque et pharetra. Vivamus vel iaculis lectus. Cras lorem neque, molestie at sollicitudin sit amet, eleifend vel turpis. Pellentesque enim lacus, scelerisque nec blandit ac, volutpat at urna. Donec nibh nulla, blandit a viverra vel, elementum at nunc. Pellentesque id risus tortor.</p>
				</div>
            </div>
		</div>

		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>

		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		</a>
	</div>
	<!-- Fin Carousel -->

@endsection


@section('contenido')	

	<!-- Servicios -->

	<div class="card-deck">

		<div class="card">
			<img class="card-img-top" src="{{asset('/imagen/Hawaiian.png')}}" alt="Card image cap" />
			<div class="card-body">
				<h4 class="card-title">Pizza Hawaiana</h4>
					<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			</div>
		</div>

		<div class="card">
			<img class="card-img-top" src="{{asset('/imagen/pepperoni.jpg')}}" alt="Card image cap" />
			<div class="card-body">
				<h4 class="card-title">Pizza de Pepperoni</h4>
				<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
				<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			</div>
		</div>

		<div class="card">
			<img class="card-img-top" src="{{asset('/imagen/quesos.jpg')}}" alt="Card image cap" />
			<div class="card-body">
				<h4 class="card-title">Pizza Tres Quesos</h4>
				<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
				<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			</div>
		</div>
		
	</div>
			

	<!-- Fin Servicios -->
	
@endsection