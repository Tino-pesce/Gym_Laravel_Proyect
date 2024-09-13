@extends('layout')

@section('content')

<div class="main-wrapper ">
    <section class="page-title bg-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="text-lg text-white mt-2">Clases Personalizadas</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="section pricing">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="section-title">
                        <div class="divider mb-3"></div>
                        <h2>Pack de Precios</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                @foreach($precios as $precio)
                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                        <div class="card rounded-0 px-4 py-5 ">
                            <h3 class="card-title text-capitalize font-weight-normal font-secondary">{{ $precio->nombre }}</h3>
                            <h3 class="text-lg font-secondary position-relative mt-2"><sup class="text-sm position-absolute ">$</sup>{{ $precio->precio }} <sub>por mes</sub></h3>

                            <div class="card-body mt-2">
                                <ul class="list-unstyled lh-35 mb-4">
                                    <li class="text-black font-weight-bold"><i class="ti-check mr-3 text-color "></i>+9 estiramientos</li>
                                    <li class="text-black font-weight-bold"><i class="ti-check mr-3 text-color "></i>Acceso completo al Blog</li>
                                    @if($precio->nombre === 'Gold Pack')
                                        <li class="text-black font-weight-bold"><i class="ti-check mr-3 text-color "></i>Clases Personalizadas</li>
                                        <li class="text-black font-weight-bold"><i class="ti-check mr-3 text-color "></i>Estadísticas</li>
                                    @else
                                        <li><i class="ti-close mr-3"></i>Clases Personalizadas</li>
                                        <li><i class="ti-close mr-3"></i>Estadísticas</li>
                                    @endif
                                </ul>
                                <a href="" class="btn btn-solid-border text-black">Próximamente</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</div>

@endsection
