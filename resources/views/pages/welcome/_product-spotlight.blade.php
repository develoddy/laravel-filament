@php
    use Illuminate\Support\Str;
    
    if (!$featuredProduct) {
        $shouldRender = false;
    } else {
        $shouldRender = true;
        $detail = $featuredProduct->details->first();
        
        // Status normalization
        $statusClass = null;
        if ($detail && $detail->status) {
            $statusClass = match($detail->status) {
                'Live' => 'live',
                'Testing' => 'testing',
                'Paused' => 'paused',
                'In Progress' => 'in-progress',
                default => null,
            };
        }
        
        // Stack parsing (split by +)
        $stack = [];
        if ($detail && $detail->stack) {
            $stack = array_filter(
                array_map('trim', preg_split('/\s*\+\s*/', $detail->stack)),
                fn($item) => !empty($item)
            );
        }
        
        // Description priority: PortfolioDetail.description → Portfolio.descripcion → null
        $description = null;
        if ($detail && $detail->description) {
            $description = Str::limit(strip_tags($detail->description), 200);
        } elseif ($featuredProduct->descripcion) {
            $description = Str::limit(strip_tags($featuredProduct->descripcion), 200);
        }
        
        // Image priority: first PortfolioDetail.images → Portfolio.imagen → null
        $imageUrl = null;
        if ($detail && $detail->images && count($detail->images) > 0) {
            $imageUrl = asset('storage/' . $detail->images[0]);
        } elseif ($featuredProduct->imagen) {
            $imageUrl = asset('storage/' . $featuredProduct->imagen);
        }
        
        // URL priority: PortfolioDetail.mvp_url → Portfolio.mvp_url → internal route
        $externalUrl = null;
        if ($detail && $detail->mvp_url) {
            $externalUrl = $detail->mvp_url;
        } elseif ($featuredProduct->mvp_url) {
            $externalUrl = $featuredProduct->mvp_url;
        }
    }
@endphp

@if($shouldRender)
<!-- Product Spotlight area start -->
<section class="bd-product-spotlight theme-bg-secondary section-space">
    <div class="container">
        <div class="row align-items-center gy-5">
            <div class="col-lg-6 order-lg-1 order-2">
                <div class="product-spotlight__content wow fadeInLeft" data-wow-delay=".3s">
                    @if($statusClass)
                        <div class="mb-3">
                            <span class="status-badge status-badge--{{ $statusClass }}">
                                {{ strtoupper($detail->status) }}
                            </span>
                        </div>
                    @endif
                    
                    <div class="section__title-wrapper mb-25">
                        <span class="product-spotlight__eyebrow">{{ strtoupper($featuredProduct->category->title ?? 'PRODUCT') }}</span>
                        <h2 class="section__title product-spotlight__title">{{ $featuredProduct->titulo }}</h2>
                    </div>
                    
                    @if($description)
                        <p class="product-spotlight__description">
                            {{ $description }}
                        </p>
                    @endif

                    @if(count($stack) > 0)
                        <div class="product-spotlight__stack mb-4">
                            <div class="d-flex flex-wrap gap-2">
                                @foreach($stack as $tech)
                                    <span class="tech-pill">{{ $tech }}</span>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <div class="product-spotlight__cta">
                        @if($externalUrl)
                            <a class="bd-btn is-btn-anim" href="{{ $externalUrl }}" target="_blank" rel="noopener noreferrer">
                                <span class="bd-btn-inner">
                                    <span class="bd-btn-normal">Visit product</span>
                                    <span class="bd-btn-hover">Visit product</span>
                                    <i class="contentHidden"></i>
                                </span>
                            </a>
                        @elseif($detail)
                            <a class="bd-btn is-btn-anim" href="{{ route('my-project.show', $featuredProduct->slug) }}">
                                <span class="bd-btn-inner">
                                    <span class="bd-btn-normal">View Details</span>
                                    <span class="bd-btn-hover">View Details</span>
                                    <i class="contentHidden"></i>
                                </span>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-2 order-1">
                <div class="product-spotlight__visual wow fadeInRight" data-wow-delay=".3s">
                    @if($imageUrl)
                        <div class="product-spotlight__image">
                            <img src="{{ $imageUrl }}" 
                                 alt="{{ $featuredProduct->titulo }} screenshot"
                                 loading="lazy">
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Spotlight area end -->
@endif
