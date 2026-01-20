<!-- Banner area start -->
    <section class="banner__area banner-height d-flex align-items-center p-relative">
        <div class="banner-shape d-none d-lg-block">
            <img class="banner__shape-two" src="{{ Vite::asset('resources/imgs/shape/tower-shape-small.png') }}" alt="LujanDev">
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
                                        data-wow-duration=".7s">Hi, <span class="banner__shape-hand"><img src="{{ Vite::asset('resources/imgs/shape/hand-shape.png') }}" alt="LujanDev"></span>
                                        I'm <span class="bd-text-primary">Eddy Lujan 🧪</span></h1>
                                    <p class="wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".9s">
                                        <strong>Indie Hacker | Building & shipping micro-SaaS 🚀</strong><br><br>
                                        I build tiny SaaS products, test ideas fast, and share my journey in public. Currently shipping MVPs and learning in the open.
                                    </p>
                                </div>
                                <div class="banner__btn wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1.1s">
                                    <a class="bd-btn is-btn-anim" href="{{ route('my-project') }}">
                                        <span class="bd-btn-inner">
                                            <span class="bd-btn-normal">See My Products</span>
                                            <span class="bd-btn-hover">See My Products</span>
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
                                            alt="LujanDev">
                                    </div>
                                    <div class="banner__bg"></div>
                                    <div class="banner__thumb">
                                        <img src="{{ Vite::asset('resources/imgs/banner/profile.jpg') }}" alt="LujanDev">
                                    </div>

                                    <div class="theme__social banner-social">
                                        <a href="#" class="d-none"><i class="fa-brands fa-facebook-f"></i>
                                            <div class="banner__social-tooltip">
                                                <p>Facebook</p>
                                            </div>
                                        </a>
                                        <a href="https://x.com/lujandev" target="blank"><i class="icon-twiter"></i>
                                            <div class="banner__social-tooltip">
                                                <p>Twitter</p>
                                            </div>
                                        </a>
                                        <a href="https://www.linkedin.com/in/lujandev/" target="blank"><i class="fa-brands fa-linkedin"></i>
                                            <div class="banner__social-tooltip">
                                                <p>Linkedin</p>
                                            </div>
                                        </a>
                                        <a href="https://www.instagram.com/lujandev/" target="blank"><i class="fa-brands fa-instagram"></i>
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