@extends('layout')

@section('content')

<div class="main-wrapper">
    <section class="page-title bg-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="text-lg text-white mt-2">Sección Blog</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="section blog bg-gray">
        <div class="container">
            <div class="row">

                @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-6">
                        <article class="card border-0 rounded-0 mb-4">
                            <img src="{{ asset('assets/images/gallery/course-' . $loop->iteration . '.jpg') }}" alt="" class="img-fluid">
                            <div class="mt-3 px-4 py-3">
                                <div class="blog-post-meta text-capitalize mb-2">
                                    <span class="post-meta date-meta mr-2">
                                        <i class="ti-calendar mr-2"></i>{{ $blog->created_at }}
                                    </span>
                                    <span class="post-meta author">
                                        <i class="ti-user mr-2 text-muted"></i>{{ $blog->creador }}
                                    </span>
                                </div>
                                <a href="#">
                                    <h4 class="mb-3 font-secondary">{{ $blog->nombre }}</h4>
                                </a>
                                <p class="mb-4">{{ $blog->descripcion }}</p>

                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>

@endsection
