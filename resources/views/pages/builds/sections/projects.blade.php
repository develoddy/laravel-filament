<!-- portfolio area start -->
    <section class="bd__portfolio-area section-space">
        <div class="container">
            <div class="row g-5 section__title-space justify-content-center">
                <div class="col-xl-8 col-lg-8">
                    <div class="bd__menu-tab">
                        <ul class="bd__menu nav" id="myTab" role="tablist">
                            <li class="bd__btn-item" role="presentation">
                                <button class="active" id="view-tab" data-bs-toggle="tab" data-bs-target="#view" type="button" role="tab" aria-controls="view" aria-selected="true">All Builds</button>
                            </li>
                            <li class="bd__btn-item" role="presentation">
                                <button id="products-tab" data-bs-toggle="tab" data-bs-target="#products" type="button" role="tab" aria-controls="products" aria-selected="false">Products</button>
                            </li>
                            <li class="bd__btn-item" role="presentation">
                                <button id="experiments-tab" data-bs-toggle="tab" data-bs-target="#experiments" type="button" role="tab" aria-controls="experiments" aria-selected="false">Experiments</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="tab-content wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s" id="myTabContent">

                        {{-- View all tab --}}
                        <div class="tab-pane fade show active" id="view" role="tabpanel" aria-labelledby="view-tab">
                            <div class="row g-5">
                                @if(isset($portfolios) && !empty($portfolios))
                                    @foreach ($portfolios as $portfolio)
                                        <div class="col-lg-4 col-md-6">
                                            <div class=" portfolio__item style-seven">
                                                <div class="portfolio__item-thumb">
                                                    <img src="{{ asset('storage/' . $portfolio->imagen) }}" alt="{{ $portfolio->titulo }} product preview">
                                                    <div class="portfolio__item-btn">
                                                        <span class="icon__box">
                                                            <a class="popup-image circle-btn is-bg-white is-btn-large" href="{{ asset('storage/' .  $portfolio->imagen) }}">
                                                                <i class="icon-plus"></i>
                                                            </a>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="portfolio__item-content">
                                                    <div class="portfolio__item-info">
                                                        <div class="portfolio__tag">
                                                            <a href="{{ route('my-project.show', $portfolio->slug) }}">{{ $portfolio->category->title ?? 'Build' }}</a>
                                                        </div>
                                                        <h5 class="portfolio__item-title underline">
                                                            <a href="{{ route('my-project.show', $portfolio->slug) }}">{{ $portfolio->titulo }}</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>

                        {{-- Product tab --}}
                        <div class="tab-pane fade" id="products" role="tabpanel" aria-labelledby="products-tab">
                            <div class="row  g-5">
                                @foreach ($brandPortfolios as $portfolio)
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven">
                                            <div class="portfolio__item-thumb">
                                                <img src="{{ asset('storage/' . $portfolio->imagen) }}" alt="{{ $portfolio->titulo }}"> 
                                                <div class="portfolio__item-btn">
                                                    <span class="icon__box">
                                                        <a class="popup-image circle-btn is-bg-white is-btn-large" href="{{ asset('storage/' . $portfolio->imagen) }}">
                                                            <i class="icon-plus"></i>
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="portfolio__item-content">
                                                <div class="portfolio__item-info">
                                                    <div class="portfolio__tag">
                                                        <a href="{{ route('my-project.show', $portfolio->slug) }}">{{ $portfolio->titulo }}</a>
                                                    </div>
                                                    <h5 class="portfolio__item-title underline">
                                                        <a href="{{ route('my-project.show', $portfolio->slug) }}">{{ $portfolio->titulo }}</a>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        {{-- Experiments tab --}}
                        <div class="tab-pane fade" id="experiments" role="tabpanel" aria-labelledby="experiments-tab">
                            <div class="row g-5">
                                @foreach ($projectPortfolios as $portfolio)
                                    <div class="col-lg-4 col-md-6">
                                        <div class=" portfolio__item style-seven">
                                            <div class="portfolio__item-thumb">
                                                <img src="{{ asset('storage/' . $portfolio->imagen) }}" alt="{{ $portfolio->titulo }}">
                                                <div class="portfolio__item-btn">
                                                    <span class="icon__box">
                                                        <a class="popup-image circle-btn is-bg-white is-btn-large" href="{{ asset('storage/' . $portfolio->imagen) }}">
                                                            <i class="icon-plus"></i>
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="portfolio__item-content">
                                                <div class="portfolio__item-info">
                                                    <div class="portfolio__tag">
                                                        <a href="{{ route('my-project.show', $portfolio->slug) }}">{{ $portfolio->titulo }}</a>
                                                    </div>
                                                    <h5 class="portfolio__item-title underline">
                                                        <a href="{{ route('my-project.show', $portfolio->slug) }}">{{ $portfolio->titulo }}</a>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </div>
           
        </div>
    </section>
<!-- portfolio area end -->