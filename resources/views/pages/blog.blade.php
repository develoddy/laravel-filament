@extends('layouts.app')

@section('content')
<!-- Body main wrapper start -->
    <main>

        <!-- breadcrumb area  start -->
        <section class="breadcrumb__area section-space theme-bg-secondary p-relative">
            <div class="breadcrumb__shape-wrapper">
                <div class="breadcrumb__shape-two">
                    
                    <img src="{{ Vite::asset('resources/imgs/shape/four-line-shape-2.png') }}" alt="image not found">
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xxl-7 col-xl-8 col-lg-8 col-md-10">
                        <div class="breadcrumb__content-wrapper">
                            <div class="breadcrumb__title-wrapper">
                                <h1 class="breadcrumb__title mb-25">Improving Digital Agency & Portfolio</h1>
                            </div>
                            <div class="breadcrumb__menu">
                                <nav>
                                    <ul>
                                        <li><span><a href="index.html">Home</a></span></li>
                                        <li><span><a href="blog.html">Blog</a></span></li>
                                        <li><span>Blog Masonary</span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area  end -->

        <!-- blog area start -->
        <div class="bd-blog__area section-space">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-6 col-lg-6 col-md-8 col-sm-10">
                        <div class="section__title-wrapper text-center section__title-space">
                            <span class="section__subtitle bg-field">OUR BLOG</span>
                            <h2 class="section__title">Read My Latest Article</h2>
                            <p class="contentHidden">contentHidden</p>
                        </div>
                    </div>
                </div>
                <div class="row g-5 grid wow fadeInUp" data-wow-delay=".3s">
                    <div class="col-xl-4 col-lg-6 col-md-6 grid-item">
                        <div class="blog__wrap blog__item style-five">
                            <div class="blog__thumb is-hover">
                                <a href="blog-details.html">
                                    <img src="{{ Vite::asset('resources/imgs/blog/masonary/blog-masonary-02.png') }}" alt="image not found">
                                </a>
                                <div class="blog__tag">
                                    <a href="#">Development</a>
                                </div>
                            </div>
                            <div class="blog__content bg-solid">
                                <div class="blog__meta">
                                    <span>
                                        <i class="fa-light fa-calendar"></i>
                                        Nov 12, 2023
                                    </span>
                                    <span>
                                        <i class="fa-light fa-comment"></i>
                                        10 Comments
                                    </span>
                                </div>
                                <h5 class="blog__title"><a href="blog-details.html">The Role of actions in User
                                        Engagement</a></h5>
                                <div class="blog__btn">
                                    <a class="bd-btn bordered-light is-btn-anim" href="blog-details.html">
                                        <span class="bd-btn-inner">
                                            <span class="bd-btn-normal">Read More</span>
                                            <span class="bd-btn-hover">Read More</span>
                                            <i class="contentHidden"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 grid-item">
                        <div class="blog__wrap blog__item style-five">
                            <div class="blog__thumb is-hover">
                                <a href="blog-details.html">
                                    <img src="{{ Vite::asset('resources/imgs/blog/masonary/blog-masonary-01.png') }}" alt="image not found">
                                </a>
                                <div class="blog__tag">
                                    <a href="#">Project</a>
                                </div>
                            </div>
                            <div class="blog__content bg-solid">
                                <div class="blog__meta">
                                    <span>
                                        <i class="fa-light fa-calendar"></i>
                                        Mar 20, 2023
                                    </span>
                                    <span>
                                        <i class="fa-light fa-comment"></i>
                                        20 Comments
                                    </span>
                                </div>
                                <h5 class="blog__title"><a href="blog-details.html">Talent Acquisition and Global Work
                                        Force</a></h5>
                                <div class="blog__btn">
                                    <a class="bd-btn bordered-light is-btn-anim" href="blog-details.html">
                                        <span class="bd-btn-inner">
                                            <span class="bd-btn-normal">Read More</span>
                                            <span class="bd-btn-hover">Read More</span>
                                            <i class="contentHidden"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 grid-item">
                        <div class="blog__wrap blog__item style-five">
                            <div class="blog__thumb is-hover">
                                <a href="blog-details.html">
                                    <img src="assets/imgs/blog/masonary/blog-masonary-03.png" alt="image not found">
                                </a>
                                <div class="blog__tag">
                                    <a href="#">Agency</a>
                                </div>
                            </div>
                            <div class="blog__content bg-solid">
                                <div class="blog__meta">
                                    <span>
                                        <i class="fa-light fa-calendar"></i>
                                        May 10, 2023
                                    </span>
                                    <span>
                                        <i class="fa-light fa-comment"></i>
                                        05 Comments
                                    </span>
                                </div>
                                <h5 class="blog__title"><a href="blog-details.html">Work and Company Culture Program</a>
                                </h5>
                                <div class="blog__btn">
                                    <a class="bd-btn bordered-light is-btn-anim" href="blog-details.html">
                                        <span class="bd-btn-inner">
                                            <span class="bd-btn-normal">Read More</span>
                                            <span class="bd-btn-hover">Read More</span>
                                            <i class="contentHidden"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 grid-item">
                        <div class="blog__wrap blog__item style-five">
                            <div class="blog__thumb is-hover">
                                <a href="blog-details.html">
                                    <img src="assets/imgs/blog/masonary/blog-masonary-04.png" alt="image not found">
                                </a>
                                <div class="blog__tag">
                                    <a href="#">Agency</a>
                                </div>
                            </div>
                            <div class="blog__content bg-solid">
                                <div class="blog__meta">
                                    <span>
                                        <i class="fa-light fa-calendar"></i>
                                        May 10, 2023
                                    </span>
                                    <span>
                                        <i class="fa-light fa-comment"></i>
                                        05 Comments
                                    </span>
                                </div>
                                <h5 class="blog__title"><a href="blog-details.html">Clearly outline the purpose of your
                                        goal</a></h5>
                                <div class="blog__btn">
                                    <a class="bd-btn bordered-light is-btn-anim" href="blog-details.html">
                                        <span class="bd-btn-inner">
                                            <span class="bd-btn-normal">Read More</span>
                                            <span class="bd-btn-hover">Read More</span>
                                            <i class="contentHidden"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 grid-item">
                        <div class="blog__wrap blog__item style-five">
                            <div class="blog__thumb is-hover">
                                <a href="blog-details.html">
                                    <img src="assets/imgs/blog/masonary/blog-masonary-05.png" alt="image not found">
                                </a>
                                <div class="blog__tag">
                                    <a href="#">Agency</a>
                                </div>
                            </div>
                            <div class="blog__content bg-solid">
                                <div class="blog__meta">
                                    <span>
                                        <i class="fa-light fa-calendar"></i>
                                        May 10, 2023
                                    </span>
                                    <span>
                                        <i class="fa-light fa-comment"></i>
                                        05 Comments
                                    </span>
                                </div>
                                <h5 class="blog__title"><a href="blog-details.html">Select a memorable and relevant
                                        domain</a></h5>
                                <div class="blog__btn">
                                    <a class="bd-btn bordered-light is-btn-anim" href="blog-details.html">
                                        <span class="bd-btn-inner">
                                            <span class="bd-btn-normal">Read More</span>
                                            <span class="bd-btn-hover">Read More</span>
                                            <i class="contentHidden"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 grid-item">
                        <div class="blog__wrap blog__item style-five">
                            <div class="blog__thumb is-hover">
                                <a href="blog-details.html">
                                    <img src="assets/imgs/blog/masonary/blog-masonary-06.png" alt="image not found">
                                </a>
                                <div class="blog__tag">
                                    <a href="#">Agency</a>
                                </div>
                            </div>
                            <div class="blog__content bg-solid">
                                <div class="blog__meta">
                                    <span>
                                        <i class="fa-light fa-calendar"></i>
                                        May 10, 2023
                                    </span>
                                    <span>
                                        <i class="fa-light fa-comment"></i>
                                        05 Comments
                                    </span>
                                </div>
                                <h5 class="blog__title"><a href="blog-details.html">Choose a website building platform
                                        works</a></h5>
                                <div class="blog__btn">
                                    <a class="bd-btn bordered-light is-btn-anim" href="blog-details.html">
                                        <span class="bd-btn-inner">
                                            <span class="bd-btn-normal">Read More</span>
                                            <span class="bd-btn-hover">Read More</span>
                                            <i class="contentHidden"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 grid-item">
                        <div class="blog__wrap blog__item style-five">
                            <div class="blog__thumb is-hover">
                                <a href="blog-details.html">
                                    <img src="assets/imgs/blog/masonary/blog-masonary-09.png" alt="image not found">
                                </a>
                                <div class="blog__tag">
                                    <a href="#">Agency</a>
                                </div>
                            </div>
                            <div class="blog__content bg-solid">
                                <div class="blog__meta">
                                    <span>
                                        <i class="fa-light fa-calendar"></i>
                                        May 10, 2023
                                    </span>
                                    <span>
                                        <i class="fa-light fa-comment"></i>
                                        05 Comments
                                    </span>
                                </div>
                                <h5 class="blog__title"><a href="blog-details.html">Personalize the template by
                                        customizing colors</a></h5>
                                <div class="blog__btn">
                                    <a class="bd-btn bordered-light is-btn-anim" href="blog-details.html">
                                        <span class="bd-btn-inner">
                                            <span class="bd-btn-normal">Read More</span>
                                            <span class="bd-btn-hover">Read More</span>
                                            <i class="contentHidden"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 grid-item">
                        <div class="blog__wrap blog__item style-five">
                            <div class="blog__thumb is-hover">
                                <a href="blog-details.html">
                                    <img src="assets/imgs/blog/masonary/blog-masonary-07.png" alt="image not found">
                                </a>
                                <div class="blog__tag">
                                    <a href="#">Agency</a>
                                </div>
                            </div>
                            <div class="blog__content bg-solid">
                                <div class="blog__meta">
                                    <span>
                                        <i class="fa-light fa-calendar"></i>
                                        May 10, 2023
                                    </span>
                                    <span>
                                        <i class="fa-light fa-comment"></i>
                                        05 Comments
                                    </span>
                                </div>
                                <h5 class="blog__title"><a href="blog-details.html">Work and Company Culture Program</a>
                                </h5>
                                <div class="blog__btn">
                                    <a class="bd-btn bordered-light is-btn-anim" href="blog-details.html">
                                        <span class="bd-btn-inner">
                                            <span class="bd-btn-normal">Read More</span>
                                            <span class="bd-btn-hover">Read More</span>
                                            <i class="contentHidden"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 grid-item">
                        <div class="blog__wrap blog__item style-five">
                            <div class="blog__thumb is-hover">
                                <a href="blog-details.html">
                                    <img src="assets/imgs/blog/masonary/blog-masonary-08.png" alt="image not found">
                                </a>
                                <div class="blog__tag">
                                    <a href="#">Agency</a>
                                </div>
                            </div>
                            <div class="blog__content bg-solid">
                                <div class="blog__meta">
                                    <span>
                                        <i class="fa-light fa-calendar"></i>
                                        May 10, 2023
                                    </span>
                                    <span>
                                        <i class="fa-light fa-comment"></i>
                                        05 Comments
                                    </span>
                                </div>
                                <h5 class="blog__title"><a href="blog-details.html">include a brief info about yourself
                                        and others</a></h5>
                                <div class="blog__btn">
                                    <a class="bd-btn bordered-light is-btn-anim" href="blog-details.html">
                                        <span class="bd-btn-inner">
                                            <span class="bd-btn-normal">Read More</span>
                                            <span class="bd-btn-hover">Read More</span>
                                            <i class="contentHidden"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xxl-6">
                        <div class="load__more-wrapper">
                            <div class="load__more-btn text-center">
                                <a class="bd-btn bordered-blue" href="blog.html">
                                    <span>Load More<span class="load__more-icon"></span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog area end -->

    </main>
<!-- Body main wrapper end -->
@endsection