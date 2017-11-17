<!DOCTYPE html>
<html lang="es">
<head>

	<title>{{isset($titulo) ? $titulo : 'SAE' }}</title>

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Styless -->
    <link rel="stylesheet" type="text/css" href="{{asset('/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('/css/style.css')}}" />

    <style type="text/css">
    	.vertical-center {
    		min-height: 100%;  /* Fallback for browsers do NOT support vh unit */
    		min-height: 100vh; /* These two lines are counted as one :-)       */

		  	display: flex;
		  	align-items: center;
		}
    </style>

</head>
<body>

	<div class="container-fluid">

		<div class="container">
			

			<!-- Encabezado -->

			<nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
				<a class="navbar-brand" href="#">SAE</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#">Inicio<span class="sr-only">(current)</span></a>
				      	</li>
				      	<li class="nav-item">
				        	<a class="nav-link" href="#">Nuestra Historia</a>
				      	</li>
				      	<li class="nav-item dropdown">
				        	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Servicios Educativos</a>
				        
				        	<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					          	<a class="dropdown-item" href="#">Actividades Extraescolares</a>
					          	<a class="dropdown-item" href="#">Actividades Deportivas</a>
				        	</div>
				        	
				      	</li>
				    </ul>			    
				</div>		  
			</nav>

			<!-- Fin Encabezado -->


			@section('contenido')
			@show


			<!-- Pie de Pagina -->

			<footer class="footer">
		      <div class="container">
		        <span class="text-muted"><center>Derechos Reservados 2017</center></span>
		      </div>
		    </footer>

			<!-- Fin Pie de Pagina -->
			
		</div>
	</div>

	<!-- Scripts -->
    <script src="{{asset('/jquery/lib/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('/jquery/lib/popper.min.js')}}"       type="text/javascript"></script>
    <script src="{{asset('/jquery/lib/popper-utils.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('/bootstrap/js/bootstrap.min.js')}}"  type="text/javascript"></script>

</body>
</html>