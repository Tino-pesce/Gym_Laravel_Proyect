@extends('layout')

@section('content')

<div class="main-wrapper">
    <section class="page-title bg-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="text-lg text-white mt-2">Editar Blog</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <form action="/blogs/{{ $blog->id }}" method="post">
    @csrf
    @method('put')

    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" value="{{ $blog->nombre }}" required>

    <label for="descripcion">Descripción:</label>
    <textarea id="descripcion" name="descripcion" required>{{ $blog->descripcion }}</textarea>

    <label for="creador">Creador:</label>
    <input type="text" id="creador" name="creador" value="{{ $blog->creador }}" required>

    <button type="submit">Guardar Cambios</button>
</form>

                </div>
            </div>
        </div>
    </section>
</div>

@endsection
