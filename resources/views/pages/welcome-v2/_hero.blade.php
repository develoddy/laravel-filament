 <!-- Banner area start -->
 <section class="banner__area banner-height style-six p-relative  theme-bg-primary fix">
     <!-- when slide active remove this class -->
     <div class="swiper banner__active overflow-visible">
         <div class="swiper-wrapper">
             <div class="swiper-slide banner_more_item">
                 <div class="container">
                     <div class="row align-items-center g-5">
                         <div class="col-xl-7 col-lg-6 wow fadeInUp" data-wow-delay=".3s" data-wow-duration=".7s">
                             <div class="banner__content p-relative">
                                 <span class="section__subtitle bg-field wow fadeInUp" data-wow-delay=".3s"
                                     data-wow-duration=".7s">BUILDING IN PUBLIC</span>
                                 <h1 class="banner__title xlarge wow fadeInUp" data-wow-delay=".5s"
                                     data-wow-duration=".9s">Construyo productos digitales. <br> <span class="gradient-text-2">Y comparto el proceso.</span>
                                 </h1>
                                 <p class="wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1.1s">
                                    LujanDev es la marca desde la que diseño, desarrollo y lanzo productos digitales, compartiendo el código, las decisiones, los errores y los resultados.</p>
                                 <div class="banner__btn-wrap wow fadeInUp" data-wow-delay=".8s"
                                     data-wow-duration="1.3s">
                                     <div class="banner__btn">
                                         <a class="bd-btn is-bg-gradient" href="{{ route('my-project') }}"><span class="">Ver lo que estoy construyendo<i class="contentHidden"></i></span></a>
                                     </div>
                                     <div class="banner__btn">
                                         <a class="bd-btn is-border-gradient is-bg-none" href="#build-logs"><span
                                                 class="">Conocer el proceso<i class="contentHidden"></i></span></a>
                                     </div>
                                 </div>
                             </div>
                             <!-- brand style -->
                             <div class="brand__area d-none">
                                 <div class="brand__wrapper style-two">
                                     <div class="container">
                                         <div class="swiper brand__active-two">
                                             <div class="swiper-wrapper">
                                                 <div class="swiper-slide">
                                                     <div class="brand__item text-center">
                                                         <div class="brand__thumb">
                                                             <img src="assets/imgs/brand/02/brand-01.png"
                                                                 alt="image not found">
                                                         </div>
                                                     </div>
                                                 </div>
                                                 <div class="swiper-slide">
                                                     <div class="brand__item text-center">
                                                         <div class="brand__thumb">
                                                             <img src="assets/imgs/brand/02/brand-02.png"
                                                                 alt="image not found">
                                                         </div>
                                                     </div>
                                                 </div>
                                                 <div class="swiper-slide">
                                                     <div class="brand__item text-center">
                                                         <div class="brand__thumb">
                                                             <img src="assets/imgs/brand/02/brand-03.png"
                                                                 alt="image not found">
                                                         </div>
                                                     </div>
                                                 </div>
                                                 <div class="swiper-slide">
                                                     <div class="brand__item text-center">
                                                         <div class="brand__thumb">
                                                             <img src="assets/imgs/brand/02/brand-04.png"
                                                                 alt="image not found">
                                                         </div>
                                                     </div>
                                                 </div>
                                                 <div class="swiper-slide">
                                                     <div class="brand__item text-center">
                                                         <div class="brand__thumb">
                                                             <img src="assets/imgs/brand/02/brand-05.png"
                                                                 alt="image not found">
                                                         </div>
                                                     </div>
                                                 </div>
                                                 <div class="swiper-slide">
                                                     <div class="brand__item text-center">
                                                         <div class="brand__thumb">
                                                             <img src="assets/imgs/brand/02/brand-06.png"
                                                                 alt="image not found">
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
        {{-- <div class="banner__thumb bg__thumb-position include-bg" data-background="assets/imgs/banner/banner-06.png"> --}}
        <div class="banner__thumb bg__thumb-position include-bg" data-background="{{ Vite::asset('resources/imgs/banner/banner-01.png') }}">
     </div>
     <div class="banner-bg"></div>
     <div class="banner__thumb-shape">
         <img src="{{ Vite::asset('resources/imgs/shape/dot-arrow.png') }}" alt="LujanDev">
     </div>
 </section>
 <!-- Banner area end -->
