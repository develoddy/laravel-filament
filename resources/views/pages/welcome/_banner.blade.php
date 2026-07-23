<!-- Banner area start -->
    <section class="banner__area banner-height d-flex align-items-center p-relative">
        <div class="banner-shape d-none d-lg-block">
            <img class="banner__shape-two" src="{{ Vite::asset('resources/imgs/shape/tower-shape-small.png') }}" alt="Decorative shape element">
        </div>
        <!-- when slide active remove this class -->
        <div class="swiper banner__active overflow-visible">
            <div class="swiper-wrapper">
                <div class="swiper-slide banner_more_item">
                    <div class="container">
                        <div class="row align-items-center gy-5">
                            <div class="col-xl-6 col-lg-6">
                                <div class="banner__content p-relative">
                                    <span class="section__subtitle wow fadeInUp" data-wow-delay=".2s" data-wow-duration=".5s">BUILDING IN PUBLIC</span>
                                    <h1 class="banner__title large wow fadeInUp" data-wow-delay=".3s"
                                        data-wow-duration=".7s">Building real products <span class="bd-text-primary">from scratch.</span></h1>
                                    <p class="wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".9s">
                                        LujanDev is where I turn ideas into real products and share the code, systems, decisions and lessons behind them.
                                    </p>
                                    <p class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                                        <strong>I'm Eddy — a developer, builder and founder in progress.</strong>
                                    </p>
                                </div>
                                <div class="banner__btn wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1.1s">
                                    <div class="d-flex flex-column flex-sm-row gap-3">
                                        <a class="bd-btn is-btn-anim" href="{{ route('my-project') }}">
                                            <span class="bd-btn-inner">
                                                <span class="bd-btn-normal">Explore what I'm building</span>
                                                <span class="bd-btn-hover">Explore what I'm building</span>
                                                <i class="contentHidden"></i>
                                            </span>
                                        </a>
                                        <a class="bd-btn is-btn-anim" href="https://x.com/lujandev" target="_blank" rel="noopener noreferrer">
                                            <span class="bd-btn-inner">
                                                <span class="bd-btn-normal">Follow the journey</span>
                                                <span class="bd-btn-hover">Follow the journey</span>
                                                <i class="contentHidden"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="banner__thumb-wrapper wow fadeInRight" data-wow-delay=".8s"
                                    data-wow-duration="1.2s">
                                    <div class="banner__shape">
                                        <img class="banner__shape-one" src="{{ Vite::asset('resources/imgs/shape/tower-shape.png') }}"
                                            alt="Decorative tower shape">
                                    </div>
                                    <div class="banner__bg"></div>
                                    <div class="banner__thumb">
                                        <img src="{{ Vite::asset('resources/imgs/banner/profile.jpg') }}" alt="Eddy Luján profile photo">
                                    </div>

                                    <div class="theme__social banner-social">
                                        <a href="#" class="d-none"><i class="fa-brands fa-facebook-f"></i>
                                            <div class="banner__social-tooltip">
                                                <p>Facebook</p>
                                            </div>
                                        </a>
                                        <a href="https://x.com/lujandev" target="_blank" rel="noopener noreferrer"><i class="icon-twiter"></i>
                                            <div class="banner__social-tooltip">
                                                <p>Twitter</p>
                                            </div>
                                        </a>
                                        <a href="https://www.linkedin.com/in/lujandev/" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-linkedin"></i>
                                            <div class="banner__social-tooltip">
                                                <p>Linkedin</p>
                                            </div>
                                        </a>
                                        <a href="https://www.instagram.com/lujandev/" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-instagram"></i>
                                            <div class="banner__social-tooltip">
                                                <p>Instagram</p>
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