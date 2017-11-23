@extends('plantilla.main')

@section('contenido')

	
	<div style="min-height: 80%; min-height: 80vh;" class="d-flex justify-content-center align-items-center">	
		<form action="/validaLogin" method="post">
  

  			<div class="form-group row">
				<div class="input-group">
				  <span class="input-group-addon" id="basic-addon1">
				    <span><i class="fa fa-user-circle" aria-hidden="true"></i></span>
				  </span>
				  <?php if (isset($usuario)) {
				  	if ($usuario) {
				  		echo '<input type="text" class="form-control is-invalid" placeholder="Usuario" aria-describedby="basic-addon1" name="usuario" id="usuario">';
				  	}else{
				  		echo '<input type="text" class="form-control" placeholder="Usuario" aria-describedby="basic-addon1" name="usuario" value="'.$usuValor.'" id="usuario">';
				  	}
				  }else{
				  	echo '<input type="text" class="form-control" placeholder="Usuario" aria-describedby="basic-addon1" name="usuario" id="usuario">';
				  } ?>
				</div>
			</div>

			<div class="form-group row">
				<div class="input-group">
				  <span class="input-group-addon" id="basic-addon1">
				    <span><i class="fa fa-key" aria-hidden="true"></i></span>
				  </span>
				  <?php if (isset($password)) {
				  	if ($password) {
				  		echo '<input type="password" class="form-control is-invalid" placeholder="Contaseña" aria-describedby="basic-addon1" name="password" id="password">';
				  	} else{
				  		echo '<input type="password" class="form-control" placeholder="Contaseña" aria-describedby="basic-addon1" name="password" id="password">';
				  	}
				  }else{
				  	echo '<input type="password" class="form-control" placeholder="Contaseña" aria-describedby="basic-addon1" name="password" id="password">';
				  } ?>
				</div>
			</div>

			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<input type="submit" value="Iniciar Sesión" class="btn btn-primary col-12">

		</form>
	</div>
	

@endsection