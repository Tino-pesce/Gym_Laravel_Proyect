@extends('layouts')

@section('content')
    <div class="container">
        <h1>Mensaje enviado correctamente</h1>
        <p>Tu mensaje se ha enviado correctamente por correo electrónico a la dirección: {{ $email }}</p>
        <p>Si deseas enviar otro mensaje, puedes hacerlo haciendo clic en el siguiente enlace:</p>
        <a href="mailto:{{ $email }}">Enviar otro mensaje</a>
    </div>
@endsection
