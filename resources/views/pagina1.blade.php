<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $titulo }}</title>
    <!-- Carga de Tailwind CSS con Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-950 text-slate-100 font-sans antialiased selection:bg-indigo-500 selection:text-white">

    <div class="feature" style="background: url('/images/luna.webp') center center no-repeat;"></div>
    @include('layouts.header')
    
    {{-- @include('layouts.presentacion')

    @include('layouts.experienciaLaboral')

    @include('layouts.conocimientos')

    @include('layouts.proyectos')

    @include('layouts.logros')

    @include('layouts.pasatiempo')

    @include('layouts.contacto') --}}
    
</body>