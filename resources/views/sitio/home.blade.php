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
	<!-- Start slider LG-MD area -->
	<div id="mu-slider" class="d-none d-lg-block d-md-block mb-4">
		<div class="mu-slide">
			<!-- Start single slide  -->
			{{-- <div class="mu-single-slide">
				<img src="{{asset('images/slider-img-1.jpg') }}" alt="slider img">
				<div class="mu-single-slide-content-area">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="mu-single-slide-content">
									<h1>CONSULTORÍA A EMPRESAS</h1>
									<p style="font-size: 1.5rem">Negociación, Mediación, Conflictos internos (clima laboral), Empresas de Familia, Otros.</p>
									<a class="mu-primary-btn" href="#">Leer más <span class="fa fa-long-arrow-right"></span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> --}}

			<!-- Start single slide  -->
			<div class="mu-single-slide">
				<img src="{{asset('images/slide00.png') }}" alt="slider img">
				{{-- <div class="mu-single-slide-content-area">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="mu-single-slide-content">
									<h1>CONSULTORÍA A EMPRESAS</h1>
									<p style="font-size: 1.5rem">Negociación, Mediación, Conflictos internos (clima laboral), Empresas de Familia, Otros.</p>
									<a class="mu-primary-btn" href="#">Leer más <span class="fa fa-long-arrow-right"></span></a>
								</div>
							</div>
						</div>
					</div>
				</div> --}}
			</div>

			<!-- Start single slide  -->
			<div class="mu-single-slide">
				<img src="{{asset('images/slide01.jpeg') }}" alt="slider img">
			</div>
			
			<!-- Start single slide  -->
			<div class="mu-single-slide">
				<img src="{{asset('images/slide02.jpeg') }}" alt="slider img">
			</div>
		</div>
	</div>

	<!-- Start slider XS-SM area -->
	<div id="mu-slider" class="mu-slide-sm d-block d-lg-none d-md-none mb-5">
		<div class="mu-slide">
			<div class="mu-single-slide">
				<img src="{{asset('images/about-us.jpg') }}" alt="slider img">
				<div class="mu-single-slide-content-area d-flex justify-content-center" style="flex-direction: column;">
					<div class="mu-single-slide-content">
						<h1>SLIDER XS SM</h1>
						<p class="py-4" style="font-size: 20px">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
						<a class="mu-primary-btn" href="#">Read more <span class="fa fa-long-arrow-right"></span></a>
					</div>
				</div>
			</div>

			<div class="mu-single-slide">
				<img src="{{asset('images/about-us.jpg') }}" alt="slider img">
				<div class="mu-single-slide-content-area d-flex justify-content-center" style="flex-direction: column;">
					<div class="mu-single-slide-content">
						<h1>SLIDER XS SM</h1>
						<p class="py-4" style="font-size: 20px">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
						<a class="mu-primary-btn" href="#">Read more <span class="fa fa-long-arrow-right"></span></a>
					</div>
				</div>
			</div>
		</div>
	</div>

	
	<!-- Start main content -->
	<main>
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-12"></div>
				<div class="col-md-6 col-sm-12">
					<img class="box-shadow-1" src="{{asset('images/img01.jpeg')}}" style="border-radius: 5px">
				</div>
			</div>
		</div>

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

		<!-- Start Services 
		<section id="mu-service">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-service-area">
							<div class="row">
								<div class="col-md-12">
									<div class="mu-title">
										<h2>Nuestros Servicios</h2>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="mu-service-content">
										<div class="row">
											<div class="col-md-4">
												<div class="mu-single-service">
													<div class="mu-single-service-icon" style="background-color: transparent;">
														<img src="{{asset('images/components-card.png')}}">
													</div>
													<div class="mu-single-service-content">
														<h3>Programas</h3>
														<p>Desarrollados a través de la ley de Mecenazgo de la provincia del Chaco. Proyecto en ejecución: La Orquesta en la Escuela.</p>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="mu-single-service">
													<div class="mu-single-service-icon" style="background-color: transparent;">
														<img src="{{asset('images/certificate.png') }}">
													</div>
													<div class="mu-single-service-content">
														<h3>Cursos Homologados</h3>
														<p>Dictamos cursos de formación básica, capacitación continua y especializaciones homologados por la Dirección Nacional de Mediación y Métodos Participativos de Resolución de Conflictos del Ministerio de Justicia y Derechos Humanos de la Nación.</p>
														<div class="d-flex justify-content-center">
															
														<a class="" href="{{asset('docs/cursos-homologados-fime.pdf')}}" target="_blank">Ver listado</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="mu-single-service">
													<div class="mu-single-service-icon" style="background-color: transparent;">
														<img src="{{asset('images/mediacion_neg.png') }}">
													</div>
													<div class="mu-single-service-content">
														<h3>Consultoría a empresas</h3>
														<p>Negociación, Mediación, Conflictos internos (clima laboral), Empresas de Familia, Otros.</p>
													</div>
												</div>
											</div>
											</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		-->
		
		<!-- Start from blog -->
		{{-- <section id="mu-from-blog">
			@include('sitio.includes.recent-posts')
		</section> --}}
		<!-- End from blog -->

		{{-- <section id="social-media my-4 py-4">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="fb-page" 
						     data-href="https://www.facebook.com/fundacioninstituto.demediacionfime/" 
						     data-tabs="timeline" 
						     data-width="500" 
						     data-height="" 
						     data-small-header="false" 
						     data-adapt-container-width="true" 
						     data-hide-cover="false" 
						     data-show-facepile="true">
						     <blockquote cite="https://www.facebook.com/fundacioninstituto.demediacionfime/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/fundacioninstituto.demediacionfime/">Fundación Instituto de Mediación</a></blockquote>
						 </div>
					</div>
					<div class="col-md-6 col-sm-12">
						@php $count = 0 @endphp
						@foreach(\App\Helpers\Helper::getRecentPostInstagram()->data as $post)
							@if ($count == 9) @break @endif
							@php $count++ @endphp
							<a class="group" href="{{$post->link}}"target="_blank"><img src="{{ $post->images->thumbnail->url }}" alt="{{$post->caption->text}}"></a>
						@endforeach
					</div>
				</div>
			</div>
		</section> --}}

		<!-- Call to Action -->
<!-- 		<div id="mu-call-to-action">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-call-to-action-area">
							<div class="mu-call-to-action-left">
								<h2>This is a simple hero unit, a simple jumbotron-style</h2>
								<p>component for calling extra attention to featured content or information.</p>
							</div>
							<a href="#" class="mu-primary-btn mu-quote-btn">Get a Quote <i class="fa fa-long-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div> -->
	</main>
	
	<!-- End main content -->
@stop