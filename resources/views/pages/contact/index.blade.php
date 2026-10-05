@extends('layouts.app')

@section('content')
<!-- Body main wrapper start -->
 <main>

    @include('pages.contact.sections.breadcrumb')

    <!-- map area start -->
    {{-- <iframe src="https://maps.google.com/maps?q=Paseo%20de%20la%20chopera%2076%2C%20alcobendas&amp;t=m&amp;z=12&amp;output=embed&amp;iwloc=near" width="1920" height="580" style="border:0;" allowfullscreen="" loading="lazy" aria-label="Paseo de la chopera 76, alcobendas" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="></iframe> --}}
    <!-- map area end -->

    {{-- Reutilizamos el mismo formulario protegido de la Home --}}
    @include('components.contact-section')

</main>
<!-- Body main wrapper end -->
@endsection