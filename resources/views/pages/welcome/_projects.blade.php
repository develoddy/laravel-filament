@php
    use Illuminate\Support\Str;
@endphp

@if($homePortfolios->isNotEmpty())
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
            <div class="row grid g-4 wow fadeInUp" data-wow-delay=".5s">
                @foreach ($homePortfolios as $portfolio)
                    @php
                        $detail = $portfolio->details->first();
                        
                        // Status
                        $statusClass = null;
                        $statusLabel = null;
                        if ($detail && $detail->status) {
                            $statusLabel = $detail->status;
                            $statusClass = match($detail->status) {
                                'Live' => 'live',
                                'Testing' => 'testing',
                                'Paused' => 'paused',
                                'In Progress' => 'in-progress',
                                default => null,
                            };
                        }
                        
                        // Cover image priority
                        $coverUrl = null;
                        if ($portfolio->imagen) {
                            $coverUrl = asset('storage/' . $portfolio->imagen);
                        } elseif ($detail && $detail->images && count($detail->images) > 0) {
                            $coverUrl = asset('storage/' . $detail->images[0]);
                        }
                        
                        // Description priority
                        $shortDescription = null;
                        if ($portfolio->descripcion) {
                            $shortDescription = Str::limit(strip_tags($portfolio->descripcion), 120);
                        } elseif ($detail && $detail->description) {
                            $shortDescription = Str::limit(strip_tags($detail->description), 120);
                        }
                        
                        // Stack
                        $stack = [];
                        if ($detail && $detail->stack) {
                            $stack = array_filter(
                                array_map('trim', preg_split('/\s*\+\s*/', $detail->stack)),
                                fn($item) => !empty($item)
                            );
                        }
                        
                        // External URL priority
                        $externalUrl = null;
                        if ($detail && $detail->mvp_url) {
                            $externalUrl = $detail->mvp_url;
                        } elseif ($portfolio->mvp_url) {
                            $externalUrl = $portfolio->mvp_url;
                        }
                    @endphp
                    
                    <div class="col-xl-4 col-lg-4 col-md-6 grid-item">
                        <div class="product-card">
                            @if($statusClass)
                                <div class="product-card__status">
                                    <span class="status-badge status-badge--{{ $statusClass }}">
                                        {{ strtoupper($statusLabel) }}
                                    </span>
                                </div>
                            @endif
                            
                            @if($coverUrl)
                                <div class="product-card__cover">
                                    <a href="{{ route('my-project.show', $portfolio->slug) }}">
                                        <img src="{{ $coverUrl }}" alt="{{ $portfolio->titulo }} cover">
                                    </a>
                                </div>
                            @endif
                            
                            <div class="product-card__body">
                                <h5 class="product-card__name">
                                    <a href="{{ route('my-project.show', $portfolio->slug) }}">{{ $portfolio->titulo }}</a>
                                </h5>
                                
                                @if($shortDescription)
                                    <p class="product-card__description">{{ $shortDescription }}</p>
                                @endif
                                
                                @if(count($stack) > 0)
                                    <div class="product-card__stack">
                                        @foreach(array_slice($stack, 0, 3) as $tech)
                                            <span class="tech-badge">{{ $tech }}</span>
                                        @endforeach
                                        @if(count($stack) > 3)
                                            <span class="tech-badge">+{{ count($stack) - 3 }}</span>
                                        @endif
                                    </div>
                                @endif
                                
                                <div class="product-card__actions">
                                    @if($detail)
                                        <a href="{{ route('my-project.show', $portfolio->slug) }}" class="product-card__link">
                                            View build
                                        </a>
                                    @endif
                                    
                                    @if($externalUrl)
                                        <a href="{{ $externalUrl }}" target="_blank" rel="noopener noreferrer" class="product-card__link product-card__link--external">
                                            Visit product <i class="fa-regular fa-arrow-up-right"></i>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- Project area end -->
@endif