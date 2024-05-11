<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaInicialController extends Controller
{
    public function paginaInicial() {
        return view('paginaInicial');
    }

    public function redirect() {
        return redirect()->route('site.index');
    }
}
