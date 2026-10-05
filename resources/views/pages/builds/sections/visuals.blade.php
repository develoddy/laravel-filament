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