<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ Vite::asset('resources/images/favicon.ico') }}" />

        <!-- Fonts (opcional) -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Incluir estilos y scripts compilados con Vite -->
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        {{-- Aquí puedes incluir tu header o navegación --}}
        @include('partials.navigation')

        
        {{-- Contenido de la página --}}
        @yield('content')
       

        {{-- Aquí puedes incluir tu footer --}}
        @include('partials.footer')
    </body>
</html>
