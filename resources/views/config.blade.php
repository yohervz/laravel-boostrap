<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		Perfil
	</title>
	<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('/css/styles.css') }}"/>
</head>
<script src="static/js/bootstrap.bundle.min.js"></script>
<body>

	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <div class="container-fluid">
		    <a class="navbar-brand" href="#">Perla</a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>

		    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

		      <div class="navbar-nav">
		        	
		      </div>
		    </div>
		  </div>
		</nav>
	</header>

	<section class="row">
		<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
		    <div class="position-sticky pt-3">
			    <ul class="nav flex-column">
		          <li class="nav-item">
		            <a class="nav-link active" aria-current="page" href="/profile">
		              <span data-feather="home"></span>  
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bar-chart-fill" viewBox="0 0 16 16">
					  	<path d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2z"/>
						</svg>
		              Dashboard
		            </a>
		          </li>
		           <li class="nav-item">
		            <a class="nav-link" href="/config">
		              <span data-feather="shopping-cart"></span>
		              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-gear" viewBox="0 0 16 16">
					  	<path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Zm9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z"/>
					</svg>
		            Configuraciones
		            </a>
		          </li>
		          <li class="nav-item">
		          	<form action="/logout" method="POST">
						<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
						<input type="submit" class="btn btn-danger" name="" value="Cerrar sesion">
					</form>
		          </li>

		        </ul>
	   		</div>
		</nav>
		<section class="col-8 container" style="">
			<h3>Datos personales</h3>
			<form action="/config" method="POST">
				<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
				<div class="row mb-3">
					<div class="col">
						<label>Nombre</label>
						<input type="text" class="form-control" id="nameUser" name="nombre" value={{$user->Nombre}}>
						<span class="text-danger" id="errorNameUser" style="display: none;">Campo obligatorio</span>
					</div>
					<div class="col">
						<label>Apellido</label>
					<input type="text" class="form-control" id="subnameUser" name="apellido" value={{$user->Apellido}}>
					<span class="text-danger" id="errorSubnameUser" style="display: none;" >Campo obligatorio</span>
					</div>
				</div>
				
				<div class="mb-3">
					<label>Correo</label>
					<input type="email" class="form-control" id="email" name="correo" value={{$user->Correo}}>
					<span class="text-danger" id="errorEmail" style="display: none;">Campo obligatorio</span>
				</div>

				<div class="mb-3">
					<label>Clave</label>
					<div class="input-group">
						<input type="password" class="form-control" id="password" name="clave" value={{$user->Clave}}>
						<button class="btn btn-outline-secondary" id="buttonShowPassword">Mostrar</button>
					</div>
					<span class="text-danger" id="errorPassword"></span>
				</div>
				<div class="mb-3">
					<label>Clave de nuevo</label>
					<div class="input-group">
						<input type="password" class="form-control" id="passwordValidation" name="" value="{{$user->Clave}}">
						<button class="btn btn-outline-secondary" id="buttonShowPasswordValidation">Mostrar</button>
					</div>	
					<span class="text-danger" id="errorPasswordValidation"></span>
				</div>
				<div class="mb-3">
					<label>CV</label>
					<input type="text" class="form-control" id="cv" name="linkcv" value={{$user->LinkCV}}>
					<span class="text-danger" id="errorCV" style="display: none;">Campo obligatorio</span>
				</div>
				<div class="mb-3">
					<label>Biografia</label>
					<textarea class="form-control" style="height: 150px;" id="bio" maxlength="400" name="biografia">{{$user->Biografia}}</textarea>
					<span class="text-danger" id="errorBio" style="display: none;">Campo obligatorio</span>
				</div>
				<button id="submitData" class="btn btn-primary">Guardar</button>
			</form>
			<br><br>
			<h3>Eliminar cuenta</h3>
			<p>Nuestros servidores mantienen una copia de todos tus datos durante un periodo de 30 días en caso de que
			decidas volver a la plataforma</p>
			<form action="/deleteUser" method="POST">
				<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
				<input type="submit" class="btn btn-danger" value="Eliminar cuenta">
			</form>
		</section>
	</section>
	<script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{ asset('js/forms.js')}}"></script>
	<script src="{{ asset('js/form_config.js')}}"></script>
</body>
</html>