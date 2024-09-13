<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactoMail;

class ContactoController extends Controller
{
    public function mostrarFormulario()
    {
        return view('contacto');
    }

    public function enviarMensajeEmail(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'correo' => 'required|email',
            'mensaje' => 'required',
        ]);

        $nombre = $request->input('nombre');
        $correo = $request->input('correo');
        $mensaje = $request->input('mensaje');

        try {
            Mail::to('santino.pesce@davinci.edu.ar')->send(new ContactoMail($nombre, $correo, $mensaje));

            return redirect()->route('correo')->with('success', 'Mensaje enviado correctamente por correo electrónico')->with('email', $correo);
        } catch (\Exception $e) {
            return redirect()->route('contacto')->with('error', 'Error al enviar el mensaje por correo electrónico: ' . $e->getMessage());
        }
    }

    public function mostrarCorreo($correo)
    {
        return view('correo')->with('email', $correo);
    }
}
