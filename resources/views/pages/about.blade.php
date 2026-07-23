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
                            <h1 class="breadcrumb__title mb-25">About LujanDev</h1>
                            <p>The story behind the developer, the products and the journey of building in public.</p>
                        </div>
                        <div class="breadcrumb__menu text-center">
                            <nav>
                                <ul>
                                    <li><span><a href="{{ route('welcome') }}">Home</a></span></li>
                                    <li><span>About</span></li>
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
            {{-- About Style 02 template header removed --}}
            <div class="row g-5">
                <div class="col-xl-6 col-lg-6">
                    <div class="about__thumb-wrapper style-two  wow fadeInLeft" data-wow-delay=".3s">
                        <div class="about__thumb">
                            <img src="{{ Vite::asset('resources/imgs/about/about-09.png') }}" alt="image not found">
                        </div>
                        <div class="about__thumb is-small">
                            <img src="{{ Vite::asset('resources/imgs/about/about-small.png') }}" alt="image not found">
                        </div>
                        <div class="about__experience d-none">
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
                                <span class="section__subtitle bg-field">THE STORY</span>
                                <h2 class="section__title">From developer to product builder.</h2>
                                <p class="contentHidden">contentHiddenText</p>
                            </div>
                        </div>
                        <p>I'm Eddy Luján, a full-stack developer based in Madrid. For years, I built software for companies and clients. LujanDev started when I decided to apply that experience to products of my own.</p>
                        
                        <p>
                            The first public experiment was a complete ecommerce built from scratch — frontend, backend, administration, payments, production, tracking, webhooks and customer communication.
                        </p>
                        <p>
                            I didn't build it because the world needed another store. I built it to understand how a real product works beyond the code.
                        </p>

                        {{-- Circular percentage counters removed: template content --}}
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

    <!-- What LujanDev Represents section start -->
    <section class="bd-about__area section-space p-relative theme-bg-secondary">
        <div class="container">
            <div class="row g-5 align-items-lg-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="about__thumb-wrapper wow fadeInLeft" data-wow-delay=".3s">
                        <div class="about__thumb">
                            <img src="{{ Vite::asset('resources/imgs/about/about-01.jpg') }}" alt="LujanDev developer workspace">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="about__content wow fadeInRight" data-wow-delay=".3s">
                        <div class="section__title-wrapper mb-25">
                            <div class="section__title-wrapper">
                                <span class="section__subtitle">WHAT LUJANDEV REPRESENTS</span>
                                <h2 class="section__title">Code is only the beginning.</h2>
                                <p class="contentHidden">contentHiddenText</p>
                            </div>
                        </div>
                        <p>LujanDev is where I build, launch and document real products. I share the decisions, architecture, bugs, failures and lessons behind every build.</p>
                        <p>The products may change. The principle stays the same: turn ideas into working systems and learn from real-world use.</p>
                        <div class="about__counter-wrapper mb-30">
                            <p class="fw-bold text-white">Code. Products. Systems. Lessons.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- What LujanDev Represents section end -->

    <!-- Behind the Brand section start -->
    <section class="bd-about__area section-space">
        <div class="container">
            <div class="row g-5 align-items-lg-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="about__content wow fadeInLeft" data-wow-delay=".3s">
                        <div class="section__title-wrapper mb-25">
                            <div class="section__title-wrapper">
                                <span class="section__subtitle bg-field">BEHIND THE BRAND</span>
                                <h2 class="section__title">Developer today. Founder in progress.</h2>
                                <p class="contentHidden">contentHiddenText</p>
                            </div>
                        </div>
                        <p>I'm not presenting myself as someone who has already figured everything out. LujanDev documents the transition from writing code for projects to building products, audiences and a brand of my own.</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="about__thumb-wrapper wow fadeInRight" data-wow-delay=".3s">
                        <div class="about__thumb">
                            <img src="{{ Vite::asset('resources/imgs/about/about-09.png') }}" alt="Developer building products">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Behind the Brand section end -->

    {{-- Template sections removed: agency/team/testimonials placeholder content incompatible with solo developer brand --}}

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
                                <span class="section__subtitle bg-field">THE APPROACH</span>
                                <h2 class="section__title mb-20">From first commit to real-world use.</h2>
                                <p>I build products to understand the complete system — not only the interface or the backend, but also payments, operations, automation, communication and user experience.</p> <br>
                                <p>Specialized in <strong>Laravel</strong> for robust backends, <strong>Node.js</strong> for scalable APIs, and <strong>Angular</strong> for dynamic frontends. I build <strong>RESTful APIs</strong>, real-time features, and full-stack applications from idea to production.</p> <br>
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
                            <img src="{{ Vite::asset('resources/imgs/skill/skill-01.png') }}" alt="Developer coding workspace">
                        </div>
                        <div class="video__content text-center">
                            <div class="video__play">
                                <video id="videoPlayer" autoplay loop muted playsinline width="416" height="545" style="object-fit: cover; border-radius: 10px;">
                                    <source src="{{ Vite::asset('resources/imgs/video/about-lujandev.mp4') }}" type="video/mp4">
                                    Your browser does not support video playback.
                                </video>
                            </div>
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

    {{-- Removed sections: service/team/award/testimonial/brand areas with placeholder content incompatible with solo developer brand --}}

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
