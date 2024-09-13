<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Estiramientos;

class EstiramientosController extends Controller
{
    public function mostrarEstiramientos()
    {
        $estiramientos = Estiramientos::all();
        return view('estiramientos', ['estiramientos' => $estiramientos]);
    }
}
