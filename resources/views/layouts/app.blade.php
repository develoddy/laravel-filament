<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'LujanDev') }}</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ Vite::asset('resources/imgs/favicon.png') }}" />

        <!-- Fonts (opcional) -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Incluir estilos y scripts compilados con Vite -->
        {{-- @vite(['resources/js/app.js']) --}}
        @vite([
            'resources/css/styles.css',
            'resources/scss/app.scss',
            'resources/js/app.js',
        ])
    </head>
    <body>

        <!-- Preloader start -->
        <div id="preloader">
            <div class="sk-three-bounce">
                <div class="sk-child sk-bounce1"></div>
                <div class="sk-child sk-bounce2"></div>
                <div class="sk-child sk-bounce3"></div>
            </div>
        </div>
        <!-- Preloader start -->

        <!-- Backtotop start -->
        <div class="backtotop-wrap cursor-pointer">
            <svg class="backtotop-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        <!-- Backtotop end -->

        <!-- Offcanvas area start -->
        <div class="fix">
            <div class="offcanvas__area">
                <div class="offcanvas__wrapper">
                    <div class="offcanvas__content">
                        <div class="offcanvas__top d-flex justify-content-between align-items-center">
                            <div class="offcanvas__logo">
                                <a href="{{ route('home') }}">
                                    <img src="{{ Vite::asset('resources/imgs/logo/logo-white-v2.png') }}" alt="LujanDev | One platform. Multiple products." title="LujanDev | One platform. Multiple products.">
                                </a>
                            </div>
                            <div class="offcanvas__close">
                                <button class="offcanvas-close-icon animation--flip">
                                    <span class="offcanvas-m-lines">
                            <span class="offcanvas-m-line line--1"></span><span class="offcanvas-m-line line--2"></span><span class="offcanvas-m-line line--3"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="mobile-menu fix"></div>
                        <div class="offcanvas__social">
                            <h4 class="offcanvas__title mb-20">Subscribe & Follow</h4>
                            <div class="theme__social">
                                <a href="https://x.com/lujandev/"><i class="icon-twiter"></i></a>
                                <a href="https://www.instagram.com/lujandev/"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas__overlay"></div>
        <div class="offcanvas__overlay-white"></div>
        <!-- Offcanvas area end-->

        {{-- Navegación --}}
        @include('layouts.partials.navigation')
        
        {{-- Contenido de la página --}}
        @yield('content')
       
        {{-- Footer --}}
        @include('layouts.partials.footer')

        {{-- Cookie Consent --}}
        @include('components.cookie-consent')
    </body>
</html>
