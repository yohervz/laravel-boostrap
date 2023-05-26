<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registrarse</title>
	<link rel="stylesheet" href="{{ asset('/css/styles.css') }}"/>
	<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}"/>
</head>
<body>
	<div class="container">
		<div class="col login my-5" id="part1">
			<h1>Registrate</h1>
			<h2 class="text-danger">El correo ingresado ya se encuentra en uso</h2>
			<form action="/register" method="POST">
				<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
				<div class="row mb-3">
					<div class="col">
						<label>Nombre</label>
						<input type="text" class="form-control" id="nameUser" name="nombre">
						<span class="text-danger" id="errorNameUser" style="display: none;">Campo obligatorio</span>
					</div>
					<div class="col">
						<label>Apellido</label>
					<input type="text" class="form-control" id="subnameUser" name="apellido">
					<span class="text-danger" id="errorSubnameUser" style="display: none;">Campo obligatorio</span>
					</div>
				</div>
				
				<div class="mb-3">
					<label>Correo</label>
					<input type="email" class="form-control" id="email" name="correo">
					<span class="text-danger" id="errorEmail" style="display: none;">Campo obligatorio</span>
				</div>

				<div class="mb-3">
					<label>Clave</label>
					<div class="input-group">
						<input type="password" class="form-control" id="password" name="clave">
						<button class="btn btn-outline-secondary" id="buttonShowPassword">Mostrar</button>
					</div>
					<span class="text-danger" id="errorPassword"></span>
				</div>
				<div class="mb-3">
					<label>Clave de nuevo</label>
					<div class="input-group">
						<input type="password" class="form-control" id="passwordValidation" name="">
						<button class="btn btn-outline-secondary" id="buttonShowPasswordValidation">Mostrar</button>
					</div>	
					<span class="text-danger" id="errorPasswordValidation"></span>
				</div>
				<div class="mb-3">
					<label>CV</label>
					<input type="text" class="form-control" id="cv" name="linkcv">
					<span class="text-danger" id="errorCV" style="display: none;">Campo obligatorio</span>
				</div>
				<div class="mb-3">
					<label>Biografia</label>
					<textarea class="form-control" style="height: 150px;" id="bio" maxlength="400" name="biografia"></textarea>
					<span class="text-danger" id="errorBio" style="display: none;">Campo obligatorio</span>
				</div>
				<input type="submit" class="btn btn-primary" id="submitData" value="Crear cuenta">	
				<br><br>
				<p class="text-center">¿Ya tienes una cuenta? <a href="/login" class="text-decoration-none">Presiona aquí</a></p>
			</form>
		</div>
	</div>
	<script src="{{ asset('/js/forms.js') }}"></script>
	<script src="{{ asset('/js/form_register.js') }}"></script>
</body>
</html>