<!-- breadcrumb area  start -->
<section class="breadcrumb__area p-relative style-one is-breadcrumb-space">
    <div class="breadcrumb__thumb-bg include-bg bg__thumb-position" data-background="{{ Vite::asset('resources/imgs/breadcrumb/breadcrumb-blog.png') }}"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-7 col-xl-7 col-lg-8">
                <div class="breadcrumb__content-wrapper p-relative z-index-1 text-center">
                    <div class="breadcrumb__title-wrapperr">
                        <h1 class="breadcrumb__title mb-25">Blog</h1>
                        <p class="mb-15">
                            Este es mi blog. Aquí encontrarás toda la información relacionada con mi trabajo.
                        </p>
                    </div>
                    <div class="breadcrumb__menu">
                        <nav>
                            <ul>
                                <li><span><a href="{{ route('home') }}">Inicio</a></span></li>
                                <li><span><a href="{{ route('blog') }}">Blog</a></span></li>
                                {{-- <li><span>Portfolio Classic</span></li> --}}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb area  end -->