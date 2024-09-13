@extends('layout')

@section('content')

<div class="main-wrapper ">
<section class="page-title bg-2">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
           <h1 class="text-lg text-white mt-2">Panel de usuario</h1>
      </div>
    </div>
  </div>
</section>

<section class="contact-form section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <div class="section-title">
          <div class="divider mb-3"></div>
          <h2>Iniciar Sesion</h2>
          <p class="mt-3">Si todavía no tenes tu cuenta creada podes hacerlo en nuestra página de <a href="/registro">Registro</a>.</p>
        </div>
      </div>
    </div>

    <div class="row justify-content-center pb-5">
      <div class="col-lg-9 text-center">



        <form id="contact-form" action="/iniciar-sesion" method="post">
		    @csrf

            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="form-group">
                <input name="email" type="email" class="form-control" placeholder="Escribe tu Email" value="{{ old('email') }}">
                <p class="text-danger">{{ $errors->first('email') }}</p>
              </div>
            </div>


            <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="form-group">
                <input name="password" type="password" class="form-control" placeholder="Escribe tu Contraseña">
                <p class="text-danger">{{ $errors->first('password') }}</p>
              </div>  
            </div>
            

            </div>

            <div class="col-lg-12 col-md-12 col-sm-12">

              <div class="text-center">
                <button class="btn btn-main mt-3 " type="submit">Entrar</button>
              </div>

            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  
</section>

@endsection