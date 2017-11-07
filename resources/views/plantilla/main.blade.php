<!DOCTYPE html>
<html lang="es">
<head>

	<title>{{isset($titulo) ? $titulo : 'SAE' }}</title>

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Styless -->
    <link rel="stylesheet" type="text/css" href="{{asset('/bootstrap/css/bootstrap.min.css')}}" />

</head>
<body>

	<div class="container">

		@section('home')
		@show
		
		
	</div>

	<!-- Scripts -->
    <script src="{{asset('/jquery/lib/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('/jquery/lib/popper.min.js')}}"       type="text/javascript"></script>
    <script src="{{asset('/jquery/lib/popper-utils.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('/bootstrap/js/bootstrap.min.js')}}"  type="text/javascript"></script>

</body>
</html>