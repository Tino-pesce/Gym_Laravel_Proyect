@extends('layout')

@section('content')

<div class="main-wrapper ">
    <section class="page-title bg-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="text-lg text-white mt-2">Sección Estiramientos</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="section course">
        <div class="container">

            <div class="row">

                @foreach ($estiramientos as $i => $estiramiento)
                <div class="col-lg-4 col-md-6">
                    <div class="card rounded-0 p-0 mb-5">
                        <img src="{{ asset('assets/images/gallery/course-' . ($i+1) . '.jpg') }}" alt="" class="img-fluid">
                        <div class="card-body">
                            <a href="/estiramientos-single">
                                <h4 class="mt-3 mb-0">{{ $estiramiento['nombre'] }}</h4>
                            </a>
                            <p class=" mb-2">Descripción: {{ $estiramiento['descripcion'] }}</p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <i class="ti-star mr-2 text-color"></i>Dificultad:
                                </li>
                                <li class="list-inline-item text-black">
                                    <strong>{{ $estiramiento['nivel_dificultad'] }}</strong>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
</div>

@endsection
