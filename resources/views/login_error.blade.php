<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		Iniciar sesion
	</title>
	<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('/css/styles.css') }}"/>
</head>
<body>
	<div class="container">
		<div class="col login my-5">
			<h1>Inicia sesion</h1>
			<h2 class="text-danger">Verifica tus datos e intenta nuevamente</h2>
			<form action="/auth" method="POST" id="form">
				<input type="hidden" id="token" name="_token" value="{{ csrf_token() }}"/>
				<div class="mb-3">
					<label>Correo</label>
					<input type="email" class="form-control" id="email" name="correo" autocomplete="off">
					<span class="text-danger" style="display: none;" id="errorEmail">Campo obligatorio</span>
				</div>

				<div class="mb-3">
					<label>Clave</label>
					<div class="input-group">
						<input type="password" class="form-control" id="password" name="clave">
						<button class="btn btn-outline-secondary" id="buttonShowPassword">Mostrar</button>
					</div>
					<span class="text-danger" style="display:none" id="errorPassword">Campo obligatorio</span>
				</div>

				<button class="btn btn-primary" id="submitData">Iniciar sesion</button>	
				<br><br>
				<p class="text-center">¿No tienes una cuenta? <a href="/register" class="text-decoration-none">Presiona aquí</a></p>
			</form>
		</div>
	</div>
	<script src="{{ asset('/js/forms.js') }}"></script>
	<script src="{{ asset('/js/form_login.js') }}"></script>
</body>
</html>