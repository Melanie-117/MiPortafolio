<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Paginas;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [Paginas::class, "Home"]) ->name('home');
Route::get('/Pagina1', [Paginas::class, "Pagina1"]) ->name('certificaciones');