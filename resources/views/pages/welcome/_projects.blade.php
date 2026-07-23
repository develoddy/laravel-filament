<!-- Project area start -->
    <section id="homeworks" class="bd-portfolio__area section-space">
        <div class="container">
            <div class="row g-5 align-items-end section__title-space">
                <div class="col-lg-7 col-md-7">
                    <div class="section__title-wrapper">
                        <span class="section__subtitle">PRODUCTS & EXPERIMENTS</span>
                        <h2 class="section__title">What I'm Building</h2>
                        <p class="mt-3">Real products, tools and experiments built from idea to launch.</p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5">
                    <div class="portfolio__more text-md-end">
                        <a class="bd-btn is-btn-anim"  href="{{ route("my-project") }}">
                            <span class="bd-btn-inner">
                                <span class="bd-btn-normal">Explore All Builds</span>
                                <span class="bd-btn-hover">Explore All Builds</span>
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
                                    <a href="{{ route('my-project.show', $portfolio->slug) }}"><img
                                            src="{{ asset('storage/' . $portfolio->imagen) }}"
                                            alt="{{ $portfolio->titulo }} project screenshot"></a>
                                </div>
                                <div class="portfolio__content">
                                    <div class="portfolio__info">
                                        <div class="portfolio__tag d-m">
                                            <a href="{{ route('my-project.show', $portfolio->slug) }}">{{ $portfolio->category->title ?? '' }}</a>
                                        </div>
                                        <a href="{{ route('my-project.show', $portfolio->slug) }}">
                                            <h5 class="portfolio__title">{{ $portfolio->titulo }}</h5>
                                        </a>
                                    </div>
                                    @if(!empty($portfolio->mvp_url))
                                    <div class="portfolio__btn">
                                        <a href="{{ $portfolio->mvp_url }}" target="_blank" rel="noopener noreferrer" class="circle-btn" aria-label="Visit {{ $portfolio->titulo }} website">
                                            <span class="icon__box">
                                                <i class="fa-regular fa-arrow-right-long"></i>
                                            </span>
                                        </a>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
<!-- Project area end -->