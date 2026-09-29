@extends('layouts.app')

@section('content')
<!-- Body main wrapper start -->
 <main>

    <!-- breadcrumb area  start -->
    <section class="breadcrumb__area p-relative style-two is-breadcrumb-space">
        <div class="breadcrumb__thumb-bg include-bg bg__thumb-position" data-background="{{ Vite::asset('resources/imgs/breadcrumb/breadcrumb-bg-06.png') }}"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-7 col-xl-7 col-lg-8">
                    <div class="breadcrumb__content-wrapper p-relative z-index-1 text-center">
                        <div class="breadcrumb__title-wrapperr">
                            <h1 class="breadcrumb__title mb-25">Let's Connect</h1>
                            <p class="mb-15">
                                Have feedback on something I'm building?
                                Want to talk products, experiments or ideas? Say hi.
                            </p>
                        </div>
                        <div class="breadcrumb__menu">
                            <nav>
                                <ul>
                                    <li><span><a href="{{ route('welcome') }}">Home</a></span></li>
                                    <li><span>Contact</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area  end -->

    <!-- contact area start -->
    {{-- <div class="contact__area section-space">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact__item-wrapper wow fadeIn" data-wow-delay=".3s">
                        <div class="contact__item-icon">
                            <span>
                       <i class="icon-location"></i>
                    </span>
                        </div>
                        <div class="contact__item-content">
                            <span class="contact-item-subtitle">Location</span>
                            <h5><a target="_blank" href="https://www.google.com/maps">Madrid, Spain</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact__item-wrapper wow fadeIn" data-wow-delay=".5s">
                        <div class="contact__item-icon">
                            <span>
                       <i class="icon-envelope"></i>
                    </span>
                        </div>
                        <div class="contact__item-content">
                            <span class="contact-item-subtitle">Email Address</span>
                            <h5><a href="mailto:lujandev@lujandev.com">lujandev@lujandev.com</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- contact area end -->

    
    <!-- map area start -->
    {{-- <iframe src="https://maps.google.com/maps?q=Paseo%20de%20la%20chopera%2076%2C%20alcobendas&amp;t=m&amp;z=12&amp;output=embed&amp;iwloc=near" width="1920" height="580" style="border:0;" allowfullscreen="" loading="lazy" aria-label="Paseo de la chopera 76, alcobendas" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="></iframe> --}}
    <!-- map area end -->

    <!-- cta area start -->
    {{-- <div class="cta__area section-space fix">
        <div class="container">
            <div class="cta__wrapper cta__item is-sec-space">
                <div class="cta__bg"></div>
                <div class="cta__shape-wrap d-none d-md-block ">
                    <div class="cta__shape-one scene">
                        <img class="layer" data-depth="5" src="{{ Vite::asset('resources/imgs/shape/circle-shape-02.png') }}" alt="image">
                    </div>
                    <div class="cta__shape-two scene">
                        <img class="layer" data-depth="6" src="{{ Vite::asset('resources/imgs/shape/circle-shape-03.png') }}" alt="image">
                    </div>
                    <div class="cta__shape-three scene">
                        <img class="layer" data-depth="7" src="{{ Vite::asset('resources/imgs/shape/circle-shape-03.png') }}" alt="image">
                    </div>
                    <div class="cta__shape-four scene">
                        <img class="layer" data-depth="8" src="{{ Vite::asset('resources/imgs/shape/circle-shape-02.png') }}" alt="image">
                    </div>
                    <div class="cta__shape-five scene">
                        <img class="layer" data-depth="9" src="{{ Vite::asset('resources/imgs/shape/circle-shape-03.png') }}" alt="image">
                    </div>
                </div>
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-md-10">
                        <div class="cta__content-wrap">
                            <div class="cta__content">
                                <div class="section__title-wrapper text-center ">
                                    <div class="section__title-wrapper text-center">
                                        <span class="section__subtitle bg-field">STAY UPDATED 🚀</span>
                                        <h2 class="section__title mb-30">Join My Indie Hacker Journey</h2>
                                        <p class="contentHidden">contentHidden</p>
                                    </div>
                                </div>
                            </div>
                            <div class="cta__form">
                                <form action="#">
                                    <div class="cta__input">
                                        <input type="text" placeholder="Enter your email">
                                        <a href="{{ route('contact') }}" class="bd-btn is-bg-gradient">Subscribe Now</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- cta area end -->

    {{-- Reutilizamos el mismo formulario protegido de la Home --}}
    @include('pages.welcome-v2._contact')

</main>
<!-- Body main wrapper end -->
@endsection