<!-- Hero area start -->
    <section class="banner__area banner-height d-flex align-items-center p-relative" style="padding-top: 120px;">
        <div class="container">
            <div class="row align-items-center gy-5">
                <div class="col-xl-7 col-lg-6">
                    <div class="banner__content p-relative">
                        <span class="section__subtitle wow fadeInUp" data-wow-delay=".2s" data-wow-duration=".5s">BUILDING IN PUBLIC</span>
                        <h1 class="banner__title large wow fadeInUp" data-wow-delay=".3s" data-wow-duration=".7s">
                            Building real products <span class="bd-text-primary">from scratch.</span>
                        </h1>
                        <p class="wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".9s">
                            LujanDev is where I build, launch and document real products — sharing the code, decisions, bugs and lessons behind them.
                        </p>
                        <p class="banner__secondary-text wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                            Developer · Builder · Founder
                        </p>
                    </div>
                    <div class="banner__btn wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1.1s">
                        <div class="d-flex flex-column flex-sm-row gap-3">
                            <a class="bd-btn is-btn-anim" href="{{ route('my-project') }}">
                                <span class="bd-btn-inner">
                                    <span class="bd-btn-normal">Explore products</span>
                                    <span class="bd-btn-hover">Explore products</span>
                                    <i class="contentHidden"></i>
                                </span>
                            </a>
                            <a class="bd-btn is-btn-anim bordered-blue" href="https://x.com/lujandev" target="_blank" rel="noopener noreferrer">
                                <span class="bd-btn-inner">
                                    <span class="bd-btn-normal">Follow the journey</span>
                                    <span class="bd-btn-hover">Follow the journey</span>
                                    <i class="contentHidden"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="banner__thumb-wrapper wow fadeInRight" data-wow-delay=".8s" data-wow-duration="1.2s">
                        {{-- TODO: Replace with workspace or product visual
                             Recommended asset: resources/imgs/banner/hero-workspace.jpg
                             Description: Workspace setup, development environment, or product composition
                             Dimensions: 600x600px minimum (square or 4:3 ratio)
                             Current placeholder: banner-01.png --}}
                        <div class="banner__hero-visual">
                            <img src="{{ Vite::asset('resources/imgs/banner/banner-01.png') }}" alt="LujanDev workspace">
                        </div>
                        <div class="banner__social-minimal">
                            <a href="https://x.com/lujandev" target="_blank" rel="noopener noreferrer" aria-label="Follow on X">
                                <i class="icon-twiter"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/lujandev/" target="_blank" rel="noopener noreferrer" aria-label="Follow on LinkedIn">
                                <i class="fa-brands fa-linkedin"></i>
                            </a>
                            <a href="https://www.instagram.com/lujandev/" target="_blank" rel="noopener noreferrer" aria-label="Follow on Instagram">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero area end -->