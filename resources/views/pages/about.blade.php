@extends('layouts.app')

@section('content')
<!-- Body main wrapper start -->
<main>

    <!-- breadcrumb area  start -->
    <section class="breadcrumb__area p-relative style-two is-breadcrumb-space">
        <div class="breadcrumb__thumb-bg include-bg bg__thumb-position" data-background="{{ Vite::asset('resources/imgs/breadcrumb/breadcrumb-bg-12.png') }}"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-10">
                    <div class="breadcrumb__content-wrapper p-relative z-index-1">
                        <div class="breadcrumb__title-wrapper text-center">
                            <h1 class="breadcrumb__title mb-25">Indie Hacker & Builder 🚀</h1>
                        </div>
                        <div class="breadcrumb__menu text-center">
                            <nav>
                                <ul>
                                    <li><span><a href="{{ route('welcome') }}">Home</a></span></li>
                                    <li><span>About me</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area  end -->

    <!-- about style 02 start -->
    {{-- <section class="bd-about__area section-space-bottom"> --}}
    {{-- <section class="bd-about__area section-space"> --}}
    <section class="bd-about__area section-space-bottom">
        <div class="container">
            <div class="row align-items-center d-none">
                <div class="col-12">
                    <div class="section__title-wrapper section__title-space text-center">
                        <div class="elements-section__wrapper elements-line">
                            <div class="separator__line line-left"></div>
                            <div class="elements-title__wrapper">
                                <h4 class="section__title elements__title">About Style 02</h4>
                            </div>
                            <div class="separator__line line-right"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-xl-6 col-lg-6">
                    <div class="about__thumb-wrapper style-two  wow fadeInLeft" data-wow-delay=".3s">
                        <div class="about__thumb">
                            <img src="{{ Vite::asset('resources/imgs/about/about-09.png') }}" alt="image not found">
                        </div>
                        <div class="about__thumb is-small">
                            <img src="{{ Vite::asset('resources/imgs/about/about-small.png') }}" alt="image not found">
                        </div>
                        <div class="about__experience">
                            <div class="about__experience-bg"></div>
                            <div class="about__experience-content">
                                <div class="about__experience-content-inner">
                                    <h2 class="about__experience-title"><span class="counter">12</span>+</h2>
                                    <p>MVPs Shipped</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6">
                    <div class="about__content style-two  wow fadeInRight" data-wow-delay=".3s">
                        <div class="section__title-wrapper mb-25">
                            <div class="section__title-wrapper">
                                <span class="section__subtitle bg-field">My Journey</span>
                                <h2 class="section__title">My Journey as an Indie Hacker</h2>
                                <p class="contentHidden">contentHiddenText</p>
                            </div>
                        </div>
                        <p>I build <strong>micro-SaaS products</strong>, test ideas fast, and <strong>learn in public</strong>. My focus is on shipping MVPs quickly, getting feedback, and iterating based on real user needs.</p>
                        
                        <span class="section__subtitle ">From Corporate to Indie</span>
                        <p>
                            Previously worked at <strong>Indra</strong> and <strong>Evidenze</strong>, gaining solid full-stack experience building enterprise applications. That corporate background taught me how to ship reliable software, but I wanted more <strong>creative freedom</strong> and direct impact.
                            Now I experiment with product ideas, validate them quickly, and build in the open. I share my progress, failures, and wins along the way.
                        </p>
                        <span class="section__subtitle">Projects & Experiments</span>
                        <p>
                            I ship MVPs with the <strong>Mean Stack</strong> (MySQL, Express, Angular, Node.js) and <strong>Laravel</strong> for backend-heavy projects. Every project is a learning opportunity—some succeed, some fail, but all teach me something valuable.
                            I believe in <strong>building, launching, and learning</strong> rather than endless planning. My goal: create products that solve real problems and generate revenue while maintaining full control over my time and projects.
                        </p>

                        <div class="counter__wrapper d-none" id="percentage">
                            <div class="counter__item">
                                <div class="counter__canvas">
                                    <div class="circle__counter" data-count="75">
                                        <span class="counter__percentage"></span>
                                    </div>
                                </div>
                                <p class="counter__title">Frontend</p>
                            </div>
                            <div class="counter__item">
                                <div class="counter__canvas">
                                    <div class="circle__counter" data-count="90">
                                        <span class="counter__percentage"></span>
                                    </div>
                                </div>
                                <p class="counter__title">Backend</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about style 02 end -->

    <!-- Section divider -->
    <div class="section__divider d-none">
        <hr>
    </div>

    <!-- about style 04 start -->
    <section class="bd-about__area section-space p-relative theme-bg-secondary d-none">
        <div class="about__shape">
            <img class="about__shape-two" src="{{ Vite::asset('resources/imgs/shape/lamp-shape.png') }}" alt="image not found">
        </div>
        <div class="container">
            <div class="row align-items-center d-none">
                <div class="col-12">
                    <div class="section__title-wrapper section__title-space text-center">
                        <div class="elements-section__wrapper elements-line">
                            <div class="separator__line line-left"></div>
                            <div class="elements-title__wrapper">
                                <h4 class="section__title elements__title">About Style 04</h4>
                            </div>
                            <div class="separator__line line-right"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="about__thumb-wrapper style-four wow fadeInLeft" data-wow-delay=".3s">
                        <div class="about__thumb">
                            <img src="{{ Vite::asset('resources/imgs/about/about-04.png') }}" alt="image not found">
                            <div class="about__shape">
                                <img class="about__shape-one" src="{{ Vite::asset('resources/imgs/shape/dot-small.png') }}" alt="image not found">
                            </div>
                            <div class="about__counter-wrapper d-none">
                                <div class="about__counter-info">
                                    <div class="about__counter-count">
                                        <h2><span class="counter">20</span>+</h2>
                                    </div>
                                    <p>Years of Experience</p>
                                </div>
                                <div class="about__counter-info">
                                    <div class="about__counter-count">
                                        <h2><span class="counter">500</span>+</h2>
                                    </div>
                                    <p>Stratified Customers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="about__content style-four  wow fadeInRight" data-wow-delay=".3s">
                        <div class="section__title-wrapper mb-25">
                            <div class="section__title-wrapper">
                                <span class="section__subtitle sec-border">Who I Am</span>
                                <h2 class="section__title">My history</h2>
                                <p class="contentHidden">contentHiddenText</p>
                            </div>
                        </div>
                        <p>Our agency thrives on collaboration, where each member of our team brings unique perspective expertise
                            to the table. We are believe in the power creativity transform.
                        </p>
                        <p>Our agency thrives on collaboration, where each member of our team brings unique perspective expertise
                            to the table. We are believe in the power creativity transform.
                        </p>
                        <p>Our agency thrives on collaboration, where each member of our team brings unique perspective expertise
                            to the table. We are believe in the power creativity transform.
                        </p>
                        <p>Our agency thrives on collaboration, where each member of our team brings unique perspective expertise
                            to the table. We are believe in the power creativity transform.
                        </p>
                        <div class="about__info-list d-none">
                            <div class="about__info-item">
                                <div class="about__info-icon">
                                    <span><i class="icon-partner"></i></span>
                                </div>
                                <div class="about__info-content">
                                    <h5>Trustworthy</h5>
                                    <p>Candid heading and confrontation</p>
                                </div>
                            </div>
                            <div class="about__info-item">
                                <div class="about__info-icon">
                                    <span><i class="icon-grow"></i></span>
                                </div>
                                <div class="about__info-content">
                                    <h5>Improvement</h5>
                                    <p>Progress title and debate</p>
                                </div>
                            </div>
                            <div class="about__info-item">
                                <div class="about__info-icon">
                                    <span><i class="icon-strategy"></i></span>
                                </div>
                                <div class="about__info-content">
                                    <h5>Strategy</h5>
                                    <p>Approach heading and dispute</p>
                                </div>
                            </div>
                        </div>
                        <div class="about__btn">
                            <a class="bd-btn is-btn-anim bordered-blue" href="about.html">
                                <span class="bd-btn-inner"><span class="bd-btn-normal">Know more</span>
                                <span class="bd-btn-hover">Know more</span>
                                <i class="contentHidden"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about style 04 end -->

    <!-- portfolio slider area start -->
    <div class="bd-portfoli-details-area section-space fix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="portfolio__wrapper style-six portfolio-details wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                        <div class="swiper portfolio-details__active">
                            <div class="swiper-wrapper">
                                {{-- @foreach ($abouts as $about)
                                        <div class="swiper-slide">
                                            <div class=" portfolio__item style-six portfolio-details">
                                                <div class="portfolio__item-thumb">
                                                    <img src="{{ asset('storage/' . $about->images) }}" alt="{{ $about->title }}">
                                                </div>
                                            </div>
                                        </div>
                                @endforeach --}}
                                 
                                <div class="swiper-slide">
                                    <div class=" portfolio__item style-six portfolio-details">
                                        <div class="portfolio__item-thumb">
                                            <img src="{{ Vite::asset('resources/imgs/portfolio/large/portfolio-large-01.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class=" portfolio__item style-six portfolio-details">
                                        <div class="portfolio__item-thumb">
                                            <img src="{{ Vite::asset('resources/imgs/portfolio/large/portfolio-large-02.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class=" portfolio__item style-six portfolio-details">
                                        <div class="portfolio__item-thumb">
                                            <img src="{{ Vite::asset('resources/imgs/portfolio/large/portfolio-large-03.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class=" portfolio__item style-six portfolio-details">
                                        <div class="portfolio__item-thumb">
                                            <img src="{{ Vite::asset('resources/imgs/portfolio/large/portfolio-large-04.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class=" portfolio__item style-six portfolio-details">
                                        <div class="portfolio__item-thumb">
                                            <img src="{{ Vite::asset('resources/imgs/portfolio/large/portfolio-large-05.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class=" portfolio__item style-six portfolio-details">
                                        <div class="portfolio__item-thumb">
                                            <img src="{{ Vite::asset('resources/imgs/portfolio/large/portfolio-large-06.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class=" portfolio__item style-six portfolio-details">
                                        <div class="portfolio__item-thumb">
                                            <img src="{{ Vite::asset('resources/imgs/portfolio/large/portfolio-large-07.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class=" portfolio__item style-six portfolio-details">
                                        <div class="portfolio__item-thumb">
                                            <img src="{{ Vite::asset('resources/imgs/portfolio/large/portfolio-large-08.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
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
            </div>
        </div>
    </div>
    <!-- portfolio slider area end -->

    <!-- skill area start -->
    <section class="bd-skill__area section-space theme-bg-secondary">
        <div class="container">
            <div class="row g-5">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="skill__content-wrapper  wow fadeInLeft" data-wow-delay=".3s">
                        <div class="section__title-wrapper mb-40">
                            <div class="section__title-wrapper">
                                <span class="section__subtitle bg-field">MY TECH STACK</span>
                                <h2 class="section__title mb-20">Full-Stack Indie Builder</h2>
                                <p>I ship products fast using battle-tested tech: <strong>Laravel</strong> for robust backends, <strong>Node.js</strong> for scalable APIs, and <strong>Angular</strong> for dynamic frontends. My stack choice depends on the project—I optimize for speed and reliability.</p> <br>
                                <p>Specialized in the <strong>Mean Stack</strong> (MongoDB, Express, Angular, Node.js) for rapid prototyping and <strong>Laravel</strong> when I need proven stability. I build <strong>RESTful APIs</strong>, real-time features, and full-stack applications from idea to production.</p> <br>
                                <em>My approach: ship MVPs in weeks, not months. Validate fast, iterate based on feedback, and scale what works.</em>
                                
                            </div>
                        </div>
                        <div class="bd-progress__wrap">
                            <div class="bd__progress-bar style-three">
                                <div class="bd__progress">
                                    <div class="bd__progress-wrapper">
                                        <div class="bd__progress-head">
                                            <h6 class="bd__progress-title">Laravel</h6>
                                            <p class="bd__progress-percentage">90%</p>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLeft" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="bd__progress-wrapper">
                                        <div class="bd__progress-head">
                                            <h6 class="bd__progress-title">Javascript</h6>
                                            <p class="bd__progress-percentage">60%</p>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLeft" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="bd__progress-wrapper">
                                        <div class="bd__progress-head">
                                            <h6 class="bd__progress-title">Angular</h6>
                                            <p class="bd__progress-percentage">70%</p>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLeft" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="bd__progress-wrapper">
                                        <div class="bd__progress-head">
                                            <h6 class="bd__progress-title">NodeJS</h6>
                                            <p class="bd__progress-percentage">70%</p>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLeft" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="bd__progress-wrapper">
                                        <div class="bd__progress-head">
                                            <h6 class="bd__progress-title">Database | MySQL</h6>
                                            <p class="bd__progress-percentage">90%</p>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLeft" role="progressbar" style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="bd__progress-wrapper">
                                        <div class="bd__progress-head">
                                            <h6 class="bd__progress-title">UX/UI Design</h6>
                                            <p class="bd__progress-percentage">50%</p>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLeft" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                <span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="skill__thumb-wrapper wow fadeInRight" data-wow-delay=".3s">
                        <div class="skill__thumb">
                            <img src="{{ Vite::asset('resources/imgs/skill/skill-01.png') }}" alt="image not found">
                        </div>
                        <div class="video__content text-center">
                            <div class="video__play">
                                {{-- <div class="about__thumb"> --}}
                                {{-- <a href="https://www.youtube.com/watch?v=go7QYaQR494" class="play-btn popup-video"><iclass="fa-sharp icon-play"></i></a> --}}
                                <video id="videoPlayer" autoplay loop muted playsinline width="416" height="545" style="object-fit: cover; border-radius: 10px;">
                                    <source src="{{ Vite::asset('resources/imgs/video/about-lujandev.mp4') }}" type="video/mp4">
                                    Tu navegador no soporta la reproducción de videos.
                                </video>
                                
                                {{-- </div> --}}
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="mt-3 text-center text-white">
                        <button id="toggleSound" onclick="toggleMute()">🔊 Activar sonido</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- skill area end -->

    <!-- service area start -->
    <section class="bd-service__area section-space d-none">
        <div class="container">
            <div class="row g-5">
                
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 d-none">
                    <div class="service__wrapper service__item style-seven bg-solid text-center is-padding-reduce is-transition wow fadeIn" data-wow-delay=".5s">
                        <span class="service__icon-wrap">
                    <i class="icon-design"></i>
                 </span>
                        <div class="service__content">
                            <h5 class="service__title"><a href="">Web Design</a></h5>
                            <p>Functional & attractive <br> web applications.</p>
                            <div class="service__more">
                                <a class="bd-text-btn style-two" href="{{ route('service') }}">Read more <span
                             class="icon__box">
                             <i class="fa-regular fa-arrow-right-long icon__first"></i>
                             <i class="fa-regular fa-arrow-right-long icon__second"></i>
                          </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="service__wrapper service__item style-seven bg-solid text-center is-padding-reduce is-transition wow fadeIn" data-wow-delay=".7s">
                        <span class="service__icon-wrap">
                    <i class="icon-project"></i>
                 </span>
                        <div class="service__content">
                            <h5 class="service__title"><a href="">Projects</a></h5>
                            <p>Ship MVPs <br> fast & iterate.</p>
                            <div class="service__more">

                                <a class="bd-text-btn style-two" href="{{ route('my-project') }}">Read more <span
                             class="icon__box">
                             <i class="fa-regular fa-arrow-right-long icon__first"></i>
                             <i class="fa-regular fa-arrow-right-long icon__second"></i>
                          </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="service__wrapper service__item style-seven bg-solid text-center is-padding-reduce is-transition wow fadeIn" data-wow-delay=".3s">
                        <span class="service__icon-wrap"><i class="icon-ux-design"></i></span>
                        <div class="service__content">
                            <h5 class="service__title"><a href="">UX/UI Design</a></h5>
                            <p>User-focused <br> experiences.</p>
                            <div class="service__more">
                                <a class="bd-text-btn style-two" href="#">Read more 
                                    <span class="icon__box">
                                        <i class="fa-regular fa-arrow-right-long icon__first"></i>
                                        <i class="fa-regular fa-arrow-right-long icon__second"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 d-none">
                    <div class="service__wrapper service__item style-seven bg-solid text-center is-padding-reduce is-transition wow fadeIn" data-wow-delay=".9s">
                        <span class="service__icon-wrap">
                    <i class="icon-animation"></i>
                 </span>
                        <div class="service__content">
                            <h5 class="service__title"><a href="">Mobile Apps</a></h5>
                            <p>Learning iOS (Swift) <br> & Android (Kotlin)</p>
                            <div class="service__more">

                                <a class="bd-text-btn style-two" href="#">Read more <span
                             class="icon__box">
                             <i class="fa-regular fa-arrow-right-long icon__first"></i>
                             <i class="fa-regular fa-arrow-right-long icon__second"></i>
                          </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service area start -->

    <!-- team area start -->
    <section class="bd-team__area section-space theme-bg-secondary d-none">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10">
                    <div class="section__title-wrapper text-center section__title-space">
                        <span class="section__subtitle sec-border">OUR TEAM</span>
                        <h2 class="section__title mb-20">Our Best Team</h2>
                        <p class="section__paragraph is-br-none">We maintain an open, inclusive, and collaborative <br> environment where ideas flow freely.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="swiper team__active">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                                <div class="team__wrap team__item text-center">
                                    <div class="team__thumb bg-solid">
                                        <a href="team-details.html">
                                            <img src="{{ Vite::asset('resources/imgs/team/team-01.png') }}" alt="image not found">
                                        </a>
                                    </div>
                                    <div class="team__content">
                                        <h6 class="team__title"><a href="team-details.html">Deli Yanky</a></h6>
                                        <span class="team__designation">Creative Director</span>
                                        <div class="team__social">
                                            <ul>
                                                <li><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                <li><a href="https://www.facebook.com/"><i class="fa-brands fa-twitter"></i></a></li>
                                                <li><a href="https://www.facebook.com/"><i class="fa-brands fa-linkedin"></i></a></li>
                                                <li><a href="team__socialYt"><i class="fa-brands fa-youtube"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="swiper-slide wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                                <div class="team__wrap team__item text-center">
                                    <div class="team__thumb bg-solid">
                                        <a href="team-details.html">
                                            <img src="{{ Vite::asset('resources/imgs/team/team-02.png') }}" alt="image not found">
                                        </a>
                                    </div>
                                    <div class="team__content">
                                        <h6 class="team__title"><a href="team-details.html">Zin Denvar</a></h6>
                                        <span class="team__designation">Founder</span>
                                        <div class="team__social">
                                            <ul>
                                                <li><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                <li><a href="https://www.facebook.com/"><i class="fa-brands fa-twitter"></i></a></li>
                                                <li><a href="https://www.facebook.com/"><i class="fa-brands fa-linkedin"></i></a></li>
                                                <li><a href="team__socialYt"><i class="fa-brands fa-youtube"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="swiper-slide wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                                <div class="team__wrap team__item text-center">
                                    <div class="team__thumb bg-solid">
                                        <a href="team-details.html">
                                            <img src="{{ Vite::asset('resources/imgs/team/team-03.png') }}" alt="image not found">
                                        </a>
                                    </div>
                                    <div class="team__content">
                                        <h6 class="team__title"><a href="team-details.html">Hanry Lucas</a></h6>
                                        <span class="team__designation">Developer</span>
                                        <div class="team__social">
                                            <ul>
                                                <li><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                <li><a href="https://www.facebook.com/"><i class="fa-brands fa-twitter"></i></a></li>
                                                <li><a href="https://www.facebook.com/"><i class="fa-brands fa-linkedin"></i></a></li>
                                                <li><a href="team__socialYt"><i class="fa-brands fa-youtube"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="swiper-slide wow fadeInUp" data-wow-delay=".9s" data-wow-duration="1s">
                                <div class="team__wrap team__item text-center">
                                    <div class="team__thumb bg-solid">
                                        <a href="team-details.html">
                                            <img src="{{ Vite::asset('resources/imgs/team/team-04.png') }}" alt="image not found">
                                        </a>
                                    </div>
                                    <div class="team__content">
                                        <h6 class="team__title"><a href="team-details.html">Annette</a></h6>
                                        <span class="team__designation">Product Designer</span>
                                        <div class="team__social">
                                            <ul>
                                                <li><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                <li><a href="https://www.facebook.com/"><i class="fa-brands fa-twitter"></i></a></li>
                                                <li><a href="https://www.facebook.com/"><i class="fa-brands fa-linkedin"></i></a></li>
                                                <li><a href="team__socialYt"><i class="fa-brands fa-youtube"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="swiper-slide">
                                <div class="team__wrap team__item text-center">
                                    <div class="team__thumb bg-solid">
                                        <a href="team-details.html">
                                            <img src="{{ Vite::asset('resources/imgs/team/team-01.png') }}" alt="image not found">
                                        </a>
                                    </div>
                                    <div class="team__content">
                                        <h6 class="team__title"><a href="team-details.html">Deli Yanky</a></h6>
                                        <span class="team__designation">Creative Director</span>
                                        <div class="team__social">
                                            <ul>
                                                <li><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                <li><a href="https://www.facebook.com/"><i class="fa-brands fa-twitter"></i></a></li>
                                                <li><a href="https://www.facebook.com/"><i class="fa-brands fa-linkedin"></i></a></li>
                                                <li><a href="team__socialYt"><i class="fa-brands fa-youtube"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="swiper-slide">
                                <div class="team__wrap team__item text-center">
                                    <div class="team__thumb bg-solid">
                                        <a href="team-details.html">
                                            <img src="{{ Vite::asset('resources/imgs/team/team-03.png') }}" alt="image not found">
                                        </a>
                                    </div>
                                    <div class="team__content">
                                        <h6 class="team__title"><a href="team-details.html">Hanry Lucas</a></h6>
                                        <span class="team__designation">Developer</span>
                                        <div class="team__social">
                                            <ul>
                                                <li><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                <li><a href="https://www.facebook.com/"><i class="fa-brands fa-twitter"></i></a></li>
                                                <li><a href="https://www.facebook.com/"><i class="fa-brands fa-linkedin"></i></a></li>
                                                <li><a href="team__socialYt"><i class="fa-brands fa-youtube"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <!-- If we need pagination -->
                        <div class="pagination__wrapper">
                            <div class="bd-swiper-dot text-center"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team area end -->

    <!-- award area start -->
    <section class="bd-award__area section-space d-none">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="section__title-wrapper section__title-space">
                        <div class="section__title-wrapper">
                            <span class="section__subtitle bg-field">ACHIEVEMENTS</span>
                            <h2 class="section__title">Milestones & Learning</h2>
                            <p class="contentHidden">contentHiddenText</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="award__single-item style-two  wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                        <div class="award__icon">
                            <span>
                       <i class="icon-trophy"></i>
                    </span>
                        </div>
                        <div class="award__content">
                            <h5 class="award__title"><a href="service-details.html">IT admin</a></h5>
                            <p>Virgen de la paz / 2011</p>
                        </div>
                        <div class="award__btn">
                            <a class="circle-btn" href="service-details.html"> <span class="icon__box"> <i
                             class="fa-regular fa-arrow-right-long"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="award__single-item style-two  wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                        <div class="award__icon">
                            <span>
                       <i class="icon-trophy-02"></i>
                    </span>
                        </div>
                        <div class="award__content">
                            <h5 class="award__title"><a href="service-details.html">Development</a></h5>
                            <p>San roman / 2016</p>
                        </div>
                        <div class="award__btn">
                            <a class="circle-btn" href="service-details.html"> <span class="icon__box"> <i
                             class="fa-regular fa-arrow-right-long"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="award__single-item style-two  wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                        <div class="award__icon">
                            <span>
                       <i class="icon-trophy-03"></i>
                    </span>
                        </div>
                        <div class="award__content">
                            <h5 class="award__title"><a href="service-details.html">Apps Móviles</a></h5>
                            <p>TokioSchool / 2024</p>
                        </div>
                        <div class="award__btn">
                            <a class="circle-btn" href="service-details.html"> <span class="icon__box"> <i
                             class="fa-regular fa-arrow-right-long"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 d-none">
                    <div class="award__single-item style-two  wow fadeInUp" data-wow-delay=".9s" data-wow-duration="1s">
                        <div class="award__icon">
                            <span>
                       <i class="icon-trophy-04"></i>
                    </span>
                        </div>
                        <div class="award__content">
                            <h5 class="award__title"><a href="service-details.html">Project</a></h5>
                            <p>Cartier / 2019</p>
                        </div>
                        <div class="award__btn">
                            <a class="circle-btn" href="service-details.html"> <span class="icon__box"> <i
                             class="fa-regular fa-arrow-right-long"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- award area end -->

    <!-- testimonial area start -->
    <section class="bd-testimonial__area section-space p-relative style-seven d-none">
        <div class="bg__thumb-position include-bg is-overlay" data-background="{{ Vite::asset('resources/imgs/bg/testimonial-bg-01.png') }}">
        </div>
        <div class="container">
            <div class="row g-5 justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="section__title-wrapper section__title-space text-center">
                        <span class="section__subtitle bg-field">FEEDBACK</span>
                        <h2 class="section__title">What People Say</h2>
                        <p class="contentHidden">contentHidden</p>
                    </div>
                </div>
            </div>
            <div class=" row">
                <div class="testimonial__slider wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                    <div class="swiper testimonial__active-two">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial__wrapper style-seven">
                                    <div class="testimonial__top-item">
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
                                        <div class="testimonial__shape">
                                            <img class="testimonial__shape-quote" src="{{ Vite::asset('resources/imgs/shape/testimonial-quote-07.png') }}" alt="image not found">
                                        </div>
                                    </div>
                                    <div class="testimonial__item">
                                        <div class="testimonial__content">
                                            <div class="testimonial__text">
                                                <p>“La experiencia de usuario mejorada en nuestro sitio web es evidente desde el primer momento. La navegación es más intuitiva y la disposición del contenido guía a los visitantes de forma fluida. Además, el diseño responsivo garantiza una visualización óptima en cualquier dispositivo.”</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial__thumb-wrap">
                                        <div class="testimonial__thumb">
                                            <img src="{{ Vite::asset('resources/imgs/user/user-03.png') }}" alt="image not found">
                                        </div>
                                        <div class="testimonial__avatar-info">
                                            <h6 class="testimonial__avatar-title">Louis</h6>
                                            <span class="testimonial__avatar-designation">Founder </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial__wrapper style-seven">
                                    <div class="testimonial__top-item">
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
                                        <div class="testimonial__shape">
                                            <img class="testimonial__shape-quote" src="{{ Vite::asset('resources/imgs/shape/testimonial-quote-07.png') }}" alt="image not found">
                                        </div>
                                    </div>
                                    <div class="testimonial__item">
                                        <div class="testimonial__content">
                                            <div class="testimonial__text">
                                                <p>“El rediseño de nuestro sitio web ha mejorado la experiencia del usuario, con una navegación más ágil e intuitiva. Las secciones están organizadas para facilitar el acceso a la información de manera rápida y sencilla, y su diseño responsivo garantiza una visualización óptima en cualquier dispositivo.”</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial__thumb-wrap">
                                        <div class="testimonial__thumb">
                                            <img src="{{ Vite::asset('resources/imgs/user/user-06.png') }}" alt="image not found">
                                        </div>
                                        <div class="testimonial__avatar-info">
                                            <h6 class="testimonial__avatar-title">Alex</h6>
                                            <span class="testimonial__avatar-designation">Designer </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial__wrapper style-seven">
                                    <div class="testimonial__top-item">
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
                                        <div class="testimonial__shape">
                                            <img class="testimonial__shape-quote" src="{{ Vite::asset('resources/imgs/shape/testimonial-quote-07.png') }}" alt="image not found">
                                        </div>
                                    </div>
                                    <div class="testimonial__item">
                                        <div class="testimonial__content">
                                            <div class="testimonial__text">
                                                <p>“Nuestro nuevo diseño mejora la experiencia del usuario con una navegación intuitiva y un diseño adaptable para cualquier dispositivo.”</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial__thumb-wrap">
                                        <div class="testimonial__thumb">
                                            <img src="{{ Vite::asset('resources/imgs/user/user-05.png') }}" alt="image not found">
                                        </div>
                                        <div class="testimonial__avatar-info">
                                            <h6 class="testimonial__avatar-title">Morish</h6>
                                            <span class="testimonial__avatar-designation">Manager </span>
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

    <!-- brand area start -->
    <div class="brand__area section-space theme-bg-secondary d-none">
        <div class="brand__wrapper style-two wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
            <div class="container">
                <div class="swiper brand__active">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="brand__item text-center">
                                <div class="brand__thumb">
                                    <img src="{{ Vite::asset('resources/imgs/brand/02/brand-01.png') }}" alt="image not found">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand__item text-center">
                                <div class="brand__thumb">
                                    <img src="{{ Vite::asset('resources/imgs/brand/02/brand-02.png') }}" alt="image not found">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand__item text-center">
                                <div class="brand__thumb">
                                    <img src="{{ Vite::asset('resources/imgs/brand/02/brand-03.png') }}" alt="image not found">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand__item text-center">
                                <div class="brand__thumb">
                                    <img src="{{ Vite::asset('resources/imgs/brand/02/brand-04.png') }}" alt="image not found">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand area end -->

</main>
<!-- Body main wrapper end -->

<script>
    function toggleMute() {
        let video = document.getElementById("videoPlayer");
        video.muted = !video.muted;
        document.getElementById("toggleSound").textContent = video.muted ? "🔊 Activar sonido" : "🔇 Silenciar";
    }
</script>

@endsection