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
                            <h1 class="breadcrumb__title mb-25">Contacto</h1>
                            <p class="mb-15">
                                ¡Hablemos de su visión y de cómo podemos hacerla realidad a través de un desarrollo web completo y personalizado!
                            </p>
                        </div>
                        <div class="breadcrumb__menu">
                            <nav>
                                <ul>
                                    <li><span><a href="">Inicio</a></span></li>
                                    <li><span>Contacto</span></li>
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
    <div class="contact__area section-space">
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
                            <span class="contact-item-subtitle">Ubicación</span>
                            <h5><a target="_blank" href="https://www.google.com/maps">Paseo de la chopera 76, Alcobendas, Madrid</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact__item-wrapper wow fadeIn" data-wow-delay=".5s">
                        <div class="contact__item-icon">
                            <span>
                       <i class="icon-envelope"></i>
                    </span>
                        </div>
                        <div class="contact__item-content">
                            <span class="contact-item-subtitle">Dirección de correo electrónico</span>
                            <h5><a href="mailto:lujandev@lujandev.com">lujandev@lujandev.com</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact__item-wrapper wow fadeIn" data-wow-delay=".7s">
                        <div class="contact__item-icon">
                            <span>
                       <i class="icon-phone"></i>
                    </span>
                        </div>
                        <div class="contact__item-content">
                            <span class="contact-item-subtitle">Número de contacto</span>
                            <h5><a href="tel:+034605974436">+34 605 97 44 36</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area end -->

    <!-- map area start -->
    <div class="bd__map p-relative section-spacing-top fix">
        <div class="bd__google-map">
            {{-- 
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12797.802464900029!2d-83.13319788146339!3d36.68770817009452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x885b172234e50f17%3A0x89b2bd832c241ea9!2sJonesville%2C%20VA%2024263%2C%20USA!5e0!3m2!1sen!2sbd!4v1692792416975!5m2!1sen!2sbd" width="1920" height="580" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}

            {{-- 
            <iframe loading="lazy" title="Paseo de la chopera 76, alcobendas" aria-label="Paseo de la chopera 76, alcobendas" data-src="https://maps.google.com/maps?q=Paseo%20de%20la%20chopera%2076%2C%20alcobendas&amp;t=m&amp;z=12&amp;output=embed&amp;iwloc=near" class=" lazyloaded" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="></iframe>
            --}}
            <iframe src="https://maps.google.com/maps?q=Paseo%20de%20la%20chopera%2076%2C%20alcobendas&amp;t=m&amp;z=12&amp;output=embed&amp;iwloc=near" width="1920" height="580" style="border:0;" allowfullscreen="" loading="lazy" aria-label="Paseo de la chopera 76, alcobendas" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="></iframe>
        </div>
    </div>
    <!-- map area end -->

    <!-- cta area start -->
    <div class="cta__area section-space fix">
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
                                        <span class="section__subtitle bg-field">SUSCRIBIR</span>
                                        <h2 class="section__title mb-30">Manténgase informado con las últimas noticias</h2>
                                        <p class="contentHidden">contentHidden</p>
                                    </div>
                                </div>
                            </div>
                            <div class="cta__form">
                                <form action="#">
                                    <div class="cta__input">
                                        <input type="text" placeholder="Ingrese su correo electrónico">
                                        <a href="{{ route('contact') }}" class="bd-btn is-bg-gradient">Aplique ahora</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cta area end -->

</main>
<!-- Body main wrapper end -->
@endsection