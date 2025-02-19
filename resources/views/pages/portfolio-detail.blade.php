@extends('layouts.app')

@section('content')
<!-- Body main wrapper start -->
<main>

    <!-- portfolio area start -->
    <section class="bd-portfolio__area section-space">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-7">
                    <div class="portfolio__details-sec-wrapper">
                        <div class="section__title-wrapper">
                            <div class="section__title-wrapper mb-15">
                                <span class="section__subtitle bg-field">BRANDING IDES</span>
                                <h2 class="portfolio__details-title">Digital Agency</h2>
                            </div>
                            <p>We provide digital experience services to startups and small businesses. We help our
                                clients succeed by creating brand identities, digital experiences, and print
                                materials. Install any demo, plugin or template in a matter of seconds.</p>
                        </div>
                        <div class="portfolio__details-btn">
                            <a class="bd-btn is-btn-anim" href="portfolio.html">
                                <span class="bd-btn-inner">
                                    <span class="bd-btn-normal">View website</span>
                                    <span class="bd-btn-hover">View website</span>
                                    <i class="contentHidden"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="portfolio__details-meta">
                        <div class="portfolio__details-meta-item">
                            <div class="portfolio__details-meta-icon">
                                <span>
                                    <i class="fa-regular fa-user"></i>
                                </span>
                            </div>
                            <div class="portfolio__details-meta-content">
                                <h5>Client:</h5>
                                <span>Creative Work</span>
                            </div>
                        </div>
                        <div class="portfolio__details-meta-item">
                            <div class="portfolio__details-meta-icon">
                                <span>
                                    <i class="fa-light fa-award"></i>
                                </span>
                            </div>
                            <div class="portfolio__details-meta-content">
                                <h5>Awards:</h5>
                                <span>First Place</span>
                            </div>
                        </div>

                        <div class="portfolio__details-meta-item">
                            <div class="portfolio__details-meta-icon">
                                <span>
                                    <i class="fa-sharp fa-light fa-layer-group"></i>
                                </span>
                            </div>
                            <div class="portfolio__details-meta-content">
                                <h5>Category:</h5>
                                <span>Portfolio</span>
                            </div>
                        </div>
                        <div class="portfolio__details-meta-item">
                            <div class="portfolio__details-meta-icon">
                                <span>
                                    <i class="fa-light fa-calendar-days"></i>
                                </span>
                            </div>
                            <div class="portfolio__details-meta-content">
                                <h5>Date:</h5>
                                <span>May 4, 2023</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- portfolio area end -->

    <!-- portfolio slider area start -->
    <div class="bd-portfoli-details-area section-space-bottom fix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="portfolio__wrapper style-six portfolio-details wow fadeInUp" data-wow-delay=".3s"
                        data-wow-duration="1s">
                        <div class="swiper portfolio-details__active">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
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
                                </div>
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
                </div>
            </div>
        </div>
    </div>
    <!-- portfolio slider area end -->

    <!-- counter area start -->
    <section class="bd-counter__area section-space theme-bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="counter__info-title text-center mb-30">
                        <p>We completed <span>1000+</span> projects yearly successfully & counting</p>
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
                                <h2 class="counter__title"><span class="counter">92</span>k</h2>
                                <p>Stratified Clients</p>
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
                                <h2 class="counter__title"><span class="counter">40</span>+</h2>
                                <p>Years of Operate</p>
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
                                <h2 class="counter__title"><span class="counter">250</span>+</h2>
                                <p>Projects Delivered</p>
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
                                <h2 class="counter__title"><span class="counter">150</span>%</h2>
                                <p>Experts Employer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- counter area end -->

    <!-- image box area start -->
    <div class="portfolio__details-img-area section-space">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6">
                    <div class="portfolio__details-image-item">
                        <img src="{{ Vite::asset('resources/imgs/portfolio/portfolio-16.png') }}" alt="image not found">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="portfolio__details-image-item">
                        <img src="{{ Vite::asset('resources/imgs/portfolio/portfolio-20.png') }}" alt="image not found">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- image box area end -->

    <!-- Section divider -->
    <div class="section__divider">
        <hr>
    </div>

    <!-- portfolio navigation area start -->
    <section class="portfolio-navigation__area ">
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
                                <p>Previous Article</p>
                                <h6>
                                    <a href="blog-details.html">Agency With Creative Idea</a>
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
                                <p>Next Article</p>
                                <h6>
                                    <a href="blog-details.html">Digital Agency With Creative</a>
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
                        <h4 class="postbox__comment-form-title">Leave A Reply</h4>
                        <p>Your email address will not be published. Required fields are marked *</p>
                        <form action="#">
                            <div class="row">
                                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                                    <div class="postbox__comment-input">
                                        <input type="text" placeholder="Name*">
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                                    <div class="postbox__comment-input">
                                        <input type="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-12">
                                    <div class="postbox__comment-input">
                                        <input type="text" placeholder="Website">
                                    </div>
                                </div>
                                <div class="col-xxl-12">
                                    <div class="postbox__comment-input">
                                        <textarea placeholder="Your Comment Here..."></textarea>
                                    </div>
                                </div>
                                <div class="col-xxl-12">
                                    <div class="postbox__comment-agree d-flex align-items-start mb-25">
                                        <input class="e-check-input" type="checkbox" id="e-agree">
                                        <label class="e-check-label" for="e-agree">Save my name, email, and website
                                            in this browser for the next time I comment.</label>
                                    </div>
                                </div>
                                <div class="col-xxl-12">
                                    <div class="postbox__comment-form-btn">
                                        <a class="bd-btn is-btn-anim" href="contact.html">
                                            <span class="bd-btn-inner">
                                                <span class="bd-btn-normal">Submit now</span>
                                                <span class="bd-btn-hover">Submit now</span>
                                                <i class="contentHidden"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- portfolio comment form area end -->

</main>
<!-- Body main wrapper end -->
@endsection