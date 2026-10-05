<!-- image box area start -->
    @if($detail && count($detail->related_images) > 0 && is_array($detail->related_images))
    <div class="portfolio__details-img-area section-space">
        <div class="container">
            <div class="row g-5">
                @foreach($detail->related_images as $relatedImage)
                <div class="col-md-6">
                    <div class="portfolio__details-image-item">
                        <img src="{{ asset('storage/' . $relatedImage) }}" alt="image not found">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif
<!-- image box area end -->