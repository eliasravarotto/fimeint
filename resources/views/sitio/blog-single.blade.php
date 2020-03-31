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
					    <li class="breadcrumb-item"><a href="{{route('all_posts')}}?categoria={{$curso->categoria->slug}}">{{$curso->categoria->nombre}}</a></li>
					    <li class="breadcrumb-item active" aria-current="page">{{$curso->titulo}}</li>
					  </ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumb -->
	
	<!-- Start Blog -->
	<section id="mu-blog" class="mu-blog-single">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="mu-blog-area">
						<!-- Title -->
						<div class="row">
							<div class="col-md-8">
								<div class="mu-blog-left">
									<!-- start single item -->
									<article class="mu-blog-item">
										<img class="w-100" src="{{Storage::url($curso->foto)}}" alt="blgo image">
										<div class="mu-blog-item-content mb-4">
											
											<h1 class="mu-blog-item-title">{{$curso->titulo}}</h1>
											<ul class="mu-blog-meta">
												@if($curso->lugar)<li><i class="fa fa-map-marker"></i>{{$curso->lugar}}</li>@endif
												<li><i class="fa fa-calendar"></i>Publicado {{$curso->created_at->diffForHumans()}}</li>
												{{-- <li><i class="fa fa-calendar"></i>Fin: {{$curso->fecha_fin}}</li> --}}
											</ul>
											<p>{{$curso->descripcion}}</p>
											<div class="contenido-del-post">
												{!! $curso->contenido !!}
											</div>
											@if( $curso->link_mp )
											<blockquote>
												<p>Podes realizar el pago desde aqui</p>
												{!! $curso->link_mp !!}
											</blockquote>
											@endif
										</div>

										<div class="mu-files my-3">
											<div class="row">
												@foreach($curso->files as $file)
											  		<div class="col-md-4 ">
											  			<a href="{{Storage::url($file->path)}}" class="border d-flex file" download>
												  			<div class="w-25">
												  				@switch($file->extension)
														    		@case('pdf')
														        		<i class="far fa-file-pdf"></i>
													        		@break

																    @case('doc')
																        <i class="far fa-file-word"></i>
														        	@break

														        	@case('png' || 'jpg' || 'jpeg')
																        <i class="far fa-image"></i>
														        	@break

														    		@default
														        		<i class="fal fa-file"></i>
																@endswitch
												  			</div>
												  			<div class="w-75">
												  					{{$file->name}}
												  			</div>
											  			</a>
											  		</div>
												@endforeach
											</div>
										</div>

										<!-- Start Blog Post Tag
										<div class="mu-blog-tag">
											<ul class="mu-blog-tag-nav">
												<li><h3><span class="fa fa-tag"></span>Article Tags:</h3></li>
												<li><a href="#">Web Design,</a></li>
												<li><a href="#">Graphic Design,</a></li>
												<li><a href="#">E-commerces</a></li>
											</ul>
										</div>
									 	End Blog Post Tag -->

										<!-- Start Blog Post Share 
										<div class="mu-blog-share">
											<ul class="mu-social-media mu-blog-share-nav">
												<li><h3>Share on :</h3></li>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a class="mu-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a class="mu-pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
												<li><a class="mu-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
												<li><a class="mu-youtube" href="#"><i class="fa fa-youtube"></i></a></li>
											</ul>
										</div>
										End Blog Post Share -->

										<!-- Start related post -->
										<div class="mu-related-post mt-5">
											<h2 class="mu-related-post-title">Te puede interesar</h2>
											@include('sitio.includes.recent-posts')
										</div>
										<!-- End related post -->
									</article>
									<!-- End single item -->
								</div>
							</div>
							<div class="col-md-4">
								<div class="mu-blog-sidebar">
									<!-- start Single Widget 
									<div class="mu-sidebar-widget">
										<form class="mu-search-form">
											<input type="search" placeholder="Search">
											<button class="mu-search-submit-btn" type="submit"><i class="fa fa-search"></i></button>
										</form>
									</div>
									End single widget -->

									<!-- start Single Widget -->
									@include('sitio.includes.follow-us')

									<div class="mu-sidebar-widget">
										<!-- start Single Widget -->
										@include('sitio.includes.recent-posts-side-rigth')
									</div>
									<!-- start Single Widget -->
									@include('sitio.includes.subscribe')

								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Blog --> 
@stop