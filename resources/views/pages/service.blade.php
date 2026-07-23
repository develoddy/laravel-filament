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
                                <h1 class="breadcrumb__title mb-25">How I Build</h1>
                                <p class="mb-15">
                                    From first idea to real-world launch. My process for turning concepts into working products.
                                </p>
                            </div>
                            <div class="breadcrumb__menu text-center">
                                <nav>
                                    <ul>
                                        <li><span><a href="{{ route('welcome') }}">Home</a></span></li>
                                        <li><span>Process</span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area  end -->

        <!-- process area start -->
        <section class="bd-service__area section-space">
            <div class="container">
                <div class="row g-5 section__title-space justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section__title-wrapper text-center">
                            <span class="section__subtitle bg-field">THE PROCESS</span>
                            <h2 class="section__title">IDEA → BUILD → LAUNCH → LEARN</h2>
                            <p>This isn't about selling services. It's about showing you how I turn ideas into products and what I learn along the way.</p>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s"
                        data-wow-duration="1s">
                        <div class="service__wrapper service__item style-three bordered-style text-center">
                            <div class="contentHidden"></div>
                            <div class="contentHidden"></div>
                            <span class="service__icon-wrap">
                                <i class="fa-light fa-lightbulb"></i>
                            </span>
                            <div class="service__content">
                                <h5 class="service__title">IDEA</h5>
                                <p>Identify a problem or opportunity. Research real user needs. Define what the MVP must do and nothing more.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s"
                        data-wow-duration="1s">
                        <div class="service__wrapper service__item style-three bordered-style text-center">
                            <div class="contentHidden"></div>
                            <div class="contentHidden"></div>
                            <span class="service__icon-wrap">
                                <i class="fa-light fa-code"></i>
                            </span>
                            <div class="service__content">
                                <h5 class="service__title">BUILD</h5>
                                <p>Ship fast. Build the core functionality first. Make technical decisions based on speed and reliability, not trends.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s"
                        data-wow-duration="1s">
                        <div class="service__wrapper service__item style-three bordered-style text-center">
                            <div class="contentHidden"></div>
                            <div class="contentHidden"></div>
                            <span class="service__icon-wrap">
                                <i class="fa-light fa-rocket"></i>
                            </span>
                            <div class="service__content">
                                <h5 class="service__title">LAUNCH</h5>
                                <p>Put it in front of real users. Set up hosting, payments, communication and automation. Get the product live.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".9s"
                        data-wow-duration="1s">
                        <div class="service__wrapper service__item style-three bordered-style text-center">
                            <div class="contentHidden"></div>
                            <div class="contentHidden"></div>
                            <span class="service__icon-wrap">
                                <i class="fa-light fa-chart-line"></i>
                            </span>
                            <div class="service__content">
                                <h5 class="service__title">LEARN</h5>
                                <p>Collect feedback. Monitor real usage. Iterate based on evidence, not assumptions. Document what works and what doesn't.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- process area end -->

        <!-- about area start -->
        <section class="bd-about__area section-space theme-bg-secondary p-relative">
            <div class="about__shape">
                <img class="about__shape-two" src="{{ Vite::asset('resources/imgs/shape/lamp-shape.png') }}" alt="Decorative shape">
            </div>
            <div class="container">
                <div class="row g-5 align-items-lg-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="about__thumb-wrapper style-four wow fadeInLeft" data-wow-delay=".3s">
                            <div class="about__thumb">
                                <img src="{{ Vite::asset('resources/imgs/about/about-04.png') }}" alt="Developer workspace setup">
                                <div class="about__shape">
                                    <img class="about__shape-one" src="{{ Vite::asset('resources/imgs/shape/dot-small.png') }}"
                                        alt="Decorative shape">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="about__content style-four  wow fadeInRight" data-wow-delay=".3s">
                            <div class="section__title-wrapper mb-25">
                                <div class="section__title-wrapper">
                                    <span class="section__subtitle sec-border">THE STACK</span>
                                    <h2 class="section__title">Tools I use to build products.</h2>
                                    <p class="contentHidden">contentHiddenText</p>
                                </div>
                            </div>
                            <p>
                                I choose tools based on what gets products shipped and working, not what's trending. My stack: <strong>Laravel</strong> for backends, <strong>Node.js + Express</strong> for APIs, <strong>Angular</strong> for frontends, and <strong>MySQL</strong> for databases.
                            </p>
                            <p>
                                When I need speed, I reach for tools I know well. When I need to learn something new, I document the process and share what I discover.
                            </p>
                            <div class="about__btn">
                                <a class="bd-btn is-btn-anim bordered-blue" href="{{ route('my-project') }}">
                                    <span class="bd-btn-inner">
                                        <span class="bd-btn-normal">See What I've Built</span>
                                        <span class="bd-btn-hover">See What I've Built</span>
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
                                                <a href="{{ route('my-project.show', $portfolio->slug) }}" class="circle-btn is-bg-white is-btn-large">
                                                    <span class="icon__box">
                                                        <i class="fa-regular fa-arrow-right-long"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="portfolio__item-content">
                                            <div class="portfolio__item-info">
                                                <div class="portfolio__tag">
                                                    <a href="{{ route('my-project.show', $portfolio->slug) }}">{{ $portfolio->titulo }}</a>
                                                </div>
                                                <h5 class="portfolio__item-title underline"><a
                                                    href="{{ route('my-project.show', $portfolio->slug) }}">{{ $portfolio->titulo }}</a></h5>
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
