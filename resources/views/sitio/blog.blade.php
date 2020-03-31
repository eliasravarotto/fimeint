@extends('sitio.layout')

@section('title_and_meta')
    <title>FIMe</title>
    {{-- <meta name="description" content="Derka y Vargas Concesionario Oficial Toyota en Chaco. Venta de 0KM, Usados Certificados Toyota, Usados Multimarcas. Servicios de Posventa. Plan de Ahorro 100% financiado"> --}}
@stop

@section('mark-up-facebook')
@stop

@section('styles')

@stop


@section('content')
	<!-- Start Breadcrumb -->
	<div id="mu-breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav aria-label="breadcrumb" role="navigation">
					  <ol class="breadcrumb mu-breadcrumb">
					    <li class="breadcrumb-item"><a href="/">Inicio</a></li>
					    <li class="breadcrumb-item active" aria-current="page">Posts</li>
					  </ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumb -->

	
	<!-- Start main content -->
	<main>
		<div class="container mt-4 py-5">
			<div class="row mt-5">
				<div class="col-md-12 col-sm-12">
					<div class="jumbotron">
					  <h1 class="display-4"><i class="fas fa-exclamation-circle"></i> Sitio web en mantenimiento</h1>
					  <p class="lead">El sitio web se encuentra en mantenimiento disculpe las molestias. </p>
					  <hr class="my-4">
					  <p>Ante cualquier duda o consulta puede comunicarse con nosotros a través de cualquiera de nuestros medios.</p>
					  <a class="btn btn-primary btn-lg" href="/contacto" role="button">Contacto</a>
					</div>
				</div>
			</div>
		</div>

		
		<!-- Start Blog -->
		{{-- <section id="mu-blog">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-blog-area">
							<div class="row">
								<div class="col-md-8">
									<div class="mu-blog-left">
										@forelse( $cursos as $curso )
										<article class="mu-blog-item">
											<a href="{{route('show_post', $curso->slug)}}"><img src="{{Storage::url($curso->foto)}}" alt="blgo image"></a>
											<div class="mu-blog-item-content">
												<ul class="mu-blog-meta">
													<li>BY: ADMIN </li>
													<li><i class="fa fa-calendar"></i>{{$curso->created_at->diffForHumans()}}</li>
												</ul>
												<h1 class="mu-blog-item-title">
													<a href="{{route('show_post', $curso->slug)}}">{{$curso->titulo}}</a>
												</h1>
												<p>{{$curso->descripcion}}</p>
												<a class="btn btn-primary" href="{{route('show_post', $curso->slug)}}">Leer más <i class="fa fa-long-arrow-right"></i></a>
											</div>
										</article>
										<!-- End single item -->
										@empty

										@endforelse
									</div>
								</div>
								<div class="col-md-4">
									<div class="mu-blog-sidebar">
										<!-- start Single Widget -->
										@include('sitio.includes.follow-us')
										<!-- End single widget -->

										<!-- Start related post -->
										<div class="mu-related-post mt-5">
											<h2 class="mu-related-post-title">Te puede interesar</h2>
											@include('sitio.includes.recent-posts-side-rigth')
										</div>
										<!-- End related post -->
										
										<!-- start Single Widget -->
										@include('sitio.includes.tags')
										<!-- End single widget -->

										<!-- start Single Widget -->
										@include('sitio.includes.subscribe')
										<!-- End single widget -->

									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</section> --}}
		<!-- End Blog --> 

	</main>
@stop