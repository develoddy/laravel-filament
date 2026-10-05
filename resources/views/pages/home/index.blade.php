@extends('layouts.app')

@section('content')

<main>

    {{-- 1. Qué es LujanDev --}}
    @include('pages.home.sections.hero')

    {{-- 2. Qué se está construyendo ahora --}}
    @include('pages.home.sections.now-building')

    {{-- 3. Products & experiments --}}
    @include('pages.home.sections.products')

    {{-- 4. Cómo se llegó hasta aquí --}}
    @include('pages.home.sections.build-logs')

    {{-- 5. Por qué existe este enfoque --}}
    @include('pages.home.sections.why-lujandev')

    {{-- 6. Qué capacidades permiten construirlo --}}
    @include('pages.home.sections.design-skills')

    {{-- 7. Quién está detrás --}}
    @include('pages.home.sections.founder')

    {{-- Separator --}}
    @include('pages.home.sections.separator')

    {{-- 8. CTA final --}}
    @include('pages.home.sections.follow')

    {{-- 9. Contacto --}}
    @include('components.contact-section')

</main>

@endsection