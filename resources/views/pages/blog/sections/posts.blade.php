<div class="bd-blog__area section-space">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-8 col-sm-10">
                <div class="section__title-wrapper text-center section__title-space">
                    <span class="section__subtitle bg-field">THE JOURNEY</span>
                    <h2 class="section__title">What I'm learning while building.</h2>
                </div>
            </div>
        </div>
        <div class="row g-5 grid wow fadeInUp" data-wow-delay=".3s">

            @if(isset($blogs) && !empty($blogs))
                @foreach ($blogs as $blog)
                <div class="col-xl-4 col-lg-6 col-md-6 grid-item">
                    <div class="blog__wrap blog__item style-five">
                        <div class="blog__thumb is-hover">
                            <a href="{{ route('blog.show', ['blog' => $blog->slug]) }}">
                                <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }} blog post">
                            </a>
                        </div>
                        <div class="blog__content bg-solid">
                            <div class="blog__meta">
                                <span>
                                    <i class="fa-light fa-calendar"></i>
                                    {{ \Carbon\Carbon::parse($blog->created_at)->format('M d, Y') }}
                                </span>
                                <span>
                                    <i class="fa-light fa-comment"></i>
                                    {{ $blog->countComment ?? 0 }} Comments
                                </span>
                            </div>
                            <h5 class="blog__title">
                                <a href="{{ route('blog.show', ['blog' => $blog->slug]) }}">{{ $blog->title }}</a>
                                </h5>
                            <div class="blog__btn">
                                <a class="bd-btn bordered-light is-btn-anim" href="{{ route('blog.show', ['blog' => $blog->slug]) }}">
                                    <span class="bd-btn-inner">
                                        <span class="bd-btn-normal">Read More</span>
                                        <span class="bd-btn-hover">Read More</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
