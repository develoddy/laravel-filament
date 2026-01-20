<!-- Project area start -->
    <section id="homeworks" class="bd-portfolio__area section-space">
        <div class="container">
            <div class="row g-5 align-items-end section__title-space">
                <div class="col-lg-5 col-md-7">
                    <div class="section__title-wrapper">
                        <span class="section__subtitle">MICRO-SAAS PRODUCTS</span>
                        <h2 class="section__title">What I'm Building</h2>
                        <p class="contentHidden">contentHiddenText</p>
                    </div>
                </div>
                <div class="col-lg-7 col-md-5">
                    <div class="portfolio__more text-md-end">
                        <a class="bd-btn is-btn-anim"  href="{{ route("my-project") }}">
                            <span class="bd-btn-inner">
                                <span class="bd-btn-normal">View All Products</span>
                                <span class="bd-btn-hover">View All Products</span>
                                <i class="contentHidden"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="portfolio__wrapper">
                <div class="row grid g-5 wow fadeInUp" data-wow-delay=".5s">
                    @foreach ($portfolios as $portfolio)
                        <div class="col-xl-4 col-lg-4 col-md-6 grid-item">
                            <div class=" portfolio__item">
                                <div class="portfolio__thumb">
                                    <a href="portfolio-details.html"><img
                                            src="{{ asset('storage/' . $portfolio->imagen) }}"
                                            alt="img not found"></a>
                                </div>
                                <div class="portfolio__content">
                                    <div class="portfolio__info">
                                        <div class="portfolio__tag">
                                            <a href="portfolio-details.html">Design</a>
                                        </div>
                                        {{-- <a href="{{ route('my-project.show', ['my-project' => $portfolio->slug]) }}"> --}}
                                        <a href="{{ route('my-project.show', $portfolio->slug) }}">
                                            <h5 class="portfolio__title">{{ $portfolio->titulo }}</h5>
                                        </a>
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
                    @endforeach
                </div>
            </div>
        </div>
    </section>
<!-- Project area start -->