@php
    use Illuminate\Support\Str;
@endphp

@if($homePortfolios->isNotEmpty())

<!-- Products area start -->
<section id="homeworks" class="bd-portfolio__area section-space theme-bg-secondary">
    <div class="container">

        <div class="row g-5 align-items-end section__title-space">

            <div class="col-lg-5 col-md-7">
                <div class="section__title-wrapper">

                    <span class="section__subtitle">
                        PRODUCTOS DEL ECOSISTEMA
                    </span>

                    <h2 class="section__title">
                        Productos que nacen de una misma base.
                    </h2>

                    <p>
                        Cada producto resuelve un problema diferente, pero todos comparten la plataforma, las capacidades y los aprendizajes construidos bajo LujanDev.
                    </p>

                </div>
            </div>

            <div class="col-lg-7 col-md-5">

                <div class="portfolio__more text-md-end">

                    <a class="bd-btn is-btn-anim"
                        href="{{ route('my-project') }}">

                        <span class="bd-btn-inner">

                            <span class="bd-btn-normal">
                                Ver todos los productos
                            </span>

                            <span class="bd-btn-hover">
                                Ver todos los productos
                            </span>

                            <i class="contentHidden"></i>

                        </span>

                    </a>

                </div>

            </div>

        </div>

        <div class="portfolio__wrapper">

            <div class="row grid g-5 wow fadeInUp" data-wow-delay=".5s">

                @foreach ($homePortfolios as $portfolio)

                    @php

                        $detail = $portfolio->details->first();

                        /*
                        |--------------------------------------------------------------------------
                        | Estado
                        |--------------------------------------------------------------------------
                        */

                        $statusLabel = null;

                        if ($detail && $detail->status) {
                            $statusLabel = strtoupper($detail->status);
                        }

                        /*
                        |--------------------------------------------------------------------------
                        | Imagen
                        |--------------------------------------------------------------------------
                        */

                        $coverUrl = null;

                        if ($portfolio->imagen) {

                            $coverUrl = asset('storage/'.$portfolio->imagen);

                        } elseif ($detail && $detail->images && count($detail->images) > 0) {

                            $coverUrl = asset('storage/'.$detail->images[0]);

                        }

                        /*
                        |--------------------------------------------------------------------------
                        | Descripción
                        |--------------------------------------------------------------------------
                        */

                        $shortDescription = null;

                        if ($portfolio->descripcion) {

                            $shortDescription = Str::limit(
                                strip_tags($portfolio->descripcion),
                                80
                            );

                        } elseif ($detail && $detail->description) {

                            $shortDescription = Str::limit(
                                strip_tags($detail->description),
                                80
                            );

                        }

                    @endphp

                    <div class="col-xl-4 col-lg-4 col-md-6 grid-item">

                        <div class="portfolio__item">

                            <div class="portfolio__thumb">

                                <a href="{{ route('my-project.show', $portfolio->slug) }}">

                                    @if($coverUrl)

                                        <img
                                            src="{{ $coverUrl }}"
                                            alt="{{ $portfolio->titulo }}">

                                    @endif

                                </a>

                            </div>

                            <div class="portfolio__content">

                                <div class="portfolio__info">

                                    @if($statusLabel)

                                        <div class="portfolio__tag">

                                            <span>
                                                {{ $statusLabel }}
                                            </span>

                                        </div>

                                    @endif

                                    <h5 class="portfolio__title">

                                        <a href="{{ route('my-project.show', $portfolio->slug) }}">

                                            {{ $portfolio->titulo }}

                                        </a>

                                    </h5>

                                    @if($shortDescription)

                                        <p class="mt-2">

                                            {{ $shortDescription }}

                                        </p>

                                    @endif

                                </div>

                                <div class="portfolio__btn">

                                    <a
                                        href="{{ route('my-project.show', $portfolio->slug) }}"
                                        class="circle-btn">

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
<!-- Products area end -->

@endif