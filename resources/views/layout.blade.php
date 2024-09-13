<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>PosturApp | Clases Personalizadas</title>

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">

  <!-- Icofont Css -->
  <link rel="stylesheet" href="{{asset('assets/plugins/icofont/icofont.min.css')}}">

  <!-- Themify Css -->
  <link rel="stylesheet" href="{{asset('assets/plugins/themify/css/themify-icons.css')}}">
  
  <!-- animate.css -->
  <link rel="stylesheet" href="{{asset('assets/plugins/animate-css/animate.css')}}">
    
  <!-- Magnify Popup -->
  <link rel="stylesheet" href="{{asset('assets/plugins/magnific-popup/dist/magnific-popup.css')}}">

  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="{{asset('assets/plugins/slick-carousel/slick/slick.css')}}">
  <link rel="stylesheet" href="{{asset('assets/plugins/slick-carousel/slick/slick-theme.css')}}">
  
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
    
<nav class="navbar navbar-expand-lg navigation fixed-top" id="navbar">
	<div class="container-fluid">
		<a class="navbar-brand" href="/">
			<h2 class="text-white text-capitalize">Postur<span class="text-primary">App</span></h2>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsid"
			aria-controls="navbarsid" aria-expanded="false" aria-label="Toggle navigation">
			<span class="ti-view-list"></span>
		</button>
		<div class="collapse text-center navbar-collapse" id="navbarsid">
			<ul class="navbar-nav mx-auto">
				<li class="nav-item"><a class="nav-link" href="/">Inicio</a></li>
				<li class="nav-item"><a class="nav-link" href="/estiramientos">Estiramientos</a></li>
				<li class="nav-item"><a class="nav-link" href="/blogs">Blog</a></li>
				<li class="nav-item"><a class="nav-link" href="/clases-personalizadas">Clases Personalizadas</a></li>
				<li class="nav-item"><a class="nav-link" href="/contacto">Contacto</a></li>

		@if (Auth::check() && Auth::user()->role === 'admin')
			<li class="nav-item"><a class="nav-link" href="/abm">ABM</a></li>
		@endif

			</ul>
					<div class="my-md-0 ml-lg-4 mt-4 mt-lg-0 ml-auto text-lg-right mb-3 mb-lg-0">
			@if (Auth::check())
				<form action="/cerrar-sesion" method="POST">
					@csrf
					<button type="submit" class="btn btn-link text-primary mb-0">
						<h3 class="text-primary mb-0">
							<i class="ti-arrow-circle-right mx-3"></i>
							Cerrar Sesión
						</h3>
					</button>
				</form>
			@else
				<h3>
					<a href="/iniciar-sesion" class="text-primary mb-0">
						<i class="ti-arrow-circle-right mx-3"></i>Iniciar Sesión
					</a>
				</h3>
			@endif
		</div>



		</div>
	</div>
</nav>



@yield('content')




<footer class="footer bg-black-50">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
				<h2 class="text-white mb-4">PosturApp</h2>
				<p>Fusionamos movilidad, yoga, rehabilitación, recuperación, atención plena y fuerza. </p>

				<p>Elevamos el rendimiento en la vida y en el deporte. Sea cual sea tu situación, perfeccionala con PosturApp.</p>
			</div>
			

			<div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
				<div class="footer-widget recent-blog">
					<h4 class="mb-4 text-white letter-spacing text-uppercase">Posts Recientes</h4>
					<div>
						<a href="#"class="text-white">Estiramiento: Espalda Baja</a>
						<p class="text-sm mt-2 text-white-50">30 septiembre 2023</p>
					</div>
					<div class="mt-4">
						<a href="#"class="text-white">Estiramiento: Dorsales</a>
						<p class="text-sm mt-2 text-white-50">03 octubre 2023</p>
					</div>

				</div>
			</div>
			<div class="col-lg-2 col-md-5 mb-5 mb-lg-0">
				<div class="footer-widget">
					<h4 class="mb-4 text-white letter-spacing text-uppercase">Navegacion</h4>
					<ul class="list-unstyled footer-menu lh-40 mb-0">
						<li><a href="/"><i class="ti-angle-double-right mr-2"></i>Inicio</a></li>
						<li><a href="/estiramientos"><i class="ti-angle-double-right mr-2"></i>Estiramientos</a></li>
						<li><a href="/blog"><i class="ti-angle-double-right mr-2"></i>Blog</a></li>
						<li><a href="/clases-personalizadas"><i class="ti-angle-double-right mr-2"></i>Clases</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-5">
				<div class="footer-widget">
					<h4 class="mb-4 text-white letter-spacing text-uppercase">Contactanos</h4>
					<p>Rellena nuestro formulario de contacto para conocernos. </p>
					<span class="text-white">(+54-11) 5032-0076</span>
					<span class="text-white">info@posturapp.com</span>
				</div>
			</div>
		</div>

		<div class="row align-items-center mt-5 px-3 bg-black mx-1">
			<div class="col-lg-6">
				<p class="text-white mt-3">Portales y Comercio Electrónico © 2023</p>
			</div>
			<div class="col-lg-6">
				<p class="text-white mt-3">Buccieri Franco - Pesce Santino - Vommaro Nicolas</p>
			</div>
			
		</div>
	</div>
</footer>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

   <!-- Main jQuery -->
   <script src="{{asset('assets/plugins/jquery/jquery.js')}}"></script>

   <!-- Bootstrap 4.3.1 -->
   <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

   <!-- Slick Slider -->
   <script src="{{asset('assets/plugins/slick-carousel/slick/slick.min.js')}}"></script>

   <!--  Magnific Popup-->
   <script src="{{asset('assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>

   <!-- Form Validator -->
   <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
   

   <script src="{{asset('assets/js/script.js')}}"></script>
</body>
</html>