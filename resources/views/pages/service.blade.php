@extends('layouts.app')

@section('content')
    <!-- Body main wrapper start -->
    <main>
        <!-- breadcrumb area  start -->
        <section class="breadcrumb__area p-relative style-two is-breadcrumb-space">
            <div class="breadcrumb__thumb-bg include-bg bg__thumb-position" data-background="{{ Vite::asset('resources/imgs/breadcrumb/breadcrumb-bg-07.png') }}"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-9">
                        <div class="breadcrumb__content-wrapper p-relative z-index-1">
                            <div class="breadcrumb__title-wrapper text-center">
                                <h1 class="breadcrumb__title mb-25">Servicios</h1>
                                <p class="mb-15">
                                    ¡Hablemos de su visión y de cómo podemos hacerla realidad a través de un desarrollo web completo y personalizado!
                                </p>
                            </div>
                            <div class="breadcrumb__menu text-center">
                                <nav>
                                    <ul>
                                        <li><span><a href="">Inicio</a></span></li>
                                        {{-- <li><span><a href="services.html">Servicio</a></span></li> --}}
                                        <li><span>Servicio</span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area  end -->

        <!-- service area start -->
        <section class="bd-service__area section-space">
            <div class="container">
                <div class="row g-5">
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s"
                        data-wow-duration="1s">
                        <div class="service__wrapper service__item style-three bordered-style text-center">
                            <div class="contentHidden"></div>
                            <div class="contentHidden"></div>
                            <span class="service__icon-wrap">
                                <i class="icon-design"></i>
                            </span>
                            <div class="service__content">
                                <h5 class="service__title"><a href="service-details.html">Web Design</a></h5>
                                <p>Develop detailed case studies for a few key projects.</p>
                                <div class="service__more">
                                    <a class="contentHidden" href="service-details.html">contentHidden <span><i
                                                class="fa-sharp fa-light fa-arrow-right"></i></span></a>
                                    <a class="circle-btn is-hover" href="service-details.html"> <span class="icon__box"><i
                                                class="fa-regular fa-arrow-right-long"> </i></span></a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s"
                        data-wow-duration="1s">
                        <div class="service__wrapper service__item style-three bordered-style text-center">
                            <div class="contentHidden"></div>
                            <div class="contentHidden"></div>
                            <span class="service__icon-wrap">
                                <i class="icon-game"></i>
                            </span>
                            <div class="service__content">
                                <h5 class="service__title"><a href="service-details.html">Game Development</a></h5>
                                <p>Share design documents, a storyboards, or game.</p>
                                <div class="service__more">
                                    <a class="contentHidden" href="service-details.html">contentHidden <span><i
                                                class="fa-sharp fa-light fa-arrow-right"></i></span></a>
                                    <a class="circle-btn is-hover" href="service-details.html"> <span class="icon__box"><i
                                                class="fa-regular fa-arrow-right-long"> </i></span></a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s"
                        data-wow-duration="1s">
                        <div class="service__wrapper service__item style-three bordered-style text-center">
                            <div class="contentHidden"></div>
                            <div class="contentHidden"></div>
                            <span class="service__icon-wrap">
                                <i class="icon-ux-design"></i>
                            </span>
                            <div class="service__content">
                                <h5 class="service__title"><a href="service-details.html">UX/UI Design</a></h5>
                                <p>Start with a brief introduction about your a yourself.</p>
                                <div class="service__more">
                                    <a class="contentHidden" href="service-details.html">contentHidden <span><i
                                                class="fa-sharp fa-light fa-arrow-right"></i></span></a>
                                    <a class="circle-btn is-hover" href="service-details.html"> <span class="icon__box"><i
                                                class="fa-regular fa-arrow-right-long"> </i></span></a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".9s"
                        data-wow-duration="1s">
                        <div class="service__wrapper service__item style-three bordered-style text-center">
                            <div class="contentHidden"></div>
                            <div class="contentHidden"></div>
                            <span class="service__icon-wrap">
                                <i class="icon-project"></i>
                            </span>
                            <div class="service__content">
                                <h5 class="service__title"><a href="service-details.html">Project Design</a></h5>
                                <p>Showcase your design from process, initial concept.</p>
                                <div class="service__more">
                                    <a class="contentHidden" href="service-details.html">contentHidden <span><i
                                                class="fa-sharp fa-light fa-arrow-right"></i></span></a>
                                    <a class="circle-btn is-hover" href="service-details.html"> <span class="icon__box"><i
                                                class="fa-regular fa-arrow-right-long"> </i></span></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- service area end -->

        <!-- about area start -->
        <section class="bd-about__area section-space theme-bg-secondary p-relative">
            <div class="about__shape">
                <img class="about__shape-two" src="{{ Vite::asset('resources/imgs/shape/lamp-shape.png') }}" alt="image not found">
            </div>
            <div class="container">
                <div class="row g-5">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="about__thumb-wrapper style-four wow fadeInLeft" data-wow-delay=".3s">
                            <div class="about__thumb">
                                <img src="{{ Vite::asset('resources/imgs/about/about-04.png') }}" alt="image not found">
                                <div class="about__shape">
                                    <img class="about__shape-one" src="{{ Vite::asset('resources/imgs/shape/dot-small.png') }}"
                                        alt="image not found">
                                </div>
                                <div class="about__counter-wrapper">
                                    <div class="about__counter-info">
                                        <div class="about__counter-count">
                                            <h2><span class="counter">5</span>+</h2>
                                        </div>
                                        <p>Años de experiencia</p>
                                    </div>
                                    <div class="about__counter-info d-none">
                                        <div class="about__counter-count">
                                            <h2><span class="counter">500</span>+</h2>
                                        </div>
                                        <p>Clientes estratificadas</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="about__content style-four  wow fadeInRight" data-wow-delay=".3s">
                            <div class="section__title-wrapper mb-25">
                                <div class="section__title-wrapper">
                                    <span class="section__subtitle sec-border">Quien soy</span>
                                    <h2 class="section__title">Desarrollo web que convierte ideas en realidad digital</h2>
                                    <p class="contentHidden">contentHiddenText</p>
                                </div>
                            </div>
                            <p>
                                Colaboro diariamente con un destacado profesional del sector, un experto en desarrollo de aplicaciones para páginas web, backend y diseño gráfico. 
                                Después de años de trabajo conjunto, somos el equipo perfecto para hacer realidad tu idea digital.
                            </p>
                            <div class="about__info-list">
                                <div class="about__info-item">
                                    <div class="about__info-icon">
                                        <span><i class="icon-partner"></i></span>
                                    </div>
                                    <div class="about__info-content">
                                        <h5>Confiable</h5>
                                        <p>Un servicio en el que puedes confiar plenamente.</p>
                                    </div>
                                </div>
                                <div class="about__info-item">
                                    <div class="about__info-icon">
                                        <span><i class="icon-grow"></i></span>
                                    </div>
                                    <div class="about__info-content">
                                        <h5>Mejora</h5>
                                        <p>Tu camino hacia el crecimiento y la mejora continua.</p>
                                    </div>
                                </div>
                                <div class="about__info-item">
                                    <div class="about__info-icon">
                                        <span><i class="icon-strategy"></i></span>
                                    </div>
                                    <div class="about__info-content">
                                        <h5>Estrategia</h5>
                                        <p>Planificación estratégica para el éxito.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="about__btn">
                                <a class="bd-btn is-btn-anim bordered-blue" href="">
                                    <span class="bd-btn-inner">
                                        <span class="bd-btn-normal">Saber más</span>
                                        <span class="bd-btn-hover">Saber más</span>
                                        <i class="contentHidden"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about area end -->

        <!-- portfolio area start -->
        <section class="bd-portfolio__area section-space fix">
            <div class="container">
                <div class="row g-5 align-items-end  section__title-space">
                    <div class="col-xl-5 col-lg-5 col-md-6">
                        <div class="section__title-wrapper">
                            <span class="section__subtitle sec-border">QUE HE HECHO</span>
                            <h2 class="section__title">Últimos proyectos</h2>
                            <p class="contentHidden">For each project in the portfolio, provide detailed descriptions that cover latest work.</p>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-6">
                        <div class="portfolio__more text-md-end">
                            <a class="bd-btn is-btn-anim" href="">
                                <span class="bd-btn-inner">
                                    <span class="bd-btn-normal">Ver todo el proyecto</span>
                                    <span class="bd-btn-hover">Ver todo el proyecto</span>
                                    <i class="contentHidden"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio__wrapper style-six wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                    <div class="swiper portfolio__active">
                        <div class="swiper-wrapper">

                            @foreach ($projectPortfolios as $portfolio)
                                <div class="swiper-slide">
                                    <div class=" portfolio__item style-six">
                                        <div class="portfolio__item-thumb" data-background="{{ asset('storage/' . $portfolio->imagen) }}">
                                            <div class="portfolio__item-btn">
                                                <a href="{{ route('portfolio.show', ['portfolio' => $portfolio->slug]) }}" class="circle-btn is-bg-white is-btn-large">
                                                    <span class="icon__box">
                                                        <i class="fa-regular fa-arrow-right-long"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="portfolio__item-content">
                                            <div class="portfolio__item-info">
                                                <div class="portfolio__tag">
                                                    <a href="{{ route('portfolio.show', ['portfolio' => $portfolio->slug]) }}">{{ $portfolio->titulo }}</a>
                                                </div>
                                                <h5 class="portfolio__item-title underline"><a
                                                    href="{{ route('portfolio.show', ['portfolio' => $portfolio->slug]) }}">{{ $portfolio->titulo }}</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            {{-- <div class="swiper-slide">
                                <div class=" portfolio__item style-six">
                                    <div class="portfolio__item-thumb"
                                        data-background="{{ Vite::asset('resources/imgs/portfolio/portfolio-04.png') }}">
                                        <div class="portfolio__item-btn">
                                            <a href="portfolio-details.html" class="circle-btn is-bg-white is-btn-large">
                                                <span class="icon__box">
                                                    <i class="fa-regular fa-arrow-right-long"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item-content">
                                        <div class="portfolio__item-info">
                                            <div class="portfolio__tag">
                                                <a href="portfolio-details.html">Development</a>
                                            </div>
                                            <h5 class="portfolio__item-title underline"><a
                                                    href="portfolio-details.html">Spaincap</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class=" portfolio__item style-six">
                                    <div class="portfolio__item-thumb"
                                        data-background="{{ Vite::asset('resources/imgs/portfolio/portfolio-09.png') }}">
                                        <div class="portfolio__item-btn">
                                            <a href="portfolio-details.html" class="circle-btn is-bg-white is-btn-large">
                                                <span class="icon__box">
                                                    <i class="fa-regular fa-arrow-right-long"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item-content">
                                        <div class="portfolio__item-info">
                                            <div class="portfolio__tag">
                                                <a href="portfolio-details.html">Logo</a>
                                            </div>
                                            <h5 class="portfolio__item-title underline"><a
                                                    href="portfolio-details.html">Branding Logo</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class=" portfolio__item style-six">
                                    <div class="portfolio__item-thumb"
                                        data-background="{{ Vite::asset('resources/imgs/portfolio/portfolio-13.png') }}">
                                        <div class="portfolio__item-btn">
                                            <a href="portfolio-details.html" class="circle-btn is-bg-white is-btn-large">
                                                <span class="icon__box">
                                                    <i class="fa-regular fa-arrow-right-long"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item-content">
                                        <div class="portfolio__item-info">
                                            <div class="portfolio__tag">
                                                <a href="portfolio-details.html">Mockup</a>
                                            </div>
                                            <h5 class="portfolio__item-title underline"><a
                                                    href="portfolio-details.html">Responsive Design</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class=" portfolio__item style-six">
                                    <div class="portfolio__item-thumb"
                                        data-background="{{ Vite::asset('resources/imgs/portfolio/portfolio-23.png') }}">
                                        <div class="portfolio__item-btn">
                                            <a href="portfolio-details.html" class="circle-btn is-bg-white is-btn-large">
                                                <span class="icon__box">
                                                    <i class="fa-regular fa-arrow-right-long"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item-content">
                                        <div class="portfolio__item-info">
                                            <div class="portfolio__tag">
                                                <a href="portfolio-details.html">Creative</a>
                                            </div>
                                            <h5 class="portfolio__item-title underline"><a
                                                    href="portfolio-details.html">Design With Creative</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class=" portfolio__item style-six">
                                    <div class="portfolio__item-thumb"
                                        data-background="{{ Vite::asset('resources/imgs/portfolio/portfolio-24.png') }}">
                                        <div class="portfolio__item-btn">
                                            <a href="portfolio-details.html" class="circle-btn is-bg-white is-btn-large">
                                                <span class="icon__box">
                                                    <i class="fa-regular fa-arrow-right-long"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item-content">
                                        <div class="portfolio__item-info">
                                            <div class="portfolio__tag">
                                                <a href="portfolio-details.html">Creative</a>
                                            </div>
                                            <h5 class="portfolio__item-title underline"><a
                                                    href="portfolio-details.html">Design With Creative</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class=" portfolio__item style-six">
                                    <div class="portfolio__item-thumb"
                                        data-background="{{ Vite::asset('resources/imgs/portfolio/portfolio-25.png') }}">
                                        <div class="portfolio__item-btn">
                                            <a href="portfolio-details.html" class="circle-btn is-bg-white is-btn-large">
                                                <span class="icon__box">
                                                    <i class="fa-regular fa-arrow-right-long"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item-content">
                                        <div class="portfolio__item-info">
                                            <div class="portfolio__tag">
                                                <a href="portfolio-details.html">Creative</a>
                                            </div>
                                            <h5 class="portfolio__item-title underline"><a
                                                    href="portfolio-details.html">Design With Creative</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class=" portfolio__item style-six">
                                    <div class="portfolio__item-thumb"
                                        data-background="{{ Vite::asset('resources/imgs/portfolio/portfolio-26.png') }}">
                                        <div class="portfolio__item-btn">
                                            <a href="portfolio-details.html" class="circle-btn is-bg-white is-btn-large">
                                                <span class="icon__box">
                                                    <i class="fa-regular fa-arrow-right-long"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="portfolio__item-content">
                                        <div class="portfolio__item-info">
                                            <div class="portfolio__tag">
                                                <a href="portfolio-details.html">Creative</a>
                                            </div>
                                            <h5 class="portfolio__item-title underline"><a
                                                    href="portfolio-details.html">Design With Creative</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="portfolio__navigation d-none d-sm-block">
                            <button class="portfolio__button-prev circle-btn is-bg-white slider__nav-btn is-hover-blue"><i
                                    class="fa-regular fa-arrow-left-long"></i></button>
                            <button class="portfolio__button-next circle-btn is-bg-white slider__nav-btn is-hover-blue"><i
                                    class="fa-regular fa-arrow-right-long"></i></button>
                        </div>
                        <!-- If we need pagination -->
                        <div class="pagination__wrapper d-block d-sm-none">
                            <div class="bd-swiper-dot text-center"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- portfolio area end -->

        <!-- testimonial area start -->
        <section class="bd-testimonial__area section-space theme-bg-secondary p-relative">
            <div class="testimonial__shape">
                <img class="testimonial__shape-three" src="{{ Vite::asset('resources/imgs/shape/four-line-shape-1.png') }}"
                    alt="image not found">
                <img class="testimonial__shape-four" src="{{ Vite::asset('resources/imgs/shape/four-line-shape-2.png') }}" alt="image not found">
            </div>
            <div class="container">
                <div class="row g-5 justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-8">
                        <div class="section__title-wrapper section__title-space text-center">
                            <span class="section__subtitle bg-field">TESTIMONIOS </span>
                            <h2 class="section__title">Lo que nuestro cliente dice sobre nosotros</h2>
                            <p class="contentHidden">contentHidden</p>
                        </div>
                    </div>
                </div>
                <div class=" row">
                    <div class="testimonial__slider wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                        <div class="swiper testimonial__active-two">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial__wrapper style-five">
                                        <div class="testimonial__top-item">
                                            <div class="testimonial__thumb-wrap">
                                                <div class="testimonial__thumb">
                                                    <img src="{{ Vite::asset('resources/imgs/user/user-08.png') }}" alt="image not found">
                                                </div>
                                                <div class="testimonial__avatar-info">
                                                    <h6 class="testimonial__avatar-title">Chamain Louis</h6>
                                                    <span class="testimonial__avatar-designation">Web Designer /
                                                        <span class="testimonial__rating">
                                                            <a href="#">
                                                                <i class="icon-star"></i>
                                                            </a>
                                                            <a href="#">
                                                                <i class="icon-star"></i>
                                                            </a>
                                                            <a href="#">
                                                                <i class="icon-star"></i>
                                                            </a>
                                                            <a href="#">
                                                                <i class="icon-star"></i>
                                                            </a>
                                                            <a href="#">
                                                                <i class="icon-star"></i>
                                                            </a>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="testimonial__shape">
                                                <img class="testimonial__shape-quote"
                                                    src="{{ Vite::asset('resources/imgs/shape/testimonial-quote-small.png') }}"
                                                    alt="image not found">
                                            </div>
                                        </div>
                                        <div class="testimonial__item">
                                            <div class="testimonial__content">
                                                <div class="testimonial__text">
                                                    <p>I've had the pleasure of working with them for the past year, and I
                                                        can
                                                        confidently say
                                                        they have
                                                        exceeded all of our expectations From the moment </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial__wrapper style-five">
                                        <div class="testimonial__top-item">
                                            <div class="testimonial__thumb-wrap">
                                                <div class="testimonial__thumb">
                                                    <img src="{{ Vite::asset('resources/imgs/user/user-09.png') }}" alt="image not found">
                                                </div>
                                                <div class="testimonial__avatar-info">
                                                    <h6 class="testimonial__avatar-title">Henry Louis</h6>
                                                    <span class="testimonial__avatar-designation">CEO & FOUNDER /
                                                        <span class="testimonial__rating">
                                                            <a href="#">
                                                                <i class="icon-star"></i>
                                                            </a>
                                                            <a href="#">
                                                                <i class="icon-star"></i>
                                                            </a>
                                                            <a href="#">
                                                                <i class="icon-star"></i>
                                                            </a>
                                                            <a href="#">
                                                                <i class="icon-star"></i>
                                                            </a>
                                                            <a href="#">
                                                                <i class="icon-star"></i>
                                                            </a>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="testimonial__shape">
                                                <img class="testimonial__shape-quote"
                                                    src="{{ Vite::asset('resources/imgs/shape/testimonial-quote-small.png') }}"
                                                    alt="image not found">
                                            </div>
                                        </div>
                                        <div class="testimonial__item">
                                            <div class="testimonial__content">
                                                <div class="testimonial__text">
                                                    <p>I've had the pleasure of working with them for the past year, and I
                                                        can
                                                        confidently say
                                                        they have exceeded all of our expectations From the moment </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial__wrapper style-five">
                                        <div class="testimonial__top-item">
                                            <div class="testimonial__thumb-wrap">
                                                <div class="testimonial__thumb">
                                                    <img src="{{ Vite::asset('resources/imgs/user/user-10.png') }}" alt="image not found">
                                                </div>
                                                <div class="testimonial__avatar-info">
                                                    <h6 class="testimonial__avatar-title">Chamain Louis</h6>
                                                    <span class="testimonial__avatar-designation">Web Designer /
                                                        <span class="testimonial__rating">
                                                            <a href="#">
                                                                <i class="icon-star"></i>
                                                            </a>
                                                            <a href="#">
                                                                <i class="icon-star"></i>
                                                            </a>
                                                            <a href="#">
                                                                <i class="icon-star"></i>
                                                            </a>
                                                            <a href="#">
                                                                <i class="icon-star"></i>
                                                            </a>
                                                            <a href="#">
                                                                <i class="icon-star"></i>
                                                            </a>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="testimonial__shape">
                                                <img class="testimonial__shape-quote"
                                                    src="{{ Vite::asset('resources/imgs/shape/testimonial-quote-small.png') }}"
                                                    alt="image not found">
                                            </div>
                                        </div>
                                        <div class="testimonial__item">
                                            <div class="testimonial__content">
                                                <div class="testimonial__text">
                                                    <p>I've had the pleasure of working with them for the past year, and I
                                                        can
                                                        confidently say
                                                        they have
                                                        exceeded all of our expectations From the moment </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="testimonial__navigation d-none d-sm-block">
                            <button class="testimonial__button-prev circle-btn slider__nav-btn"><i
                                    class="fa-regular fa-arrow-left-long"></i></button>
                            <button class="testimonial__button-next circle-btn ml-5 slider__nav-btn"><i
                                    class="fa-regular fa-arrow-right-long"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial area end -->

    </main>
    <!-- Body main wrapper end -->
@endsection
