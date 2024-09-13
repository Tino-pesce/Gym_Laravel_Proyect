<?php

namespace App\Http\Controllers;
use App\Models\Precio;
use Illuminate\Http\Request;


class PrecioController extends Controller
{
    public function mostrarPrecios() {
        $precios = \App\Models\Precio::all();
        return view('clases-personalizadas', ['precios' => $precios]);
    }
}


?>