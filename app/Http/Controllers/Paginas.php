<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Paginas extends Controller
{
    public function Home()
    {
        $titulo = "Mi Portafolio";
        return view('welcome', compact('titulo'));
    }
    public function Pagina1()
    {
        $titulo = "Mi Portafolio";
        return view('pagina1', compact('titulo'));
    }
}
?>