@extends('layouts.app')

@section('content')
<main>
    <!-- Banner area start -->
    <section class="banner__area banner-height d-flex align-items-center p-relative">
        <div class="banner-shape d-none d-lg-block">
            <img class="banner__shape-two" src="{{ Vite::asset('resources/imgs/shape/tower-shape-small.png') }}" alt="image not found">
        </div>
        <!-- when slide active remove this class -->
        <div class="swiper banner__active overflow-visible">
            <div class="swiper-wrapper">
                <div class="swiper-slide banner_more_item">
                    <div class="container">
                        <div class="row align-items-center gy-5">
                            <div class="col-xl-6 col-lg-6">
                                <div class="banner__content p-relative">
                                    <h1 class="banner__title large wow fadeInUp" data-wow-delay=".3s"
                                        data-wow-duration=".7s">Hi, <span class="banner__shape-hand"><img
                                                src="{{ Vite::asset('resources/imgs/shape/hand-shape.png') }}" alt="image not found"></span>
                                        I’m <span class="bd-text-primary">Portlu</span> UI Designer Based in Florida
                                    </h1>
                                    <p class="wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".9s">We are a
                                        creative agency that specializes in providing high-quality design and
                                        branding solutions to design and coding.</p>
                                </div>
                                <div class="banner__btn wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1.1s">
                                    <a class="bd-btn is-btn-anim" href="portfolio.html">
                                        <span class="bd-btn-inner">
                                            <span class="bd-btn-normal">Get my work</span>
                                            <span class="bd-btn-hover">Get my work</span>
                                            <i class="contentHidden"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="banner__thumb-wrapper wow fadeInRight" data-wow-delay=".8s"
                                    data-wow-duration="1.2s">
                                    <div class="banner__shape">
                                        <img class="banner__shape-one" src="{{ Vite::asset('resources/imgs/shape/tower-shape.png') }}"
                                            alt="image not found">
                                    </div>
                                    <div class="banner__bg"></div>
                                    <div class="banner__thumb">
                                        <img src="{{ Vite::asset('resources/imgs/banner/banner-01.png') }}" alt="image not found">
                                    </div>
                                    <div class="theme__social banner-social">
                                        <a href="#"><i class="fa-brands fa-facebook-f"></i>
                                            <div class="banner__social-tooltip">
                                                <p>Facebook</p>
                                            </div>
                                        </a>
                                        <a href="#"><i class="icon-twiter"></i>
                                            <div class="banner__social-tooltip">
                                                <p>Twitter</p>
                                            </div>
                                        </a>
                                        <a href="#"><i class="fa-brands fa-linkedin"></i>
                                            <div class="banner__social-tooltip">
                                                <p>Linkedin</p>
                                            </div>
                                        </a>
                                        <a href="#"><i class="fa-brands fa-behance"></i>
                                            <div class="banner__social-tooltip">
                                                <p>Behance</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner area end -->

    <!-- About area start -->
    <section id="homeabout" class="bd-about__area section-space theme-bg-secondary">
        <div class="container">
            <div class="row g-5 align-items-lg-center">
                <div class="col-lg-6 col-md-6">
                    <div class="about__thumb-wrapper wow fadeInLeft tilt" data-wow-delay=".3s">
                        <div class="about__thumb">
                            <img src="{{ Vite::asset('resources/imgs/about/about-01.png') }}" alt="image not found">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about__content wow fadeInRight" data-wow-delay=".3s">
                        <div class="section__title-wrapper mb-25">
                            <div class="section__title-wrapper">
                                <span class="section__subtitle">ABOUT ME</span>
                                <h2 class="section__title">Young Man Student With Notebooks</h2>
                                <p class="contentHidden">contentHiddenText</p>
                            </div>
                        </div>
                        <p class="about__text">Our journey began with a simple belief that every idea, no matter how
                            small, has the power to make a significant impact.passion meets progress and company to
                            grow </p>
                        <p class="about__text-two">In a world saturated with noise, we stand out by embracing a
                            commitment to authenticity and originality. </p>
                        <div class="about__counter-wrapper">
                            <div class="about__counter-info">
                                <div class="about__counter-count">
                                    <h3><span class="counter">20</span>th</h3>
                                </div>
                                <p>Years of Experience</p>
                            </div>
                            <div class="about__counter-info">
                                <div class="about__counter-count">
                                    <h3><span class="counter">150</span>+</h3>
                                </div>
                                <p>Project Completed</p>
                            </div>
                        </div>
                        <div class="about__btn">
                            <a class="bd-btn is-btn-anim" href="about.html">
                                <span class="bd-btn-inner">
                                    <span class="bd-btn-normal">Know more</span>
                                    <span class="bd-btn-hover">Know more</span>
                                    <i class="contentHidden"></i>
                                </span>
                            </a>
                            <a class="play__btn popup-video animate-play"
                                href="https://www.youtube.com/watch?v=9341cn0KokE"><span><i
                                        class="icon-play"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About area end -->

     <!-- Service area start -->
     <section id="homeservices" class="bd-service__area section-space p-relative fix">
        <div class="service__shape-wrapper">
            <img class="service__shape" src="{{ Vite::asset('resources/imgs/service/shape/service-shape-01.png') }}" alt="image not found">
        </div>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="section__title-wrapper text-center section__title-space">
                        <span class="section__subtitle">MY SERVICE</span>
                        <h2 class="section__title mb-20">Professional Services</h2>
                        <p class="section__paragraph is-br-none">Begin with a brief introduction or summary that
                            <br> highlights who you are and what</p>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                    <div class="service__wrapper service__item bg-solid bordered-style">
                        <div class="contentHidden"></div>
                        <div class="contentHidden"></div>
                        <span class="service__icon-wrap">
                            <i class="icon-ux-design"></i>
                        </span>
                        <div class="service__content">
                            <h5 class="service__title"><a href="service-details.html">UX/UI Design</a></h5>
                            <p>Start with a brief introduction about your a yourself. Mention your name, your
                                current role or status .</p>
                            <div class="contentHidden">
                                <a class="contentHidden" href="service-details.html">contentHidden <span><i
                                            class="contentHidden"></i></span></a>
                                <a class="contentHidden" href="service-details.html"> <span class="contentHidden"><i
                                            class="assets/imgs/icons/arrow.png"> </i></span></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1s">
                    <div class="service__wrapper service__item bg-solid bordered-style">
                        <div class="service__shape"></div>
                        <div class="service__shape-2"></div>
                        <span class="service__icon-wrap">
                            <i class="icon-design"></i>
                        </span>
                        <div class="service__content">
                            <h5 class="service__title"><a href="service-details.html">Web Design</a></h5>
                            <p>Develop detailed case studies for a few key projects to provide deeper insights into
                                your design process.</p>
                            <div class="contentHidden">
                                <a class="contentHidden" href="service-details.html">contentHidden <span><i
                                            class="contentHidden"></i></span></a>
                                <a class="contentHidden" href="service-details.html"> <span class="contentHidden"><i
                                            class="assets/imgs/icons/arrow.png"> </i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                    <div class="service__wrapper service__item bg-solid bordered-style">
                        <div class="service__shape"></div>
                        <div class="service__shape-2"></div>
                        <span class="service__icon-wrap">
                            <i class="icon-project"></i>
                        </span>
                        <div class="service__content">
                            <h5 class="service__title"><a href="service-details.html">Project Design</a></h5>
                            <p>Showcase your design process, from initial concept to final execution. Include stages
                                research, ideation.</p>
                            <div class="contentHidden">
                                <a class="contentHidden" href="service-details.html">contentHidden <span><i
                                            class="contentHidden"></i></span></a>
                                <a class="contentHidden" href="service-details.html"> <span class="contentHidden"><i
                                            class="assets/imgs/icons/arrow.png"> </i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1s">
                    <div class="service__wrapper service__item bg-solid bordered-style">
                        <div class="service__shape"></div>
                        <div class="service__shape-2"></div>
                        <span class="service__icon-wrap">
                            <i class="icon-animation"></i>
                        </span>
                        <div class="service__content">
                            <h5 class="service__title"><a href="service-details.html">Animation</a></h5>
                            <p>If applicable, include storyboard sketches, concept art, or character designs that
                                contributed to art design.</p>
                            <div class="contentHidden">
                                <a class="contentHidden" href="service-details.html">contentHidden <span><i
                                            class="contentHidden"></i></span></a>
                                <a class="contentHidden" href="service-details.html"> <span class="contentHidden"><i
                                            class="assets/imgs/icons/arrow.png"> </i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                    <div class="service__wrapper service__item bg-solid bordered-style">
                        <div class="service__shape"></div>
                        <div class="service__shape-2"></div>
                        <span class="service__icon-wrap">
                            <i class="icon-application"></i>
                        </span>
                        <div class="service__content">
                            <h5 class="service__title"><a href="service-details.html">Mobile Application</a></h5>
                            <p>Whenever possible, incorporate interactive prototypes that allow visitors to
                                experience the app's user.</p>
                            <div class="contentHidden">
                                <a class="contentHidden" href="service-details.html">contentHidden <span><i
                                            class="contentHidden"></i></span></a>
                                <a class="contentHidden" href="service-details.html"> <span class="contentHidden"><i
                                            class="assets/imgs/icons/arrow.png"> </i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s" data-wow-duration="1s">
                    <div class="service__wrapper service__item bg-solid bordered-style">
                        <div class="service__shape"></div>
                        <div class="service__shape-2"></div>
                        <span class="service__icon-wrap">
                            <i class="icon-game"></i>
                        </span>
                        <div class="service__content">
                            <h5 class="service__title"><a href="service-details.html">Game Development</a></h5>
                            <p>Share design documents, storyboards, or game design document that illustrate your
                                planning and concept.</p>
                            <div class="contentHidden">
                                <a class="contentHidden" href="service-details.html">contentHidden <span><i
                                            class="contentHidden"></i></span></a>
                                <a class="contentHidden" href="service-details.html"> <span class="contentHidden"><i
                                            class="assets/imgs/icons/arrow.png"> </i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service area end -->

    <!-- Section divider -->
    <div class="section__divider">
        <hr>
    </div>

    <!-- Portfolio area start -->
    <section id="homeworks" class="bd-portfolio__area section-space">
        <div class="container">
            <div class="row g-5 align-items-end section__title-space">
                <div class="col-lg-5 col-md-7">
                    <div class="section__title-wrapper">
                        <span class="section__subtitle">MY RECENT PORTFOLIO</span>
                        <h2 class="section__title">Check My Latest Works</h2>
                        <p class="contentHidden">contentHiddenText</p>
                    </div>
                </div>
                <div class="col-lg-7 col-md-5">
                    <div class="portfolio__more text-md-end">
                        <a class="bd-btn is-btn-anim" href="portfolio.html">
                            <span class="bd-btn-inner">
                                <span class="bd-btn-normal">View all project</span>
                                <span class="bd-btn-hover">View all project</span>
                                <i class="contentHidden"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="portfolio__wrapper">
                <div class="row grid g-5 wow fadeInUp" data-wow-delay=".5s">
                    <div class="col-xl-4 col-lg-4 col-md-6 grid-item">
                        <div class=" portfolio__item">
                            <div class="portfolio__thumb">
                                <a href="portfolio-details.html"><img
                                        src="{{ Vite::asset('resources/imgs/portfolio/masonary/portfolio-masonary-01.png') }}"
                                        alt="img not found"></a>
                            </div>
                            <div class="portfolio__content">
                                <div class="portfolio__info">
                                    <div class="portfolio__tag">
                                        <a href="portfolio-details.html">Design</a>
                                    </div>
                                    <h5 class="portfolio__title"><a href="portfolio-details.html">Mockup Design</a>
                                    </h5>
                                </div>
                                <div class="portfolio__btn">
                                    <a href="portfolio-details.html" class="circle-btn">
                                        <span class="icon__box">
                                            <i class="fa-regular fa-arrow-right-long"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 grid-item">
                        <div class=" portfolio__item">
                            <div class="portfolio__thumb">
                                <a href="portfolio-details.html"><img
                                        src="{{ Vite::asset('resources/imgs/portfolio/masonary/portfolio-masonary-02.png') }}"
                                        alt="img not found"></a>
                            </div>
                            <div class="portfolio__content">
                                <div class="portfolio__info">
                                    <div class="portfolio__tag">
                                        <a href="portfolio-details.html">Creative</a>
                                    </div>
                                    <h5 class="portfolio__title"><a href="portfolio-details.html">Creative Idea</a>
                                    </h5>
                                </div>
                                <div class="portfolio__btn">
                                    <a href="portfolio-details.html" class="circle-btn">
                                        <span class="icon__box">
                                            <i class="fa-regular fa-arrow-right-long"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 grid-item">
                        <div class=" portfolio__item">
                            <div class="portfolio__thumb">
                                <a href="portfolio-details.html"><img
                                        src="{{ Vite::asset('resources/imgs/portfolio/masonary/portfolio-masonary-04.png') }}"
                                        alt="img not found"></a>
                            </div>
                            <div class="portfolio__content">
                                <div class="portfolio__info">
                                    <div class="portfolio__tag">
                                        <a href="portfolio-details.html">Branding</a>
                                    </div>
                                    <h5 class="portfolio__title"><a href="portfolio-details.html">Logo With
                                            Branding</a></h5>
                                </div>
                                <div class="portfolio__btn">
                                    <a href="portfolio-details.html" class="circle-btn">
                                        <span class="icon__box">
                                            <i class="fa-regular fa-arrow-right-long"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 grid-item">
                        <div class=" portfolio__item">
                            <div class="portfolio__thumb">
                                <a href="portfolio-details.html"><img
                                        src="{{ Vite::asset('resources/imgs/portfolio/masonary/portfolio-masonary-03.png') }}"
                                        alt="img not found"></a>
                            </div>
                            <div class="portfolio__content">
                                <div class="portfolio__info">
                                    <div class="portfolio__tag">
                                        <a href="portfolio-details.html">Digital Art</a>
                                    </div>
                                    <h5 class="portfolio__title"><a href="portfolio-details.html">Digital Art
                                            Beauty</a></h5>
                                </div>
                                <div class="portfolio__btn">
                                    <a href="portfolio-details.html" class="circle-btn">
                                        <span class="icon__box">
                                            <i class="fa-regular fa-arrow-right-long"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio area start -->

    <!-- Section divider -->
    <div class="section__divider">
        <hr>
    </div>

    <!-- qualification start -->
    <section class="bd-qulafication__area section-space">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-6">
                    <div class="section__title-wrapper text-center">
                        <span class="section__subtitle">EDUCACIÓN & HABILIDADES</span>
                        <h2 class="section__title mb-25">Mi currículum vitae</h2>
                        <p class="contentHidden">contentHiddenText</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-30">
                <div class="col-lg-6 col-md-6">
                    <div class="faq__tab-wrapper bd-tab">
                        <nav>
                            <div class="nav nav-tabs faq-tab-slide justify-content-center" id="nav-tab" role=tablist>
                                <label for="faq-tab-check" class="nav faq-separate">
                                    <span class="nav-link" id="nav-experience-tab" data-bs-toggle="tab" data-bs-target="#nav-experience" role="tab" aria-controls="nav-experience" aria-selected="true">Experience</span>
                                    <input type="checkbox" id="faq-tab-check">
                                    <i></i>
                                    <span class="nav-link active" id="nav-education-tab" data-bs-toggle="tab" data-bs-target="#nav-education" role="tab" aria-controls="nav-education" aria-selected="false">Education</span>
                                </label>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-center wow fadeInUp" data-wow-delay=".3s">
                <div class="tab-content wow fadeInUp" id="nav-tabContent" data-wow-delay=".3s" data-wow-duration="1s">
                    {{-- Education --}}
                    <div class="tab-pane fade show active" id="nav-education" role="tabpanel" aria-labelledby="nav-education-tab">
                        <div class="row g-5">
                            <div class="col-xl-6 col-lg-6">
                                <div class="faq__style">
                                    <div class="bd__faq">
                                        <div class="accordion" id="accordionExampleThree">
                                            <div class="accordion-item">
                                                <h5 class="accordion-header" id="headingSix_1">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix_1" aria-expanded="false" aria-controls="collapseSix_1">
                                                        Educación
                                                    </button>
                                                </h5>
                                                <div id="collapseSix_1" class="accordion-collapse collapse" aria-labelledby="headingSix_1" data-bs-parent="#accordionExampleThree">
                                                    <div class="accordion-body">
                                                        <span class="qualification__meta">IES Virgen de la paz (2008 - 2011)</span>
                                                        <p>
                                                            Graduado en Desarrollo de Aplicaciones Web por el Instituto Virgen de la Paz de Madrid, con una sólida formación en programación, diseño web y desarrollo de aplicaciones. Apasionado por la tecnología y comprometido con seguir aprendiendo y creciendo en el campo de la informática.
                                                        </p>
                                                        <h6 class="qualification__rating">4.30/5</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h5 class="accordion-header" id="headingFive_1">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                                        Logros y Resultados
                                                    </button>
                                                </h5>
                                                <div id="collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingFive_1" data-bs-parent="#accordionExampleThree">
                                                    <div class="accordion-body">
                                                        <span class="qualification__meta">Indra (2017 - 2022)</span>
                                                        <p>
                                                            Tras completar mis estudios en Desarrollo de Aplicaciones Web, realicé prácticas en una empresa donde logré obtener una calificación de aprobado. 
                                                            Al concluir las prácticas, fui contratado como desarrollador web, consolidando así mi experiencia y habilidades en el campo laboral.
                                                        </p>
                                                        <h6 class="qualification__rating">4.30/5</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item d-none">
                                                <h5 class="accordion-header" id="headingSeven_1">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                        Leadership Experience
                                                    </button>
                                                </h5>
                                                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven_1" data-bs-parent="#accordionExampleThree">
                                                    <div class="accordion-body">
                                                        <span class="qualification__meta">DVI University (1997 - 2001)</span>
                                                        <p>If you participated in a study abroad program or international exchange,
                                                            mention the location and duration of your overseas experience.</p>
                                                        <h6 class="qualification__rating">4.30/5</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h5 class="accordion-header" id="headingEight_1">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight_1" aria-expanded="false" aria-controls="collapseEight_1">
                                                        Proyectos e Iniciativas
                                                    </button>
                                                </h5>
                                                <div id="collapseEight_1" class="accordion-collapse collapse" aria-labelledby="headingEight_1" data-bs-parent="#accordionExampleThree">
                                                    <div class="accordion-body">
                                                        <span class="qualification__meta">Evidenze (2023 - Actualidad)</span>
                                                        <p>
                                                            Mi enfoque se ha centrado en ofrecer experiencias online sobresalientes que cumplan con las necesidades y expectativas de nuestros clientes. 
                                                            Cada proyecto es una oportunidad para fusionar creatividad y funcionalidad, entregando resultados que impulsan el éxito de nuestros clientes en el mundo digital.
                                                        </p>
                                                        <h6 class="qualification__rating">4.30/5</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="faq__style">
                                    <div class="bd__faq">
                                        <div class="accordion" id="accordionExampleOne">
                                            <div class="accordion-item">
                                                <h5 class="accordion-header" id="headingTwo_2">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo_2" aria-expanded="false" aria-controls="collapseTwo_2">
                                                        Portafolio de Logros
                                                    </button>
                                                </h5>
                                                <div id="collapseTwo_2" class="accordion-collapse collapse" aria-labelledby="headingTwo_2" data-bs-parent="#accordionExampleOne" style="">
                                                    <div class="accordion-body">
                                                        <span class="qualification__meta">Portfolios (2023 - 2024)</span>
                                                        <p>
                                                            Mi portafolio de logros refleja una trayectoria sólida y diversa en el desarrollo web. Desde la creación de sitios web dinámicos hasta la implementación de estrategias de optimización y seguridad, 
                                                            cada proyecto ha sido una oportunidad para demostrar mi habilidad para combinar creatividad con funcionalidad
                                                        </p>
                                                        <h6 class="qualification__rating">4.30/5</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item active d-none">
                                                <h5 class="accordion-header" id="headingOne_1">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne_1" aria-expanded="false" aria-controls="collapseOne_1">
                                                        Study Abroad
                                                    </button>
                                                </h5>
                                                <div id="collapseOne_1" class="accordion-collapse collapse show" aria-labelledby="headingOne_1" data-bs-parent="#accordionExampleOne" style="">
                                                    <div class="accordion-body">
                                                        <span class="qualification__meta">DVI University (1997 - 2001)</span>
                                                        <p>If you participated in a study abroad program or international exchange, mention the location and duration of your overseas experience.</p>
                                                        <h6 class="qualification__rating">4.30/5</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item d-none">
                                                <h5 class="accordion-header" id="headingThree_1">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree_1" aria-expanded="false" aria-controls="collapseThree_1">
                                                        Honours and Awards
                                                    </button>
                                                </h5>
                                                <div id="collapseThree_1" class="accordion-collapse collapse" aria-labelledby="headingThree_1" data-bs-parent="#accordionExampleOne" style="">
                                                    <div class="accordion-body">
                                                        <span class="qualification__meta">DVI University (1997 - 2001)</span>
                                                        <p>If you participated in a study abroad program or international exchange, mention the location and duration of your overseas experience.</p>
                                                        <h6 class="qualification__rating">4.30/5</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h5 class="accordion-header" id="headingFour_1">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour_1" aria-expanded="false" aria-controls="collapseFour_1">
                                                        Referencias Académicas
                                                    </button>
                                                </h5>
                                                <div id="collapseFour_1" class="accordion-collapse collapse" aria-labelledby="headingFour_1" data-bs-parent="#accordionExampleOne">
                                                    <div class="accordion-body">
                                                        <span class="qualification__meta">Cas-Training & TokioSchool (2016 - 2024)</span>
                                                        <p>
                                                            Mi formación académica en Cas-Training y TokioSchool ha sentado las bases sólidas de mi carrera en desarrollo web. 
                                                            Con una educación rigurosa y orientada a la excelencia, he adquirido habilidades técnicas y conocimientos fundamentales que 
                                                            han sido fundamentales en mi trayectoria profesional.
                                                        </p>
                                                        <h6 class="qualification__rating">4.30/5</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Experience --}}
                    <div class="tab-pane fade" id="nav-experience" role="tabpanel" aria-labelledby="nav-experience-tab">
                        <div class="row g-5">
                            <div class="col-xl-6 col-lg-6">
                                <div class="faq__style">
                                    <div class="bd__faq">
                                        <div class="accordion" id="accordionExampleFour">
                                            <div class="accordion-item">
                                                <h5 class="accordion-header" id="headingTwo">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Evidenze
                                                    </button>
                                                </h5>
                                                <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExampleFour">
                                                    <div class="accordion-body">
                                                        <span class="qualification__meta">Evidenze (2023 - Actualidad)</span>
                                                        <p>
                                                            En mi rol como desarrollador full-stack en Evidenze, tuve el privilegio de trabajar en un entorno dinámico y colaborativo, 
                                                            impulsando el desarrollo de soluciones web innovadoras y escalables. Colaboré estrechamente con equipos interdisciplinarios para comprender 
                                                            las necesidades del negocio y traducirlas en aplicaciones web de alto rendimiento.
                                                        </p>
                                                        <br>
                                                        <p>
                                                            Mis responsabilidades incluyeron el diseño y la implementación de arquitecturas sólidas tanto en el frontend como en el backend, 
                                                            utilizando tecnologías modernas como JavaScript, Laravel y Node.js. Además, me desempeñé en la creación de bases de datos eficientes 
                                                            y seguras, aprovechando herramientas como MongoDB y MySQL para garantizar la integridad y el rendimiento de los datos.
                                                        </p>
                                                        <h6 class="qualification__rating">Full-Stack web developer</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h5 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        Indra
                                                    </button>
                                                </h5>
                                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExampleFour">
                                                    <div class="accordion-body">
                                                        <span class="qualification__meta">DVI University (1997 - 2001)</span>
                                                        <p>If you participated in a study abroad program or international exchange, mention the location and duration of your overseas experience.</p>
                                                        <h6 class="qualification__rating">4.30/5</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h5 class="accordion-header" id="headingThree">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        Cas-Training
                                                    </button>
                                                </h5>
                                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExampleFour">
                                                    <div class="accordion-body">
                                                        <span class="qualification__meta">DVI University (1997 - 2001)</span>
                                                        <p>If you participated in a study abroad program or international exchange, mention the location and duration of your overseas experience.</p>
                                                        <h6 class="qualification__rating">4.30/5</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h5 class="accordion-header" id="headingFour">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        Avanweb
                                                    </button>
                                                </h5>
                                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExampleFour">
                                                    <div class="accordion-body">
                                                        <span class="qualification__meta">DVI University (1997 - 2001)</span>
                                                        <p>If you participated in a study abroad program or international exchange, mention the location and duration of your overseas experience.</p>
                                                        <h6 class="qualification__rating">4.30/5</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="faq__style">
                                    <div class="bd__faq">
                                        <div class="accordion" id="accordionExampleTwo">
                                            <div class="accordion-item">
                                                <h5 class="accordion-header" id="headingSix">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix_2" aria-expanded="false" aria-controls="collapseSix_2">
                                                        Ennovators
                                                    </button>
                                                </h5>
                                                <div id="collapseSix_2" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExampleTwo">
                                                    <div class="accordion-body">
                                                        <span class="qualification__meta">DVI University (1997 - 2001)</span>
                                                        <p>If you participated in a study abroad program or international exchange,
                                                            mention the location and duration of your overseas experience.</p>
                                                        <h6 class="qualification__rating">4.30/5</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h5 class="accordion-header" id="headingFive">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive_1" aria-expanded="true" aria-controls="collapseFive_1">
                                                        Powernet
                                                    </button>
                                                </h5>
                                                <div id="collapseFive_1" class="accordion-collapse collapse show" aria-labelledby="headingFive" data-bs-parent="#accordionExampleTwo">
                                                    <div class="accordion-body">
                                                        <span class="qualification__meta">DVI University (1997 - 2001)</span>
                                                        <p>Highlight achievements that demonstrate your impact on the organization,
                                                            such as revenue growth, cost savings,process.</p>
                                                        <h6 class="qualification__rating">4.30/5</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item d-none">
                                                <h5 class="accordion-header" id="headingSeven">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven_1" aria-expanded="false" aria-controls="collapseSeven_1">
                                                        Leadership Experience
                                                    </button>
                                                </h5>
                                                <div id="collapseSeven_1" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExampleTwo">
                                                    <div class="accordion-body">
                                                        <span class="qualification__meta">DVI University (1997 - 2001)</span>
                                                        <p>If you participated in a study abroad program or international exchange,
                                                            mention the location and duration of your overseas experience.</p>
                                                        <h6 class="qualification__rating">4.30/5</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item d-none">
                                                <h5 class="accordion-header" id="headingEight">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                                        Projects and Initiatives
                                                    </button>
                                                </h5>
                                                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExampleTwo">
                                                    <div class="accordion-body">
                                                        <span class="qualification__meta">DVI University (1997 - 2001)</span>
                                                        <p>If you participated in a study abroad program or international exchange,
                                                            mention the location and duration of your overseas experience.</p>
                                                        <h6 class="qualification__rating">4.30/5</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- qualification end -->

    <!-- counter area start -->
    <section class="bd-counter__area section-space">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section__title-wrapper section__title-space">
                        <span class="section__subtitle">Developer experience</span>
                        <h2 class="section__title">Developer Skills</h2>
                        <p class="contentHidden">contentHiddenText</p>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-3 col-md-4 col-md-6 col-sm-6">
                    <div class="skill__wrapper skill__item wow fadeIn" data-wow-delay=".3s">
                        <div class="skill__icon-thumb white-bg">
                            <img src="{{ Vite::asset('resources/imgs/skill/01.png') }}" alt="img not found">
                        </div>
                        <div class="skill__content">
                            <h3><span class="counter">88</span>%</h3>
                            <span class="skill__name">Laravel</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-md-6 col-sm-6">
                    <div class="skill__wrapper skill__item wow fadeIn" data-wow-delay=".5s">
                        <div class="skill__icon-thumb white-bg">
                            <img src="{{ Vite::asset('resources/imgs/skill/02.png') }}" alt="img not found">
                        </div>
                        <div class="skill__content">
                            <h3><span class="counter">98</span>%</h3>
                            <span class="skill__name">Angular</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-md-6 col-sm-6">
                    <div class="skill__wrapper skill__item wow fadeIn" data-wow-delay=".7s">
                        <div class="skill__icon-thumb white-bg">
                            <img src="{{ Vite::asset('resources/imgs/skill/03.png') }}" alt="img not found">
                        </div>
                        <div class="skill__content">
                            <h3><span class="counter">78</span>%</h3>
                            <span class="skill__name">MySQL</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-md-6 col-sm-6">
                    <div class="skill__wrapper skill__item wow fadeIn" data-wow-delay=".9s">
                        <div class="skill__icon-thumb white-bg">
                            <img src="{{ Vite::asset('resources/imgs/skill/04.png') }}" alt="img not found">
                        </div>
                        <div class="skill__content">
                            <h3><span class="counter">68</span>%</h3>
                            <span class="skill__name">Figma</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-md-6 col-sm-6 d-none">
                    <div class="skill__wrapper skill__item wow fadeIn" data-wow-delay=".9s">
                        <div class="skill__icon-thumb white-bg">
                            <img src="{{ Vite::asset('resources/imgs/skill/05.png') }}" alt="img not found">
                        </div>
                        <div class="skill__content">
                            <h3><span class="counter">68</span>%</h3>
                            <span class="skill__name">HTML5</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-md-6 col-sm-6 d-none">
                    <div class="skill__wrapper skill__item wow fadeIn" data-wow-delay=".9s">
                        <div class="skill__icon-thumb white-bg">
                            <img src="{{ Vite::asset('resources/imgs/skill/06.png') }}" alt="img not found">
                        </div>
                        <div class="skill__content">
                            <h3><span class="counter">68</span>%</h3>
                            <span class="skill__name">CSS3</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-md-6 col-sm-6 d-none">
                    <div class="skill__wrapper skill__item wow fadeIn" data-wow-delay=".9s">
                        <div class="skill__icon-thumb white-bg">
                            <img src="{{ Vite::asset('resources/imgs/skill/07.png') }}" alt="img not found">
                        </div>
                        <div class="skill__content">
                            <h3><span class="counter">68</span>%</h3>
                            <span class="skill__name">Javascript</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- counter area end -->

    <!-- testimonial area start -->
    <section class="bd-testimonial__area section-space theme-bg-secondary p-relative z-index-1">
        <div class="container">
            <div class="row align-items-center g-5 wow fadeInUp" data-wow-delay=".3s">
                <div class="col-xl-5 col-lg-5">
                    <div class="testimonial__thumb-wrap">
                        <div class="testimonial__thumb">
                            <div class="testimonial__bg"></div>
                            <img src="{{ Vite::asset('resources/imgs/testimonial/testimonial-01.png') }}" alt="img not found">
                            <div class="testimonial__thumb-small">
                                <img class="img-one" src="{{ Vite::asset('resources/imgs/user/user-04.png') }}" alt="img not found">
                                <img class="img-two" src="{{ Vite::asset('resources/imgs/user/user-05.png') }}" alt="img not found">
                                <img class="img-three" src="{{ Vite::asset('resources/imgs/user/user-06.png') }}" alt="img not found">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="testimonial__item">
                        <div class="section__title-wrapper mb-25">
                            <span class="section__subtitle mb-15">Client say</span>
                            <h2 class="section__title">Client Experiences and Testimonials</h2>
                        </div>
                        <div class="swiper testimonial__active p-relative">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial__content">
                                        <div class="testimonial__rating">
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
                                        </div>
                                        <div class="testimonial__text">
                                            <p>“The improved user experience our website immediately noticeable.
                                                Navigation are
                                                more intuitive and the layout our visitors through our content
                                                seamlessly.
                                                The responsive design ensures.”</p>
                                        </div>
                                        <div class="testimonial__avatar-item">
                                            <div class="testimonial__avatar-thumb">
                                                <img src="{{ Vite::asset('resources/imgs/user/user-03.png') }}" alt="img not found">
                                            </div>
                                            <div class="testimonial__avatar-info">
                                                <h6 class="testimonial__avatar-title">Louis</h6>
                                                <span class="testimonial__avatar-designation">Founder </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial__content">
                                        <div class="testimonial__rating">
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
                                        </div>
                                        <div class="testimonial__text">
                                            <p>“The improved user experience our website immediately noticeable.
                                                Navigation are
                                                more intuitive and the layout our visitors through our content
                                                seamlessly.
                                                The responsive design ensures.”</p>
                                        </div>
                                        <div class="testimonial__avatar-item">
                                            <div class="testimonial__avatar-thumb">
                                                <img src="{{ Vite::asset('resources/imgs/user/user-01.png') }}" alt="img not found">
                                            </div>
                                            <div class="testimonial__avatar-info">
                                                <h6 class="testimonial__avatar-title">Alexa</h6>
                                                <span class="testimonial__avatar-designation">Designer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial__content">
                                        <div class="testimonial__rating">
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
                                        </div>
                                        <div class="testimonial__text">
                                            <p>“The improved user experience our website immediately noticeable.
                                                Navigation are
                                                more intuitive and the layout our visitors through our content
                                                seamlessly.
                                                The responsive design ensures.”</p>
                                        </div>
                                        <div class="testimonial__avatar-item">
                                            <div class="testimonial__avatar-thumb">
                                                <img src="{{ Vite::asset('resources/imgs/user/user-02.png') }}" alt="img not found">
                                            </div>
                                            <div class="testimonial__avatar-info">
                                                <h6 class="testimonial__avatar-title">Morish</h6>
                                                <span class="testimonial__avatar-designation">Director</span>
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

            </div>
        </div>
    </section>
    <!-- testimonial area end -->

    <!-- blog area start -->
    <div id="homeblog" class="bd-blog__area section-space">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="section__title-wrapper text-center section__title-space">
                        <span class="section__subtitle">BLOG</span>
                        <h2 class="section__title mb-20">Lea mi último blog</h2>
                        <p class="contentHidden">contentHiddenText</p>
                    </div>
                </div>
            </div>
            <div class="row g-30 wow fadeInUp mb-40" data-wow-delay=".3s">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <section class="blog__wrap blog__item bg-solid">
                        <div class="blog__thumb is-hover">
                            <a href="blog-details.html">
                                <img src="{{ Vite::asset('resources/imgs/blog/blog-01.png') }}" alt="image not found">
                            </a>
                            <div class="blog__meta style-one">
                                <h2 class="date">26 <span class="month">FEB</span></h2>
                            </div>
                        </div>
                        <div class="blog__content">
                            <h4 class="blog__title small"><a href="blog-details.html">Full-Stack Web Developer</a></h4>
                            <p>Explore how subtle micro interactions can enhance user and satisfaction Stay up to-date with the latest trends in web develop including new technologies</p>
                            <div class="blog__btn-text">
                                <a href="blog-details.html" class="underline-btn">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <section class="blog__wrap blog__item bg-solid">
                        <div class="blog__thumb is-hover">
                            <a href="blog-details.html">
                                <img src="{{ Vite::asset('resources/imgs/blog/blog-02.png') }}" alt="image not found">
                            </a>
                            <div class="blog__meta style-one">
                                <h2 class="date">20 <span class="month">FEB</span></h2>
                            </div>
                        </div>
                        <div class="blog__content">
                            <h4 class="blog__title small"><a href="blog-details.html">Company Evidenze</a></h4>
                            <p>Our decision to move from our growth and providing an even better experience for our clients and team members. This move allows us to expand our</p>
                            <div class="blog__btn-text">
                                <a href="blog-details.html" class="underline-btn">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <section class="blog__wrap blog__item bg-solid">
                        <div class="blog__thumb is-hover">
                            <a href="blog-details.html">
                                <img src="{{ Vite::asset('resources/imgs/blog/blog-03.png') }}" alt="image not found">
                            </a>
                            <div class="blog__meta style-one">
                                <h2 class="date">20 <span class="month">DIC</span></h2>
                            </div>
                        </div>
                        <div class="blog__content">
                            <h4 class="blog__title small"><a href="blog-details.html">Company Indra</a></h4>
                            <p>Our decision to move from our growth and providing an even better experience for our clients and team members. This move allows us to expand our</p>
                            <div class="blog__btn-text">
                                <a href="blog-details.html" class="underline-btn">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12 col-md-5">
                    <div class="portfolio__more text-md-center text-center">
                        <a class="bd-btn is-btn-anim" href="">
                            <span class="bd-btn-inner">
                                <span class="bd-btn-normal">Ver todos los blogs</span>
                                <span class="bd-btn-hover">Ver todos los blogs</span>
                                <i class="contentHidden"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog area end -->

    <!-- Contact area start -->
    <div id="homecontact" class="bd-contact__area theme-bg-secondary section-space p-relative fix">
        <div class="contact__shape">
            <img class="contact__shape-one" src="{{ Vite::asset('resources/imgs/shape/contact-shape-01.png') }}" alt="image not found">
            <img class="contact__shape-two" src="{{ Vite::asset('resources/imgs/shape/contact-shape-02.png') }}" alt="image not found">
        </div>
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 order-md-0 order-1 wow fadeInLeft" data-wow-delay=".3s">
                    <div class="section__title-wrapper section__title-space">
                        <span class="section__subtitle mb-15">PONERSE EN CONTACTO</span>
                        <h2 class="section__title">No dudes en contactarme</h2>
                    </div>
                    <div class="floating__form-content">
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="floating__form-input">
                                    <input type="text" class="inputText" required="">
                                    <span class="floating-label">Nombre*</span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="floating__form-input">
                                    <input type="text" class="inputText" required="">
                                    <span class="floating-label">Correo electrónico*</span>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="floating__form-input">
                                    <input type="text" class="inputText" required="">
                                    <span class="floating-label">Asunto</span>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <div class="from__input-box">
                                    <div class="floating__form-input">
                                        <textarea class="textareaText" required=""></textarea>
                                        <span class="floating-label-two">Mensaje*</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact__btn">
                            <a class="bd-btn w-100" href="contact.html">Enviar</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 order-md-1 order-0 wow fadeInRight" data-wow-delay=".3s">
                    <div class="contact__info-wrapper">
                        <div class="contact__thumb">
                            <img src="{{ Vite::asset('resources/imgs/contact/contact-01.png') }}" alt="img not found">
                        </div>
                        <div class="contact__info-item">
                            <ul>
                                <li>
                                    <div class="contact__info">
                                        <div class="contact__info-icon">
                                            <span>
                                <i class="icon-location"></i>
                                </span>
                                        </div>
                                        <div class="contact__info-content">
                                            <h6><a target="_blank" href="https://www.google.com/maps"> Paseo de la chopera 76, Madrid Spain</a></h6>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact__info">
                                        <div class="contact__info-icon">
                                            <span>
                                <i class="icon-phone"></i>
                                </span>
                                        </div>
                                        <div class="contact__info-content">
                                            <h6><a href="tel:+13322078097">+34 605 974 436</a></h6>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact__info">
                                        <div class="contact__info-icon">
                                            <span>
                                <i class="icon-envelope"></i>
                                </span>
                                        </div>
                                        <div class="contact__info-content">
                                            <h6><a href="mailto:me@portlu.com">lujandev@lujandev.com</a></h6>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact area end -->
</main>
@endsection