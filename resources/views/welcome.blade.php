@extends('layouts.app')

@section('content')
<main>
    <!-- Hero area start -->
    @include("pages.welcome._banner")
    <!-- Hero area end -->

    <!-- Product Spotlight area start -->
    @include("pages.welcome._product-spotlight")
    <!-- Product Spotlight area end -->

    <!-- About area start -->
    @include("pages.welcome._about")
    <!-- About area end -->
    
    <!-- Section divider -->
    <div class="section__divider">
        <hr>
    </div>

    <!-- Project area start -->
    @include("pages.welcome._projects")
    <!-- Project area end -->

    <!-- Section divider -->
    <div class="section__divider">
        <hr>
    </div>

    <!-- Journey area start -->
    @include("pages.welcome._journey")
    <!-- Journey area end -->

    <!-- Section divider -->
    <div class="section__divider">
        <hr>
    </div>

    <!-- Founder area start -->
    @include("pages.welcome._founder")
    <!-- Founder area end -->

    <!-- Contact area start -->
    @include("pages.welcome._contact")
    <!-- Contact area end -->
</main>
@endsection