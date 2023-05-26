<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}"/>
	<title>Inicio</title>
</head>
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
			<br>
			<h1 class="">{{$offer[0]->Titulo}}</h1>
			<span class="text-muted">{{$offer[0]->Puesto}}</span><br>
			<p class="">
				{{$offer[0]->Informacion}}
				{{$offer[0]->Informacion}}
				{{$offer[0]->Informacion}}
				{{$offer[0]->Informacion}}
			
			<br><br>
			cillum dolore eu fugiat nulla pariatur. Excepteursint occaecat cupidatat non
			proident, sunt in culpa qui officia <a href="#">{{$offer[0]->CorreoReclutador}}</a></p>
		</section>
	</section>
</body>
</html>