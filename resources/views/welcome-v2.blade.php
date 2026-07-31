@extends('layouts.app')

@section('content')

<main>

    {{-- 1. Qué es LujanDev --}}
    @include('pages.welcome-v2._hero')

    {{-- 2. Qué se está construyendo ahora --}}
    @include('pages.welcome-v2._now-building')
    
    {{-- 3. Qué productos existen sobre esa base --}}
    @include('pages.welcome-v2._products')

    {{-- 4. Cómo se llegó hasta aquí --}}
    @include('pages.welcome-v2._build-logs')

    {{-- 5. Por qué existe este enfoque --}}
    @include('pages.welcome-v2._why-lujandev')
    
    {{-- 6. Qué capacidades permiten construirlo --}}
    @include('pages.welcome-v2._designSkills')

    {{-- 7. Quién está detrás --}}
    @include('pages.welcome-v2._founder')

    {{-- Separator --}}
    @include('pages.welcome-v2._separator')

    {{-- 8. CTA final --}}
    @include('pages.welcome-v2._follow')

    {{-- 9. Contacto --}}
    @include('pages.welcome-v2._contact')

</main>

@endsection