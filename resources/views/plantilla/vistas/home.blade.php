@extends('plantilla.main')

@section('contenido')

	<!-- Carousel -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
					
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="{{asset('/imagen/pizza1.png')}}" alt="First slide">
            </div>

            <div class="carousel-item">
            	<img class="d-block w-100" class="img-fluid" src="{{asset('/imagen/pizza1.png')}}" alt="Second slide">
            </div>

            <div class="carousel-item">
            	<img class="d-block w-100" src="{{asset('/imagen/pizza1.png')}}" alt="Third slide">
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