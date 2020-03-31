<header id="mu-hero">
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light mu-navbar">
			<!-- Text based logo -->
			<!-- <a class="navbar-brand mu-logo" href="index.php"><span>B-HERO</span></a> -->
			<a class="navbar-brand mu-logo" href="/" style="max-width: 125px;">
				<img src="{{asset('images/logo-fime.png')}}">
			</a>
			{{-- <a class="navbar-brand mu-logo" href="/" style="max-width: 75px;">
				<img src="{{asset('images/logo-alianza.png')}}">
			</a> --}}
			<!-- image based logo -->
		   	<!-- <a class="navbar-brand mu-logo" href="index.html"><img src="assets/images/logo.png" alt="logo"></a> -->
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="fa fa-bars"></span>
		  </button>

		  <button type="button" id="sidebarCollapse" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false" class="navbar-btn collapsed active">
		  	<span></span> <span></span> <span></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto mu-navbar-nav">
				<li class="nav-item"> 
				<a href="/">Inicio</a>
				</li>
				<li class="nav-item dropdown">
				<a class="dropdown-toggle" href="blog.html" role="button" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Servicios</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="{{ route('mediacion') }}">Mediación</a>
				<a class="dropdown-item" href="{{ route('negociacion') }}">Negociación</a>
				<a class="dropdown-item" href="{{ route('arbitraje') }}">Arbitraje</a>
				</div>
				</li>
				<li class="nav-item dropdown">
				<a class="dropdown-toggle" href="blog.html" role="button" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Capacitaciones</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="{{route('all_posts')}}?categoria=oferta-academica">Oferta Académica</a>
					<a class="dropdown-item" href="{{route('all_posts')}}?categoria=cursos-vigentes">Cursos Vigentes</a>
				</div>
				</li>
				<li class="nav-item"><a href="https://www.todosobremediacion.com.ar/aula-virtual/" target="_blank">Aula Virtual</a></li>
				<li class="nav-item"><a href="{{route('empresa_de_familia')}}">Empresa de Familia</a></li>
				<li class="nav-item"><a href="{{route('nosotros')}}">Nosotros</a></li>
				<li class="nav-item"><a href="{{route('contacto')}}">Contacto</a></li>
		    </ul>
		  </div>
		</nav>
	</div>
</header>
