@extends('layout')

@section('content')

<div class="main-wrapper ">

<section class="slider">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<span class="h6 d-inline-block mb-4 subhead text-uppercase">Aplicacion de Estiramientos</span>
				<h1 class="text-uppercase text-white mb-5">empieza a <span class="text-color">mejorar </span><br>tu postura</h1>
			
				<a href="/estiramientos" target="_blank" class="btn btn-main " >Ver Clases<i class="ti-angle-right ml-3"></i></a>
			</div>
		</div>
	</div>
</section>


<section class="mt-80px">
	<div class="container">
		<div class="row ">
			<div class="col-lg-4 col-md-6">
				<div class="card p-5 border-0 rounded-top border-bottom position-relative hover-style-1">
					<span class="number">01</span>
					<h3 class="mt-3">Menos Estrés</h3>
					<p class="mt-3 mb-4">Esta comprobado que estirarnos reduce la posibilidad de padecer estrés.</p>
					<a href="/blogs" class="text-color text-uppercase font-size-13 letter-spacing font-weight-bold"><i class="ti-minus mr-2 "></i>Ver Mas</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="card p-5 border-0 rounded-top hover-style-1">
					<span class="number">02</span>
					<h3 class="mt-3">Más salud</h3>
					<p class="mt-3 mb-4">Una buena postura nos ayuda a evitar dolores, lesiones y otros problemas de salud.</p>
					<a href="/blogs" class="text-color text-uppercase font-size-13 letter-spacing font-weight-bold"><i class="ti-minus mr-2 "></i>Ver mas</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="card p-5 border-0 rounded-top hover-style-1">
					<span class="number">03</span>
					<h3 class="mt-3">Libera la mente</h3>
					<p class="mt-3 mb-4">Contenido simple y accesible. Puedes sentir los beneficios con solo unos minutos al día.</p>
					<a href="/blogs" class="text-color text-uppercase font-size-13 letter-spacing font-weight-bold"><i class="ti-minus mr-2 "></i>Ver mas</a>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="section about">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<img src="{{asset('assets/images/bg/bg-5.jpg')}}" alt="" class="img-fluid rounded shadow w-100">
			</div>
			
			<div class="col-lg-6">
				<div class="pl-3 mt-5 mt-lg-0">
					<h2 class="mt-1 mb-3">Eleva la recuperación de tus musculos <span class="text-color">+ videos de movilidad diaria.</span></h2>

					<p class="mb-4">PosturApp facilita un mejor movimiento, un mayor rendimiento y una mayor longevidad a través de clases personalizadas y videos guiados.</p>

					<a href="/clases-personalizadas" class="btn btn-main">Mas Información<i class="fa fa-angle-right ml-2"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="section cta">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 col-md-12 col-sm-12">
				<div class="text-center">
					<span class="h6 letter-spacing text-white">Descubri tu potencial</span>
					<h2 class="text-lg mt-4 mb-5 text-white">
						Desbloquea  <span class="text-color">todos los estiramientos</span>
					</h2>

					<a href="/clases-personalizadas" class="btn btn-main text-white">Unite hoy</a>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="section services ">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 text-center">
				<div class="section-title">
					<div class="divider mb-3"></div>
					<h2>Beneficios de la app</h2>
					<p>Ofrecemos más de 5 ejercicios grabados, ideal para cada parte del cuerpo.</p>
				</div>
			</div>
		</div>

		<div class="row no-gutters">
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="text-center  px-4 py-5 hover-style-1">
					<i class="icofont-gym-alt-2 text-lg text-color"></i>
					<h4 class="mt-3 mb-4 text-uppercase">Mayor conciencia del cuerpo</h4>
					<p>Estirar el cuerpo de manera continua nos permite aprovechar el presente.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="text-center  px-4 py-5 hover-style-1">
					<i class="icofont-cycling-alt text-lg text-color"></i>
					<h4 class="mt-3 mb-4 text-uppercase">Crea una rutina</h4>
					<p>Crea una rutina de estiramiento que se ajuste a tu estilo de vida junto a nosotros.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="text-center  px-4 py-5 hover-style-1">
					<i class="icofont-video text-lg text-color"></i>
					<h4 class="mt-3 mb-4 text-uppercase">Instrucciones Detalladas</h4>
					<p>Entrenamientos en video sobre cómo hacer el movimiento y sus beneficios.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="text-center  px-4 py-5 hover-style-1">
					<i class="icofont-muscle text-lg text-color"></i>
					<h4 class="mt-3 mb-4 text-uppercase">Enfocada en categorías</h4>
					<p>Encontrá la zona que buscas estirar a partir de nuestras selecciones.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="text-center  px-4 py-5 hover-style-1">
					<i class="icofont-dumbbell text-lg text-color"></i>
					<h4 class="mt-3 mb-4 text-uppercase">Cuerpo y Mente</h4>
					<p>Gracias a nuestros estiramientos podrás descansar tu mente y relajar tu cuerpo.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="text-center  px-4 py-5 hover-style-1">
					<i class="icofont-gym text-lg text-color"></i>
					<h4 class="mt-3 mb-4 text-uppercase">Guía de apoyo</h4>
					<p>En el apartado de estiramientos podrá acceder a clases grabadas que lo ayudaran.</p>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="gallery">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 text-center">
				<div class="section-title">
					<div class="divider mb-3"></div>
					<h2>Nuestra Galería</h2>
					<p>Empeza a mejorar tu calidad de vida junto a nosotros.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid p-0">
		<div class="row no-gutters portfolio-gallery">

		@for( $i = 1; $i <= 8; $i++)

		<div class="col-lg-3 col-md-6 col-sm-6">
				<a href="./assets/images/gallery/gallery-{{ $i }}.jpg" class="popup-gallery">
					<img src="./assets/images/gallery/gallery-{{ $i }}.jpg" alt="" class="img-fluid">
				</a>
			</div>

		@endfor
		
		</div>
	</div>
</section>		



<section class="section textimonial position-relative bg-3">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="row justify-content-center">
					<div class="col-lg-12 text-center">
						<div class="section-title">
							<div class="divider mb-3"></div>
							<h2 class="text-white">Opinion de los usuarios</h2>
						</div>
					</div>
				</div>

				<div class="testimonial-slider">
					<div class="text-center mb-4 ">
						<i class="ti-unlock text-lg text-color"></i>
						<h3 class="mt-4 text-white letter-spacing">Mejoré mi rutina rápidamente</h3>
						<p class="my-4 text-white-50">Con los estiramientos de la app conseguí sentirme mejor conmigo mismo y ser más feliz. Hoy en día la sigo utilizando en conjunto a mis clases personalizadas con el profesor Leonela.</p>

						<div>
							<h4 class="mb-0 text-capitalize text-white font-weight-normal">John Donas</h4>
							<span class="text-white-50">Alumno PosturApp</span>
						</div>
					</div>
					<div class="text-center mb-4">
						<i class="ti-stats-up text-lg text-color"></i>
						<h3 class="mt-4 text-white letter-spacing">Amo este programa</h3>
						<p class="my-4 text-white-50">Tengo 50 años y agregar esta aplicación a mi vida me ha ayudado a mejorar físicamente. Me es muy fácil seguir los ejercicios a través de mi celular.</p>
						<div>
							<h4 class="mb-0 text-capitalize text-white font-weight-normal">Bautista Lopez</h4>
							<span class="text-white-50">Usuario</span>
						</div>
					</div>

					<div class="text-center mb-4">
						<i class="ti-pulse text-lg text-color"></i>
						<h3 class="mt-4 text-white letter-spacing">Una aplicación muy profesional</h3>
						<p class="my-4 text-white-50">La flexibilidad me facilita un mejor movimiento, un mayor rendimiento y una mayor longevidad, ¡gracias PosturApp!</p>
						<div>
							<h4 class="mb-0 text-capitalize text-white font-weight-normal" >Miguel Stussy</h4>
							<span class="text-white-50">Alumno</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="section course bg-gray">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 text-center">
				<div class="section-title">
					<div class="divider mb-3"></div>
					<h2>Estiramientos Populares</h2>
					<p>Este es nuestro top 4 de ejercicios más vistos por la comunidad.</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-3 col-md-6">
				<div class="card border-0 rounded-0 p-0 mb-5 mb-lg-0 shadow-sm">
					<img src="{{asset('assets/images/gallery/course-1.jpg')}}" alt="" class="img-fluid">

					<div class="card-body">
						<a href="/estiramientos"><h4 class="font-secondary mb-0">Espalda Baja</h4></a>
						<p class=" mb-2">Mentor: José Karter</p>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-md-6">
				<div class="card border-0 rounded-0 p-0 mb-5 mb-lg-0 shadow-sm">
					<img src="{{asset('assets/images/gallery/course-2.jpg')}}" alt="" class="img-fluid">

					<div class="card-body">
						<a href="/estiramientos"><h4 class="font-secondary mb-0">Hombros</h4></a>
						<p class="mb-2">Mentor: Tomás Vasquez</p>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-md-6">
				<div class="card border-0 rounded-0 p-0 mb-5 mb-lg-0 shadow-sm">
					<img src="{{asset('assets/images/gallery/course-3.jpg')}}" alt="" class="img-fluid">

					<div class="card-body">
						<a href="/estiramientos"><h4 class="font-secondary mb-0">Cuadriceps</h4></a>
						<p class=" mb-2">Mentor: Leonela Paredes</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="card border-0 rounded-0 p-0 mb-5 mb-lg-0 shadow-sm">
					<img src="{{asset('assets/images/gallery/course-4.jpg')}}" alt="" class="img-fluid">

					<div class="card-body">
						<a href="/estiramientos"><h4 class="font-secondary mb-0">Triceps</h4></a>
						<p class=" mb-2">Mentor: Tomás Vasquez</p>
					</div>
				</div>
			</div>

		</div>
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="mt-5 text-center">
					<a href="/estiramientos" class="btn btn-main">Ver Mas Estiramientos</a>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection