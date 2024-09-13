<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;  
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PrecioController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\EstiramientosController;
use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\ContactoController;
use App\Mail\ContactoMail;


// Registro
Route::post('/registro', function (Request $request) {

    $validator = Validator::make($request ->all(), [
        'name'      => 'required|string',
        'email'     => 'required|email|unique:users,email',
        'password'  => 'required|min:8',
    ]);

    if ($validator ->fails() ) {
        return redirect ('/registro') 
                ->withErrors($validator);
    }

    $user = new User;
    $user->name     = $request->input('name');
    $user->email    = $request->input('email');
    $user->password = bcrypt($request->input('password'));
    $user->role     = 'alumno';  
    $user->save();

    return redirect('/iniciar-sesion');
});


// Registro de Administradores
Route::post('/registroAdmin', function (Request $request) {

    $validator = Validator::make($request ->all(), [
        'name'      => 'required|string',
        'email'     => 'required|email|unique:users,email',
        'password'  => 'required|min:8',
    ]);

    if ($validator ->fails() ) {
        return redirect ('/registroAdmin') 
                ->withErrors($validator)
                ->withInput();
    }

    $user = new User;
    $user->name     = $request->input('name');
    $user->email    = $request->input('email');
    $user->password = bcrypt($request->input('password'));
    $user->role     = 'admin';
    $user->save();

    return redirect('/iniciar-sesion');
});


// Iniciar Sesión
Route::post('/iniciar-sesion', function (Request $request) {
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $user = Auth::user();
        return redirect('/');
    }

    $validator = Validator::make($request ->all(), [
        'email'     => 'required|email',
        'password'  => 'required|min:8',
    ]);

    if ($validator ->fails() ) {
        return redirect ('/iniciar-sesion') 
                ->withErrors($validator)
                ->withInput();
    }

    return redirect('/iniciar-sesion');
});


// LOGOUT
Route::post('/cerrar-sesion', [AuthController::class, 'logout'])->name('logout');


// RUTAS
Route::get('/', function () {
    return view('index');
});

Route::get('/estiramientos', function () {
    return view('estiramientos');
});

Route::get('/estiramientos-single', function () {
    return view('estiramientos-single');
});

Route::get('/registro', function () {
    return view('registro');
});

Route::get('/blogs', function () {
    return view('blogs');
});

Route::get('/blog-single', function () {
    return view('blog-single');
});

Route::get('/iniciar-sesion', function () {
    return view('iniciar-sesion');
});

Route::get('/registroAdmin', function () {
    return view('registroAdmin');
});

Route::get('/abm', function () {
    return view('abm');
});

//Rutas ABM
Route::get('/blogs', [AdminBlogController::class, 'index']);
Route::get('/blogs/nuevo', [AdminBlogController::class, 'create']);
Route::post('/blogs', [AdminBlogController::class, 'store']);
Route::get('/blogs/{id}/editar', [AdminBlogController::class, 'edit']);
Route::put('/blogs/{id}', [AdminBlogController::class, 'update']);
Route::delete('/blogs/{id}', [AdminBlogController::class, 'destroy']);

// Conexión con Base de Datos
Route::get('/clases-personalizadas', [PrecioController::class, 'mostrarPrecios']);
Route::get('/blogs', [BlogController::class, 'mostrarBlog']);
Route::get('/abm', [AdminBlogController::class, 'editarAdminBlog']);
Route::get('/estiramientos', [EstiramientosController::class, 
'mostrarEstiramientos']);

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('/contacto', [ContactoController::class, 'mostrarFormulario'])->name('contacto');
Route::post('/contacto/enviar-email', [ContactoController::class, 'enviarMensajeEmail'])->name('enviarMensajeEmail');



?>