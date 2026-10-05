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

                            </span>
                        </a>

                    </div>
                @endif

            </div>

        </div>
    </section>