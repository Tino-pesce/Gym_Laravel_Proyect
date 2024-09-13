@extends('layout')

@section('content')

<div class="main-wrapper">
    <section class="page-title bg-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="text-lg text-white mt-2">Alta Baja y Modificación</h1>
                </div>
            </div>
        </div>
    </section>

    

    <section class="section">
    <div class="col-lg-12 text-center">
                    <h2 class="text-md mb-5">Administración de Blogs</h2>
                </div>
        <div class="container">
        
            <div class="row">
                <div class="col-lg-12">
                    <a href="/blogs/nuevo" class="btn btn-primary">Nuevo Blog</a>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Creador</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $blog)
                                <tr>
                                    <td>{{ $blog->nombre }}</td>
                                    <td>{{ $blog->descripcion }}</td>
                                    <td>{{ $blog->creador }}</td>
                                    <td>
                                        <a href="/blogs/{{ $blog->id }}/editar" class="btn btn-sm btn-primary">Editar</a>
                                        <form action="/blogs/{{ $blog->id }}" method="post" style="display:inline;">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection
