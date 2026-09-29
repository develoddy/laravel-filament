@extends('layouts.app')

@section('content')
<!-- Body main wrapper start -->
<main>

    @php
        $isExperiment = $portfolio->category?->slug === 'experiment';
        $categoryLabel = $isExperiment ? 'EXPERIMENT' : 'PRODUCT';

        $ctaLabel = $isExperiment
            ? 'View Live Experiment'
            : 'Visit Product';
    @endphp


    {{-- ============================================================
        HERO / PROJECT HEADER
    ============================================================ --}}
    <section class="project-detail-hero section-space">
        <div class="container">

            <div class="project-detail-hero__content">

                {{-- Category --}}
                <span class="section__subtitle bg-field mb-20">
                    {{ $categoryLabel }}
                </span>

                {{-- Title --}}
                <h1 class="project-detail-hero__title">
                    {{ $detail->title ?? $portfolio->titulo }}
                </h1>

                {{-- Short description from Portfolio --}}
                @if(!empty($portfolio->descripcion))
                    <div class="project-detail-hero__intro">
                        {!! $portfolio->descripcion !!}
                    </div>
                @endif


                {{-- Metadata --}}
                <div class="project-detail-meta">

                    <div class="project-detail-meta__item">
                        <span class="project-detail-meta__label">
                            <i class="fa-regular fa-user"></i>
                            Builder
                        </span>

                        <strong>@lujandev</strong>
                    </div>


                    <div class="project-detail-meta__item">
                        <span class="project-detail-meta__label">
                            <i class="fa-light fa-award"></i>
                            Status
                        </span>

                        <strong>
                            {{ $detail->status ?? 'Coming Soon' }}
                        </strong>
                    </div>


                    <div class="project-detail-meta__item">
                        <span class="project-detail-meta__label">
                            <i class="fa-sharp fa-light fa-layer-group"></i>
                            Stack
                        </span>

                        <strong>
                            {{ $detail->stack ?? 'N/A' }}
                        </strong>
                    </div>


                    <div class="project-detail-meta__item">
                        <span class="project-detail-meta__label">
                            <i class="fa-light fa-calendar-days"></i>
                            Launched
                        </span>

                        <strong>
                            {{ $detail->launched_at
                                ? \Carbon\Carbon::parse($detail->launched_at)->format('M d, Y')
                                : 'Coming Soon'
                            }}
                        </strong>
                    </div>

                </div>


                {{-- CTA --}}
                @if(!empty($detail->mvp_url))
                    <div class="project-detail-hero__cta">

                        <a
                            class="bd-btn is-btn-anim"
                            href="{{ $detail->mvp_url }}"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            <span class="bd-btn-inner">

                                <span class="bd-btn-normal">
                                    {{ $ctaLabel }}
                                </span>

                                <span class="bd-btn-hover">
                                    {{ $ctaLabel }}
                                </span>

                                <i class="contentHidden"></i>

                            </span>
                        </a>

                    </div>
                @endif

            </div>

        </div>
    </section>


    {{-- ============================================================
        CASE STUDY
    ============================================================ --}}
    @if(!empty($detail->description))

        <section class="project-case-study section-space-bottom">

            <div class="container">

                <div class="project-case-study__wrapper">

                    <div class="project-case-study__label">
                        {{ $isExperiment ? 'CASE STUDY' : 'BUILD DETAILS' }}
                    </div>

                    <article class="project-case-study__content">
                        {!! $detail->description !!}
                    </article>

                </div>

            </div>

        </section>

    @endif


    {{-- ============================================================
        EXPERIMENT / PRODUCT VISUALS
    ============================================================ --}}

    @if($detail && is_array($detail->images) && count($detail->images) > 0)

        <div class="project-visuals-heading">

            <div class="container">

                <div class="project-visuals-heading__inner">

                    <span class="project-case-study__label">
                        {{ $isExperiment ? 'EXPERIMENT VISUALS' : 'PRODUCT VISUALS' }}
                    </span>

                    <h3>
                        {{ $isExperiment
                            ? 'How the experiment was tested'
                            : 'Inside the build'
                        }}
                    </h3>

                </div>

            </div>

        </div>

    @endif

    <!-- portfolio slider area start -->
    <div class="bd-portfoli-details-area section-space-bottom fix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @if($detail && is_array($detail->images) && count($detail->images) > 0)
                        <div class="portfolio__wrapper style-six portfolio-details wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <div class="swiper portfolio-details__active">
                                <div class="swiper-wrapper">
                                    @if($detail && is_array($detail->images))
                                        @foreach($detail->images as $img)
                                        <div class="swiper-slide">
                                            <div class=" portfolio__item style-six portfolio-details">
                                                <div class="portfolio__item-thumb">
                                                    <img src="{{ asset('storage/' . $img) }}" alt="{{ $detail->title ?? 'Project' }} screenshot">
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    @endif
    
                                    {{-- <div class="swiper-slide">
                                        <div class=" portfolio__item style-six portfolio-details">
                                            <div class="portfolio__item-thumb">
                                                <img src="{{ Vite::asset('resources/imgs/portfolio/large/portfolio-large-01.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class=" portfolio__item style-six portfolio-details">
                                            <div class="portfolio__item-thumb">
                                                <img src="{{ Vite::asset('resources/imgs/portfolio/large/portfolio-large-02.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class=" portfolio__item style-six portfolio-details">
                                            <div class="portfolio__item-thumb">
                                                <img src="{{ Vite::asset('resources/imgs/portfolio/large/portfolio-large-03.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class=" portfolio__item style-six portfolio-details">
                                            <div class="portfolio__item-thumb">
                                                <img src="{{ Vite::asset('resources/imgs/portfolio/large/portfolio-large-04.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                                <!-- If we need navigation buttons -->
                                <div class="portfolio__navigation d-none d-sm-block">
                                    <button
                                        class="portfolio__button-prev circle-btn is-bg-white slider__nav-btn is-hover-blue"><i
                                            class="fa-regular fa-arrow-left-long"></i></button>
                                    <button
                                        class="portfolio__button-next circle-btn is-bg-white slider__nav-btn is-hover-blue"><i
                                            class="fa-regular fa-arrow-right-long"></i></button>
                                </div>
                                <!-- If we need pagination -->
                                <div class="pagination__wrapper d-block d-sm-none">
                                    <div class="bd-swiper-dot text-center"></div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="item col-item col-lg-12 text-center"><p class="text-muted">No images available.</p></div>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
    <!-- portfolio slider area end -->

    <!-- counter area start -->
    <section class="bd-counter__area section-space theme-bg-secondary d-none">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="counter__info-title text-center mb-30">
                        <p>Building in public, one MVP at a time 🚀 <span>12+</span> products shipped & counting</p>
                    </div>
                </div>
            </div>
            <div class="counter__wrapper style-three">
                <div class="row g-5">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="counter__item bordered-style wow fadeIn" data-wow-delay=".3s"
                            data-wow-duration="1s">
                            <div class="counter__icon bg-primary-opacity">
                                <i class="icon-member"></i>
                            </div>
                            <div class="counter__content">
                                <h2 class="counter__title"><span class="counter">500</span>+</h2>
                                <p>Active Users</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="counter__item bordered-style wow fadeIn" data-wow-delay=".5s"
                            data-wow-duration="1s">
                            <div class="counter__icon bg-primary-opacity">
                                <i class="icon-support"></i>
                            </div>
                            <div class="counter__content">
                                <h2 class="counter__title"><span class="counter">5</span>+</h2>
                                <p>Years Building</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="counter__item bordered-style wow fadeIn" data-wow-delay=".7s"
                            data-wow-duration="1s">
                            <div class="counter__icon bg-primary-opacity">
                                <i class="icon-rocket"></i>
                            </div>
                            <div class="counter__content">
                                <h2 class="counter__title"><span class="counter">12</span>+</h2>
                                <p>MVPs Shipped</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="counter__item bordered-style wow fadeIn" data-wow-delay=".9s"
                            data-wow-duration="1s">
                            <div class="counter__icon bg-primary-opacity">
                                <i class="icon-employe"></i>
                            </div>
                            <div class="counter__content">
                                <h2 class="counter__title"><span class="counter">3</span></h2>
                                <p>Products Profitable</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- counter area end -->

    <!-- image box area start -->
    @if($detail && count($detail->related_images) > 0 && is_array($detail->related_images))
    <div class="portfolio__details-img-area section-space">
        <div class="container">
            <div class="row g-5">
                
                    @foreach($detail->related_images as $relatedImage)
                    <div class="col-md-6">
                        <div class="portfolio__details-image-item">
                            <img src="{{ asset('storage/' . $relatedImage) }}" alt="image not found">
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="col-md-6">
                        <div class="portfolio__details-image-item">
                            <img src="{{ Vite::asset('resources/imgs/portfolio/portfolio-16.png') }}" alt="image not found">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="portfolio__details-image-item">
                            <img src="{{ Vite::asset('resources/imgs/portfolio/portfolio-20.png') }}" alt="image not found">
                        </div>
                    </div> --}}
                
            </div>
        </div>
    </div>
    @endif
    <!-- image box area end -->

    <!-- Section divider -->
    <div class="section__divider">
        <hr>
    </div>

    <!-- portfolio navigation area start -->
    <section class="portfolio-navigation__area d-none">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="postbox__more-navigation is-margin-none">
                        <div class="postbox__more-left">
                            <div class="postbox__more-icon">
                                <a class="circle-btn" href="blog-details.html">
                                    <i class="fa-regular fa-arrow-left-long"></i>
                                </a>
                            </div>
                            <div class="postbox__more-content">
                                <p>Previous Product</p>
                                <h6>
                                    <a href="blog-details.html">Check Out Another MVP</a>
                                </h6>
                            </div>
                        </div>
                        <div class="postbox__more-menu">
                            <a href="portfolio-masonary.html">
                                <span>
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.6673 4.66662C12.9559 4.66662 14.0006 3.62196 14.0006 2.33331C14.0006 1.04466 12.9559 0 11.6673 0C10.3786 0 9.33398 1.04466 9.33398 2.33331C9.33398 3.62196 10.3786 4.66662 11.6673 4.66662Z"
                                            fill="currentColor" />
                                        <path
                                            d="M2.33331 4.66662C3.62196 4.66662 4.66662 3.62196 4.66662 2.33331C4.66662 1.04466 3.62196 0 2.33331 0C1.04466 0 0 1.04466 0 2.33331C0 3.62196 1.04466 4.66662 2.33331 4.66662Z"
                                            fill="currentColor" />
                                        <path
                                            d="M11.6673 13.9996C12.9559 13.9996 14.0006 12.955 14.0006 11.6663C14.0006 10.3777 12.9559 9.33301 11.6673 9.33301C10.3786 9.33301 9.33398 10.3777 9.33398 11.6663C9.33398 12.955 10.3786 13.9996 11.6673 13.9996Z"
                                            fill="currentColor" />
                                        <path
                                            d="M2.33331 13.9996C3.62196 13.9996 4.66662 12.955 4.66662 11.6663C4.66662 10.3777 3.62196 9.33301 2.33331 9.33301C1.04466 9.33301 0 10.3777 0 11.6663C0 12.955 1.04466 13.9996 2.33331 13.9996Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                        <div class="postbox__more-right">
                            <div class="postbox__more-content">
                                <p>Next Product</p>
                                <h6>
                                    <a href="blog-details.html">See What Else I Built</a>
                                </h6>
                            </div>
                            <div class="postbox__more-icon">
                                <a class="circle-btn" href="blog-details.html">
                                    <i class="fa-regular fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- portfolio navigation area end -->

    <!-- portfolio comment form area start -->
    <section class="portfolio-comment-form__area section-space theme-bg-secondary">
        <div class="container">
            <div class="row">
                
                <div class="col-12">
                    <div class="postbox__comment-form">
                        <h4 class="postbox__comment-form-title">Share Your Feedback 💡</h4>
                        <p>
                            @if($isExperiment)
                                I'd love to hear your thoughts. What do you think about this experiment? Any suggestions?
                            @else
                                I'd love to hear your thoughts. What do you think about this product? Any suggestions?
                            @endif
                        </p>
                        <form action="{{ route('contact.send') }}" method="POST" id="contact-form">
                            @csrf

                            {{-- El asunto se genera automáticamente según el experimento/producto --}}
                            <input
                                type="hidden"
                                name="subject"
                                value="Feedback — {{ $detail->title ?? $portfolio->titulo }}"
                            >

                            <div class="row">

                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                    <div class="postbox__comment-input">
                                        <input
                                            type="text"
                                            name="name"
                                            value="{{ old('name') }}"
                                            placeholder="Your Name*"
                                            autocomplete="name"
                                            required
                                        >
                                    </div>
                                </div>

                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                    <div class="postbox__comment-input">
                                        <input
                                            type="email"
                                            name="email"
                                            value="{{ old('email') }}"
                                            placeholder="Your Email*"
                                            autocomplete="email"
                                            required
                                        >
                                    </div>
                                </div>

                                <div class="col-xxl-12">
                                    <div class="postbox__comment-input">
                                        <textarea
                                            name="message"
                                            placeholder="Your feedback, questions, or ideas..."
                                            required
                                        >{{ old('message') }}</textarea>
                                    </div>
                                </div>

                            </div>

                            @include('components._form-security')

                            <div class="postbox__comment-form-btn">
                                <button type="submit" class="bd-btn">
                                    Send Feedback
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="contact-form-feedback" class="mt-3">
                    @if(session('success'))
                        <div class="alert alert-success mb-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger mb-4">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- portfolio comment form area end -->

</main>
<!-- Body main wrapper end -->
@endsection
