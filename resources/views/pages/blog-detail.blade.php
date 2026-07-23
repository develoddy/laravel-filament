@extends('layouts.app')

@section('content')
<!-- Body main wrapper start -->
    <main>
        <!-- postbox area start -->
        <section class="postbox__area section-space">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-8 col-lg-10 col-md-10">
                        <div class="section__title-wrapper section__title-space">
                            <h2 class="section__title">{{ $detail->title ?? $blog->title ?? 'Article Title' }}</h2>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-xxl-12">
                        <div class="postbox__wrapper style-two">
                            <div class="row g-5">
                                <div class="col-lg-8">
                                    @if($detail && $detail->image)
                                    <div class="postbox__top">
                                        <div class="postbox__thumb">
                                            <img src="{{ asset('storage/' . $detail->image) }}" alt="{{ $detail->title ?? 'Blog post' }}">
                                        </div>
                                    </div>
                                    @endif
                                    <div class="postbox__main-wrapper">
                                        <div class="postbox__meta-wrapper">
                                            <div class="postbox__meta-item">
                                                <div class="postbox__meta-author">
                                                    <div class="postbox__meta-author-thumb">
                                                        <a href="{{ route('welcome') }}">
                                                            <img src="{{ Vite::asset('resources/imgs/about/about-01.jpg') }}"
                                                                alt="Eddy Luján">
                                                        </a>
                                                    </div>
                                                    <div class="postbox__meta-content">
                                                        <span class="postbox__meta-type">Author</span>
                                                        <p class="postbox__meta-name">Eddy Luján</p>
                                                    </div>
                                                </div>
                                            </div>
                                            @if($blog && $blog->created_at)
                                            <div class="postbox__meta-item">
                                                <div class="postbox__meta-content">
                                                    <span class="postbox__meta-type">Published</span>
                                                    <p class="postbox__meta-name">{{ \Carbon\Carbon::parse($blog->created_at)->format('M d, Y') }}</p>
                                                </div>
                                            </div>
                                            @endif
                                            <div class="postbox__meta-item d-none">
                                                <div class="postbox__meta-content">
                                                    <span class="postbox__meta-type">{{ $detail->countComment ?? 0 }} Comments</span>
                                                    <p class="postbox__meta-name"><a href="#">Join the Conversation</a>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="postbox__meta-item d-none">
                                                <div class="postbox__meta-content">
                                                    <span class="postbox__meta-type">Views</span>
                                                    <p class="postbox__meta-name">{{ $detail->viewComment ?? 0 }} views</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="postbox__details-content-wrapper">
                                            @if($detail && $detail->subtitle)
                                            <h5 class="postbox__details-title">{{ $detail->subtitle }}</h5>
                                            @endif
                                            
                                            @if($detail && $detail->description)
                                            <div class="postbox__content">
                                                {!! $detail->description !!}
                                            </div>
                                            @else
                                            <p>No content available yet.</p>
                                            @endif

                                            @if($detail && is_array($detail->related_images) && count($detail->related_images) > 0)
                                            <div class="postbox__thumb-wrapper">
                                                @foreach($detail->related_images as $img)
                                                <div class="postbox__thumb">
                                                    <img src="{{ asset('storage/' . $img) }}"
                                                        alt="Related image">
                                                </div>
                                                @endforeach
                                            </div>
                                            @endif
                                        </div>
                                        
                                        <div class="postbox__more-navigation grid-reduce theme-bg-secondary d-none">
                                            <div class="postbox__more-left">
                                                <div class="postbox__more-icon">
                                                    <a class="circle-btn" href="{{ route('blog') }}">
                                                        <i class="fa-regular fa-arrow-left-long"></i>
                                                    </a>
                                                </div>
                                                <div class="postbox__more-content">
                                                    <p>Back to Journal</p>
                                                    <h6>
                                                        <a href="{{ route('blog') }}">All Posts</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="postbox__share-wrapper">
                                            <div class="row align-items-center">
                                                <div class="col-xl-7 d-none">
                                                    <div class="postbox__share-tag">
                                                        <span>Tags:</span>
                                                        <a href="#">Building</a>
                                                        <a href="#">Product</a>
                                                        <a href="#">Development</a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="postbox__share-social">
                                                        <span>Share:</span>
                                                        <div class="theme__social">
                                                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(Request::fullUrl()) }}&text={{ urlencode($detail->title ?? $blog->title ?? 'Check this out') }}" target="_blank" rel="noopener noreferrer"><i class="icon-twiter"></i>
                                                            </a>
                                                            <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(Request::fullUrl()) }}" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-linkedin"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="postbox__author d-none">
                                            <div class="postbox__author-thumb">
                                                <a href="{{ route('welcome') }}">
                                                    <img src="{{ Vite::asset('resources/imgs/about/about-01.jpg') }}" alt="Eddy Luján">
                                                </a>
                                            </div>
                                            <div class="postbox__author-content">
                                                <h6 class="postbox__author-title">
                                                    <a href="{{ route('welcome') }}">Eddy Luján</a>
                                                </h6>
                                                <p>Full-stack developer building products in public. Sharing code, systems and lessons from the journey.</p>

                                                <div class="postbox__author-social">
                                                    <div class="theme__social">
                                                        <a href="https://x.com/lujandev" target="_blank" rel="noopener noreferrer"><i class="icon-twiter"></i>
                                                        </a>
                                                        <a href="https://linkedin.com/in/lujandev" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-linkedin"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="postbox__related d-none">
                                            <h4 class="postbox__related-title mb-35">Related Posts</h4>
                                            <div class="row g-5">
                                                <div class="col-12">
                                                    <p class="text-muted">No related posts available.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <aside class="sidebar__wrapper">
                                        <!-- sidebar single item -->
                                        <div class="sidebar__widget wow fadeInUp" data-wow-delay=".3s">
                                            <div class="sidebar__widget-head">
                                                <h4 class="sidebar__widget-title mb-30">Recent Posts</h4>
                                            </div>
                                            <div class="sidebar__widget-content">
                                                <div class="rc__post-wrapper">
                                                    <p class="text-muted">No recent posts available.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </aside>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- postbox area end -->

    </main>
    <!-- Body main wrapper end -->
@endsection
