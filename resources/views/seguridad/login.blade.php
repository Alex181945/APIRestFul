@extends('plantilla.main')

@section('contenido')

	<div class="h-100"> 
	<div class="d-flex justify-content-center align-items-center">

		
		<form action="/validaLogin" method="post">

			<div class="input-group">
			  <span class="input-group-addon col-4" id="basic-addon1">
			    <span>Usuario:</span>
			  </span>
			  <input type="text" class="form-control" placeholder="Usuario" aria-describedby="basic-addon1" id="usuario">
			</div>

			<div class="input-group">
			  <span class="input-group-addon col-4" id="basic-addon1">
			    <span>Password:</span>
			  </span>
			  <input type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1" id="password">
			</div>

			<input type="submit" value="Iniciar Sesión" class="btn btn-primary col-12">

		</form>
	</div>
	</div>

@endsection